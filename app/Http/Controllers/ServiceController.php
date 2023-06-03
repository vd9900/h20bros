<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view("app.services.services");
    }


    public function hour_24_plumbers()
    {
        // $faqs = json_decode(file_get_contents(public_path("carpet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.hour_24_plumbers", compact('faqs'));
    }

    public function commercial_plumbing_repair()
    {
        // $faqs = json_decode(file_get_contents(public_path("green-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.commercial_plumbing_repair", compact('faqs'));
    }
    public function drain_cleaning()
    {
        // $faqs = json_decode(file_get_contents(public_path("uph-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.drain_cleaning", compact('faqs'));
    }
    public function bathroom_plumbing()
    {
        // $faqs = json_decode(file_get_contents(public_path("area-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.bathroom_plumbing", compact('faqs'));
    }
    public function hydro_jetting()
    {
        // $faqs = json_decode(file_get_contents(public_path("matt-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.hydro_jetting", compact('faqs'));
    }
    public function water_heaters()
    {
        // $faqs = json_decode(file_get_contents(public_path("orug-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.water_heaters", compact('faqs'));
    }
    public function sewer_repair()
    {
        // $faqs = json_decode(file_get_contents(public_path("comm-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.sewer_repair", compact('faqs'));
    }
    public function leak_detection()
    {
        // $faqs = json_decode(file_get_contents(public_path("couch-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.leak_detection", compact('faqs'));
    }
    public function sump_pump()
    {

        // $faqs = json_decode(file_get_contents(public_path("auto-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.sump_pump", compact('faqs'));
    }
    public function water_main()
    {
        // $faqs = json_decode(file_get_contents(public_path("pet-faqs.json")))->mainEntity;
        // $faqs = array_slice($faqs, 10, count($faqs));
        $faqs = [];
        return view("app.services.water_main", compact('faqs'));
    }
}
