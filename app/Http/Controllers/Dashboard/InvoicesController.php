<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Storage;
use Mail;
use PDF;
use File;

use App\Models\InvoicesModel;
use App\Models\InvoiceItemsModel;

class InvoicesController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $invoices = InvoicesModel::latest()->get();
        
        return view('dashboard.invoices.index',compact('invoices','user'));
    }


    public function create()
    {
        $user = auth()->user();
        
        return view('dashboard.invoices.create',compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'start_date' => 'required',
            'charge_to'=>'required',
            'send_to' => 'required',
            'invoice_no' => 'required',
            'payment_method' => 'required',
            'item_name' => 'required',
            'package' => 'required',
            'fixed_price' => 'required',
            'subtotal' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // dd($data);

        $invoice = new InvoicesModel;
        $invoice->name = $data['charge_to'];
        $invoice->send_to = $data['send_to'];
        $invoice->cc = $data['send_copy_to'] ?? 'no cc';
        $invoice->uniqId = $data['invoice_no'];
        $invoice->payment_method = $data['payment_method'];
        $invoice->notes = $data['notes'] ?? ' ';
        $invoice->service_date = $data['start_date'];
        $invoice->total = 0;
        $invoice->surchage = 0;
        $invoice->save();

        $total = 0;
        foreach ($data['item_name'] as $key => $item) {
            $it = new InvoiceItemsModel;
            $it->invoice_id = $invoice->id;
            $it->item = $item;

            if ($data['package'][$key] == "premium") {
                $it->package = "Premium";
            } else {
                if ($data['package'][$key] == "gold+") {
                    $it->package = "Gold &plus;";
                } else {
                    if ($data['package'][$key] == "Premium+") {
                        $it->package = "Premium &plus;";
                    } else {
                        $it->package = $data['package'][$key];
                    }
                }
            }

            $it->package = $data['package'][$key];
            $it->price = $data['fixed_price'][$key];
            $it->save();


            $total += $it->price;
        }

        $paymentmethods=[
            'Venmo'=>2.9,
            'CreditCard'=>3.5,
            'Paypal'=>0,
            'Zelle'=>0,
            'Cash'=>0,
            'Check'=>0
        ];

        $sur = ($paymentmethods[$invoice->payment_method] / 100) * $total;

        $invoice->total = $total;
        $invoice->surchage = $sur;
        $invoice->save();
        

        $this->generatepdf($invoice);

        return redirect()->back();

    }


    public function edit($id)
    {
        $user = auth()->user();


        $invoice = InvoicesModel::where('id', $id)->get()[0];
        
        return view('dashboard.invoices.edit',compact('invoice','user'));
    }



    public function update(Request $request, $id)
    {
        $data = $request->all();

        // dd($data);

        $invoice = InvoicesModel::where('id', $id)->get()[0];


        $invoice->name = $data['charge_to'];
        $invoice->send_to = $data['send_to'];
        $invoice->cc = $data['send_copy_to'] ?? 'no cc';
        $invoice->uniqId = $data['invoice_no'];
        $invoice->payment_method = $data['payment_method'];
        $invoice->notes = $data['notes'] ?? ' ';
        $invoice->service_date = $data['start_date'];
        $invoice->total = 0;
        $invoice->surchage = 0;
        $invoice->save();


        $this->deleteItems($invoice);
        


        $total = 0;
        foreach ($data['item_name'] as $key => $item) {
            $it = new InvoiceItemsModel;
            $it->invoice_id = $invoice->id;
            $it->item = $item;

            if ($data['package'][$key] == "premium") {
                $it->package = "Premium";
            } else {
                if ($data['package'][$key] == "gold+") {
                    $it->package = "Gold &plus;";
                } else {
                    if ($data['package'][$key] == "Premium+") {
                        $it->package = "Premium &plus;";
                    } else {
                        $it->package = $data['package'][$key];
                    }
                }
            }

            $it->package = $data['package'][$key];
            $it->price = $data['fixed_price'][$key];
            $it->save();


            $total += $it->price;
        }

        $paymentmethods=[
            'Venmo'=>2.9,
            'CreditCard'=>3.5,
            'Paypal'=>0,
            'Zelle'=>0,
            'Cash'=>0,
            'Check'=>0
        ];

        $sur = ($paymentmethods[$invoice->payment_method] / 100) * $total;

        $invoice->total = $total;
        $invoice->surchage = $sur;
        $invoice->save();
        
        $filename = "Invoice-".$invoice->uniqId.".pdf";

        $this->unlinkPdfs($filename);
        $this->generatepdf($invoice);

        return redirect()->back();
    }





    private function generatepdf($invoice)
    {

        $pdf = PDF::loadView('dashboard.invoices.pdf.invoice', ['invoice'=>$invoice/*, 'logo' => $logo*/]);
        
        $pdf->setOptions(['isPhpEnabled' => true,'isRemoteEnabled' => true]);
        
        $filename = "Invoice-".$invoice->uniqId.".pdf";

        $filepath = 'invoices/'.$filename;


        Storage::disk('public')->put($filepath, $pdf->output());

        $pdf->download($filename);
        

        $this->email($invoice);

        return $filename;
    }


    private function email($invoice)
    {

        Mail::send('dashboard.invoices.emails.invoice', ['invoice'=>$invoice] , function($message) use ($invoice) {
            $message->to($invoice->send_to, 'Pristinegreencleaning - Invoice')
                ->subject("Pristinegreencleaning - Invoice");


            if ($invoice->cc != 'no cc') {
                $message->cc([$invoice->cc]);
            }
            
            $message->from("sales@pristinegreencleaning.com",'Pristingreencleaning');
            $message->attach(public_path("storage/invoices/Invoice-".$invoice->uniqId.".pdf"));
        });
        return "success";
    }


    private function unlinkPdfs($file)
    {
        $destinationPath = Storage::disk('public')->path('/invoices');

        $prev_file_path = $destinationPath.'/'.$file;

        if (File::exists($prev_file_path)) {
            unlink($prev_file_path);
            return "success";
        }
    }


    private function deleteItems($invoice) {
        foreach ($invoice->items as $ii) {
            $ii->delete();
        }

        return "success";
    }
}
