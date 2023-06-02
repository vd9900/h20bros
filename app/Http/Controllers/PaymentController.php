<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Mail;

//SERVICES
use App\Services\StripeService;


//MODELS
use App\Models\StripeModel;

class PaymentController extends Controller
{

    function __construct(StripeService $stripeService)
    {
        $this->pay = $stripeService;
    }


    public function index()
    {
        return view('app.payment');
    }

    public function presubmit(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'amount' => 'required',
            'describe' => 'required',
            'password' => 'required'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if(!Hash::check($data["password"], '$2y$10$LXhfdGtm8J5X7/nzR6MJIOKv2eetMPGLHG.yZw2P6Am9up/qxtaBK')){
            return redirect()->back()->withErrors(['password' => 'Password Incorrect'])->withInput();
        }

        $intent = $this->pay->createIntent($data['amount']);


        $amountnn = $intent[1];
        $total = $intent[2];
        $uniq = uniqid();

        $date = \Carbon\Carbon::now();
        $date_ned = $date->format('Y-m-d H:i A');
        $date_acquired = $date->format("F j Y");


        $email = $data['email'] ?? 'Not found';


        $client_secret = $intent[0]->client_secret;
        $intent = $intent[0]->id;


        $content = '
            <div bgcolor="#f6f6f6" style="color: #333; height: 100%; width: 100%;" height="100%" width="100%">
                <table bgcolor="#f6f6f6" cellspacing="0" style="border-collapse: collapse; padding: 40px; width: 100%;" width="100%">
                    <tbody>
                        <tr>
                            <td width="5px" style="padding: 0;"></td>
                            <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                                <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td style="padding: 0;">
                                                <a
                                                    href="#"
                                                    style="color: #348eda;"
                                                    target="_blank"
                                                >
                                                    <img
                                                        src="https://pristinegreencleaning.com/assets/logo/PGUpholsteryAndCarpetCleaning.png"
                                                        alt="pristinegreencleaning.com"
                                                        style="height: 60px; max-width: 100%; width: 270px;"
                                                        height="50"
                                                        width="157"
                                                    />
                                                </a>
                                            </td>
                                            <td style="color: #999; font-size: 12px; padding: 0; text-align: right;" align="right">
                                                PristineGreen Cleaning<br />
                                                Invoice #'.$uniq.'<br />
                                                '.$date_acquired.'
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="5px" style="padding: 0;"></td>
                        </tr>

                        <tr>
                            <td width="5px" style="padding: 0;"></td>
                            <td bgcolor="#FFFFFF" style="border: 1px solid #000; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                                <table width="100%" style="background: #f9f9f9; border-bottom: 1px solid #eee; border-collapse: collapse; color: #999;">
                                    <tbody>
                                        <tr>
                                            <td width="50%" style="padding: 20px;"><strong style="color: #333; font-size: 24px;">$'.$amountnn.'</strong></td>
                                            <td align="right" width="50%" style="padding: 20px;">Thanks for using <span class="il">pristinegreencleaning.com</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td style="padding: 0;"></td>
                            <td width="5px" style="padding: 0;"></td>
                        </tr>
                        <tr>
                            <td width="5px" style="padding: 0;"></td>
                            <td style="border: 1px solid #000; border-top: 0; clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 0;">
                                <table cellspacing="0" style="border-collapse: collapse; border-left: 1px solid #000; margin: 0 auto; max-width: 600px;">
                                    <tbody>
                                        <tr>
                                            <td valign="top"  style="padding: 20px;">
                                                <h3
                                                    style="
                                                        border-bottom: 1px solid #000;
                                                        color: #000;
                                                        font-family: Helvetica Neue, Helvetica, Arial, Lucida Grande, sans-serif;
                                                        font-size: 18px;
                                                        font-weight: bold;
                                                        line-height: 1.2;
                                                        margin: 0;
                                                        margin-bottom: 15px;
                                                        padding-bottom: 5px;
                                                    "
                                                >
                                                    Summary
                                                </h3>
                                                <table cellspacing="0" style="border-collapse: collapse; margin-bottom: 40px;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="padding: 5px 0;">Service Date</td>
                                                            <td align="right" style="padding: 5px 0;">'.$date_ned.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 5px 0;">Your email</td>
                                                            <td align="right" style="padding: 5px 0;">'.$email.'</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 5px 0;">Service description</td>
                                                            <td align="right" style="padding: 5px 0;">'.$data['describe'].'</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">Amount paid</td>
                                                            <td align="right" style="border-bottom: 2px solid #000; border-top: 2px solid #000; font-weight: bold; padding: 5px 0;">$'.$amountnn.'</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="5px" style="padding: 0;"></td>
                        </tr>

                        <tr style="color: #666; font-size: 12px;">
                            <td width="5px" style="padding: 10px 0;"></td>
                            <td style="clear: both; display: block; margin: 0 auto; max-width: 600px; padding: 10px 0;">
                                <table width="100%" cellspacing="0" style="border-collapse: collapse;">
                                    <tbody>
                                        <tr>
                                            <td width="40%" valign="top" style="padding: 10px 0;">
                                                <h4 style="margin: 0;">Questions?</h4>
                                                <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
                                                    Please visit our
                                                    <a
                                                        href="/contact-us"
                                                        style="color: #666;"
                                                        target="_blank"
                                                    >
                                                        Support Center
                                                    </a>
                                                    with any questions.
                                                </p>
                                            </td>
                                            <td width="10%" style="padding: 10px 0;">&nbsp;</td>
                                            <td width="40%" valign="top" style="padding: 10px 0;">
                                                <h4 style="margin: 0;"><span class="il">PristineGreen Cleaning,</span> LLC</h4>
                                                <p style="color: #666; font-size: 12px; font-weight: normal; margin-bottom: 10px;">
                                                    <a href="#">115 E 23rd St 3rd floor New York, NY 10010</a>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td width="5px" style="padding: 10px 0;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        ';


        $pending = new StripeModel;
        $pending->total_money = $total;
        $pending->email = $email;
        $pending->content = $content;
        $pending->uniqId = $uniq;
        $pending->subId = $intent;
        $pending->save();


        $amount = $data['amount'];

        return view('app.stripe_pay', compact('pending', 'amount', 'client_secret', 'uniq', 'date', 'amountnn', 'date_ned'));



    
    }


    public function success(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'intent' => 'required|exists:stripe_payments,uniqId'
        ]);

        if ($validator->fails()) {
            return redirect()->route('payment')->withErrors(["payment" => 'You have to submit a payment first!'])->withInput();
        }

        $uniqId = $data['intent'];

        $payment = StripeModel::where('uniqId', $uniqId)->get()[0];


        //EMAIL ADMIN + EMAIL USER IF FOUND

        if ($payment->success == 'no') {
            // code...
        
            //EMAIL ADMIN
            Mail::send('app.emails.payment_email', array(
                    'content' => $payment->content,
                ) , function($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
                $message->to('stuart.emmons@gmail.com', 'Pristinegreencleaning')
                    ->cc(['sales@pristinegreencleaning.com','dd121412@gmail.com'])
                    ->subject("Pristinegreencleaning Payment Submitted");
                $message->from("sales@pristingreencleaning.com",'Pristingreencleaning');
            });


            if ($payment->email != "Not found") {
                Mail::send('app.emails.payment_email', array(
                        'content' => $payment->content,
                    ) , function($message) use ($payment) { //stuart.emmons@gmail.com  
                    $message->to($payment->email, 'Pristinegreencleaning')
                        ->subject("Pristinegreencleaning Payment Successfull");
                    $message->from("sales@pristingreencleaning.com",'Pristingreencleaning');
                });
            }

            $payment->success = "yes";
            $payment->save();
        }

        return view('app.pay_success', compact('uniqId'));
    }
}
