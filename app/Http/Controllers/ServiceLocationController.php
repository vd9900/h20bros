<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ServiceLocationsModel;

class ServiceLocationController extends Controller
{
    public function index()
    {
        $data = json_decode(file_get_contents('data.json'));



        return view("app.index_service", compact('data'));
    }


    public function service_areas_location($slug)
    {
        $service_area = ServiceLocationsModel::where('slug', $slug)->get()[0] ?? false;


        if (!$service_area) {
            return redirect()->route('service-area')->withErrors(["locations" => "we don't serve here! but soon we will be there !"]);
        }




        return view("app.service_area", compact('service_area'));
    }


    public function gramercy_manhattan()
    {
        return view("app.service_areas.branchs.gramercy_manhattan");
    }


    public function astoria_queens()
    {
        return view("app.service_areas.branchs.astoria_queens");
    }


    public function ues_manhattan()
    {
        return view("app.service_areas.branchs.ues_manhattan");
    }



    public function ridgewood_queens()
    {
        return view("app.service_areas.branchs.ridgewood_queens");
    }
}
