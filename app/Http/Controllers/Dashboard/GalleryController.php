<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use Image;
use File;

use App\Models\GalleryModel;


class GalleryController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        $gallery = GalleryModel::orderBy('id', 'desc')->get();

        return view('dashboard.gallery.index', compact('user','gallery'));
    }

    public function create(Request $request)
    {
        $user = auth()->user();
        return view('dashboard.gallery.create', compact('user'));
    }


    public function store(Request $request)
    {
        $data = new GalleryModel;


        if($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $request->image->getClientOriginalExtension();
            $filename = $request->image->getClientOriginalName();
            
            $uniq_enc = uniqid();
            $filename = pathinfo($filename, PATHINFO_FILENAME).'-'.$uniq_enc.'.'. $file_extension;
            
            $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;
            
            $destinationPath = Storage::disk('public')->path('gallery/');
            

            //thumb creation
            $thumbnailImage = Image::make($image->getRealPath());
            // Get the aspect ratio of the image
            $aspectRatio = $thumbnailImage->width() / $thumbnailImage->height();

            // Define the new width of the image
            $newWidth = 800;

            // Calculate the new height of the image to maintain the aspect ratio
            $newHeight = $newWidth / $aspectRatio;
            
            $thumbnailImage->resize($newWidth, $newHeight)->save($destinationPath.'/'.$thumbname);

            $image = Image::make($image->getRealPath())->resize(1000, null, function($constraint){
                $constraint->aspectRatio();
            });
            $image->encode($file_extension, 70);

            $image->save($destinationPath.'/'.$filename);

            $data->image_title = $request->image_title;
            $data->image_alt = $request->image_alt;
            $data->thumb_title = $request->thumb_title;
            $data->thumb_alt = $request->thumb_alt;
            $data->thumb_image = $thumbname;
            $data->image = $filename;
            $data->gallery_index = 1;
            $data->save();
            
            $this->re_index();
        }

        

        return redirect()->route('gallery.list');
    }

    public function edit($id)
    {
        $user = auth()->user();
        
        $gallery = GalleryModel::where('id', $id)->get()[0];

        return view('dashboard.gallery.edit', compact('user','gallery'));
    }

    public function update(Request $request,$id)
    {
        
        $data = GalleryModel::where('id', $id)->get()[0];

        

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $request->image->getClientOriginalExtension();
            $filename = $request->image->getClientOriginalName();
            
            $uniq_enc = uniqid();
            $filename = pathinfo($filename, PATHINFO_FILENAME).'-'.$uniq_enc.'.'. $file_extension;
            
            $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;

            $destinationPath = Storage::disk('public')->path('gallery/');
            

            //thumb creation
            $thumbnailImage = Image::make($image->getRealPath());
            // Get the aspect ratio of the image
            $aspectRatio = $thumbnailImage->width() / $thumbnailImage->height();

            // Define the new width of the image
            $newWidth = 800;

            // Calculate the new height of the image to maintain the aspect ratio
            $newHeight = $newWidth / $aspectRatio;
            
            $thumbnailImage->resize($newWidth, $newHeight)->save($destinationPath.'/'.$thumbname);

            $image = Image::make($image->getRealPath())->resize(1000, null, function($constraint){
                $constraint->aspectRatio();
            });
            $image->encode($file_extension, 70);

            $image->save($destinationPath.'/'.$filename);


            $prev_image_path = $destinationPath.'/'.$data->image;
            $prev_image_thumb_path = $destinationPath.'/'.$data->thumb_image;
            if (File::exists($prev_image_path)) {
              unlink($prev_image_path);
            }
            if (File::exists( $prev_image_thumb_path)) {
              unlink($prev_image_thumb_path);
            }


            $data->image_title = $request->image_title;
            $data->image_alt = $request->image_alt;
            $data->thumb_title = $request->thumb_title;
            $data->thumb_alt = $request->thumb_alt;
            $data->thumb_image = $thumbname;
            $data->image = $filename;
            $data->save();

            $this->re_index();
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        $data = GalleryModel::where('id', $id)->get()[0];

        $destinationPath = Storage::disk('public')->path('gallery/');

        $prev_image_path = $destinationPath.'/'.$data->image;
        $prev_image_thumb_path = $destinationPath.'/'.$data->thumb_image;
        if (File::exists($prev_image_path)) {
          unlink($prev_image_path);
        }
        if (File::exists( $prev_image_thumb_path)) {
          unlink($prev_image_thumb_path);
        }

        GalleryModel::where('id', $id)
                ->delete();

        return redirect()->back();
    }


    private function re_index() {
        $gallery = GalleryModel::orderBy('id', 'desc')->get();

        foreach ($gallery as $index => $image) {
            $image->update(["gallery_index" => $index]);
        }
    }
}
