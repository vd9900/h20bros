<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Image;
use File;


use App\Models\ServiceLocationsModel;

class ServiceAreasContoller extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $locations = ServiceLocationsModel::latest()->get();
        return view('dashboard.areas.list', compact('user', 'locations'));
    }


    public function create()
    {
        $user = auth()->user();

        return view('dashboard.areas.create', compact('user'));
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $file = $data['banner_url'];

        $location = new ServiceLocationsModel;
        $location->name = $data['name'];
        $location->slug = $data['url'];
        $location->header = $data['heading'];
        $location->description = $data['description'];

        $file_extension = $request->banner_url->getClientOriginalExtension();
        
        $filename = $location->slug.'-'.uniqid().'.'. $file_extension;

        // Store the file with the new name
        Storage::disk('public')->putFileAs('/service-locations/locations', $file, $filename);


        $location->link = 'locations/'.$filename;
        $location->save();


        return redirect()->route('service-areas.update', $location->id);
    }


    public function edit($id)
    {
        $user = auth()->user();
        $location = ServiceLocationsModel::where('id', $id)->get()[0] ?? abort(404);

        return view('dashboard.areas.edit', compact('user','location'));
    }


    public function update(Request $request, $id)
    {
        $user=auth()->user();
        $data = $request->all();
        
        $location = ServiceLocationsModel::where('id', $id)->get()[0] ?? abort(404);
        
        $location->name = $data['name'];
        $location->slug = $data['url'];
        $location->header = $data['heading'];
        $location->description = $data['description'];
        $location->save();
        
        
        if(isset($data['banner_url'])) {

            $prev_image_path = Storage::disk('public')->path('/service-locations/').$location->link;

            

            $file_extension = $request->banner_url->getClientOriginalExtension();
            
            $filename = $location->slug.'-'.uniqid().'.'. $file_extension;

            // Store the file with the new name
            Storage::disk('public')->putFileAs('/service-locations/locations', $request->banner_url, $filename);


            $location->link = 'locations/'.$filename;
            $location->save();


            if (File::exists( $prev_image_path)) {
              unlink($prev_image_path);
            }
        }
        
        return redirect()->back();
    }
}
