<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

use App\Models\GalleryModel;



class GalleryController extends Controller
{
    public function index(Request $request)
    {
        $images = GalleryModel::orderBy('id', 'desc')->paginate(4);
        $imageLG = GalleryModel::orderBy('id', 'desc')->select(['image AS src', 'thumb_image AS thumb'])->get();
        $imageLG = $imageLG->toArray();
       
        $newLG = [];

        foreach ($imageLG as $im) {
            array_push($newLG, ["src" => Storage::disk('public')->url('gallery/'.$im['src']), "thumb" => Storage::disk('public')->url('gallery/'.$im['thumb']) ]);
        }
        // dd($imageLG);

        // dd($newLG);
        if ($request->ajax()) {
            // dd($indexed);
            $view = view('app.pagination.gallery.index', compact('images'))->render();

            return response()->json(['html' => $view]);
        }

        return view("app.gallery", compact('images', 'newLG'));
    }
}
