<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view("app.services.services");
    }


    public function house_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("carpet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.house_cleaning", compact('faqs'));
    }

    public function post_construct()
    {
        // $faqs = json_decode(file_get_contents(public_path("green-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.post_construct", compact('faqs'));
    }
    public function move_in()
    {
        // $faqs = json_decode(file_get_contents(public_path("uph-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.move_in", compact('faqs'));
    }
    public function move_out()
    {
        // $faqs = json_decode(file_get_contents(public_path("area-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.move_out", compact('faqs'));
    }
    public function apart_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("matt-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.apart_cleaning", compact('faqs'));
    }
    public function green_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("orug-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.green_cleaning", compact('faqs'));
    }
    public function comm_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("comm-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.comm_cleaning", compact('faqs'));
    }
    public function maid_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("couch-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.maid_cleaning", compact('faqs'));
    }
    public function res_cleaning()
    {

        // $faqs = json_decode(file_get_contents(public_path("auto-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.res_cleaning", compact('faqs'));
    }
    public function deep_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("pet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.deep_cleaning", compact('faqs'));
    }

    public function cleaning_lady()
    {
        // $faqs = json_decode(file_get_contents(public_path("pet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.cleaning_lady", compact('faqs'));
    }

    public function house_keeping()
    {
        // $faqs = json_decode(file_get_contents(public_path("pet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.house_keeping", compact('faqs'));
    }
}
