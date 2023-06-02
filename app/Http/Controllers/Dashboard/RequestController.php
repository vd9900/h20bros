<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\EmailsModel;

class RequestController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        $emails = EmailsModel::orderBy('created_at', 'desc')->get();

        return view('dashboard.requests.list', compact('user', 'emails'));
    }


    public function email($id)
    {

        $data = EmailsModel::where('id', $id)->get()[0] ?? abort(404);

        $user = auth()->user();
        $body = $data->email;

        return view('dashboard.requests.index', compact('user', 'body', 'data'));
    }
}
