<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\StripeModel;

class PaymentsController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $payments = StripeModel::where('success', 'yes')->orderBy('created_at', 'desc')->get();

        return view('dashboard.payments.list', compact('user', 'payments'));
    }


    public function payment($slug)
    {

        $data = StripeModel::where('uniqId', $slug)->get()[0] ?? abort(404);

        $user = auth()->user();
        $body = $data->content;

        return view('dashboard.payments.index', compact('user', 'body', 'data'));
    }
}
