<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

use App\Models\EmailsModel;


//RULES
use App\Rules\ZipCodeRange;

class ContactController extends Controller
{
    public function contact_us()
    {
        return view("app.contact");
    }

    public function submit_contact_us(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'name' => 'required',
            'email'=>'required|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'message_' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $view = view('app.emails.contact_us', ['name' => $data['name'], 'email' => $data['email'], 'phone' => $data['phone'], 'message_' => $data['message_']])->render();


        //EMAIL ADMIN
        Mail::send('app.emails.contact_us', $data , function($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Metromaidscleaning')
                ->cc(['sales@metromaidscleaning.com','dd121412@gmail.com', 'mostafahanawork@gmail.com'])
                ->subject("Metromaidscleaning Contact Information");
            $message->from("sales@metromaidscleaning.com",'Metromaidscleaning');
        });


        $email = new EmailsModel;
        $email->type = "Contact Message - metromaidscleaning.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();



        return redirect()->back()->with('message', 'We will contact you soon!');
    }


    public function callback_number_only(Request $request)
    {
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'phone' => 'required|numeric|digits:10'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $view = view('app.emails.callback_number_only', ['phone' => $data['phone']])->render();

        //EMAIL ADMIN
        Mail::send('app.emails.callback_number_only', $data , function($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Metromaidscleaning')
                ->cc(['sales@metromaidscleaning.com','dd121412@gmail.com', 'mostafahanawork@gmail.com'])
                ->subject("Metromaidscleaning Callback Information");
            $message->from("sales@metromaidscleaning.com",'Metromaidscleaning');
        });


        $email = new EmailsModel;
        $email->type = "Callback Request - metromaidscleaning.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();

        return redirect()->back()->with('message', 'We will contact you soon!');
    }




    public function callback_with_item(Request $request)
    {
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'phone' => 'required|numeric|digits:10',
            'item' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


        $view = view('app.emails.callback_with_item', ['phone' => $data['phone'], 'item' => $data['item']])->render();

        //EMAIL ADMIN
        Mail::send('app.emails.callback_with_item', $data , function($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Metromaidscleaning')
                ->cc(['sales@metromaidscleaning.com','dd121412@gmail.com', 'mostafahanawork@gmail.com'])
                ->subject("Metromaidscleaning Callback Information With Item");
            $message->from("sales@metromaidscleaning.com",'Metromaidscleaning');
        });


        $email = new EmailsModel;
        $email->type = "Callback Request With Item - metromaidscleaning.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();

        return redirect()->back()->with('message', 'We will contact you soon!');
    }


    public function free_quote()
    {
        return view("app.request_quote");
    }

    public function submit_free_quote(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $validator = Validator::make($data, [
            'name' => 'required',
            'email'=>'required|email:rfc,dns',
            'phone' => 'required|numeric|digits:10',
            'zip' => ['required', 'digits:5', new ZipCodeRange],
            'describe' => 'required'
        ],[
            'name.required' => 'Please provide your name.',
            'email.required' => 'Your email is required to proceed.',
            'email.email' => 'Please enter a legit email address.',
            'phone.required' => 'Your phone number is required to proceed.',
            'phone.numeric' => 'Your phone number must be a legit phone number.',
            'phone.digits' => 'Your phone number must be a legit phone number.',
            'zip.required' => 'Your zip code is required to proceed.',
            'zip.digits' => 'Please enter a legit zip code.',
            'describe.required' => 'Tell us what do you need to have cleaned?'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $view = view('app.emails.free_quote_email', ['name' => $data['name'], 'email' => $data['email'], 'phone' => $data['phone'], 'zip' => $data['zip'], 'describe' => $data['describe']])->render();


        //EMAIL ADMIN
        Mail::send('app.emails.free_quote_email', $data , function($message) { //stuart.emmons@gmail.com  stuart.emmons@gmail.com dd121412@gmail.com
            $message->to('stuart.emmons@gmail.com', 'Metromaidscleaning')
                ->cc(['sales@metromaidscleaning.com','dd121412@gmail.com', 'mostafahanawork@gmail.com'])
                ->subject("Metromaidscleaning Quote Request Information");
            $message->from("sales@metromaidscleaning.com",'Metromaidscleaning');
        });


        $email = new EmailsModel;
        $email->type = "Quote Request - metromaidscleaning.com";
        $email->email = $view;
        $email->enc = uniqid();
        $email->save();



        return redirect()->back()->with('message', 'We will get you a quote soon!');
    }
}
