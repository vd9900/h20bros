<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Response;
use Storage;
use Image;
use Auth;
use File;
use DB;

use App\Models\BlogsModel;

class BlogController extends Controller
{
    public function index($value='')
    {
        $user= auth()->user();

        //$post=Post::with('getPostDetails')->get();
        
        $posts = BlogsModel::orderBy('created_at', 'desc')->get();

        foreach ($posts as $post) {
            $ext = pathinfo(env('BASE_URL').$post->image, PATHINFO_EXTENSION);
            $post->thumb =  str_replace('.'.$ext,'_thumb.'.$ext,$post->image);
            $post->summary =  \Str::limit($post->summary , 100, ' ...');
            $post->meta_keywords =  \Str::limit($post->meta_keywords , 100, ' ...');
        }
        
        // dd($user);
        return view('dashboard.list',compact('posts','user'));
    }


    public function create()
    {
        $user=auth()->user();


        return view('dashboard.store',compact('user'));
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $post=new BlogsModel;
        $post->title=$request->title;
        $post->slug=$request->slug;
        $post->content=$request->content;
        $post->summary=$request->summary;
        $post->meta_description=$request->meta_description;
        $post->meta_keywords=$request->meta_keywords;
        $post->slug=$request->slug;
        $post->image_alt=$request->image_alt;
        $post->image_title=$request->image_title;
        $post->image_thumb_alt=$request->image_thumb_alt;
        $post->image_thumb_title=$request->image_thumb_title;
        $post->meta_structure = $request->schema;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $request->image->getClientOriginalExtension();
            $filename = $post->slug.'.'. $file_extension;
            $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;

            $destinationPath = Storage::disk('public')->path('/blog/uploads');



            //thumb creation
            $thumbnailImage = Image::make($image->getRealPath());
            // Get the aspect ratio of the image
            $aspectRatio = $thumbnailImage->width() / $thumbnailImage->height();

            // Define the new width of the image
            $newWidth = 800;

            // Calculate the new height of the image to maintain the aspect ratio
            $newHeight = $newWidth / $aspectRatio;
            
            $thumbnailImage->resize($newWidth, $newHeight)->save($destinationPath.'/'.$thumbname);
            
            //$image
            if ($file_extension != "webp") {
                $image = Image::make($image->getRealPath())->resize(1000, null, function($constraint){
                    $constraint->aspectRatio();
                });
                $image->encode($file_extension, 70);

                $image->save($destinationPath.'/'.$filename);
            } else {
                $image->move($destinationPath.'/', $filename);
            }


            // $image->move($destinationPath.'/', $filename);

          $post->image = '/blog/uploads/'.$filename;
        }
        $post->save();

        // return redirect()->back();
        return redirect()->route('blog.update', [$post->id])->with(["message" => "Blog Created Successfully", "type" => "success"]);
    }


    public function edit($id)
    {
        $user = auth()->user();
        
        $post = BlogsModel::where('id', $id)->get()[0];
        
        return view('dashboard.edit',compact('post','user'));
    }


    public function update(Request $request, $id)
    {

        $validatedata = $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);


        $prevPost = BlogsModel::where('id', $id)->first();
        $post['title']=$request->title;
        $post['slug']=$request->slug;
        $post['content']=$request->content;
        $post['summary']=$request->summary;
        $post['meta_description']=$request->meta_description;
        $post['meta_keywords']=$request->meta_keywords;
        $post['slug']=$request->slug;
        $post['image_alt']=$request->image_alt;
        $post['image_title']=$request->image_title;
        $post['image_thumb_alt']=$request->image_thumb_alt;
        $post['image_thumb_title']=$request->image_thumb_title;
        $post['meta_structure'] = $request->schema;
        $date = Carbon::now();
        $date->format('Y-m-d h:i:s');
        $post['updated_at'] = $date;

        $prev_image = $prevPost->image;
        $info = pathinfo($prev_image);
        $prev_image_name =  basename($prev_image,'.'.$info['extension']);
        $tmp = explode('.', $prev_image);
        $prev_image_ext = end($tmp);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_extension = $request->image->getClientOriginalExtension();

            //for the old cached resources
            $uniq_enc = uniqid();
            
            $filename = $post['slug'].'-'.$uniq_enc.'.'. $file_extension;
            $thumbname = pathinfo($filename, PATHINFO_FILENAME).'_thumb.'.$file_extension;

            $destinationPath = \Storage::disk('public')->path('/blog/uploads');



            $thumbnailImage = Image::make($image->getRealPath());

            
            // Get the aspect ratio of the image
            $aspectRatio = $thumbnailImage->width() / $thumbnailImage->height();

            // Define the new width of the image
            $newWidth = 800;

            // Calculate the new height of the image to maintain the aspect ratio
            $newHeight = $newWidth / $aspectRatio;
            
            $thumbnailImage->resize($newWidth, $newHeight)->save($destinationPath.'/'.$thumbname);


            //thumb creation
            // $thumbnailImage = Image::make($image->getRealPath());
            // $thumbnailImage->resize(350,270)->save($destinationPath.'/'.$thumbname);
            
            //$image
            // dd($file_extension);

            if ($file_extension != "webp") {
                 $image = Image::make($image->getRealPath())->resize(1000, null, function($constraint){
                    $constraint->aspectRatio();
                });
                $image->encode($file_extension, 70);

                $image->save($destinationPath.'/'.$filename);
            } else {
                $image->move($destinationPath.'/', $filename);
            }
           

            
            // 

            
            $post['image'] = '/blog/uploads/'.$filename;

            $prev_image_path = $destinationPath.'/'.$prev_image_name.'.'.$prev_image_ext;
            $prev_image_thumb_path = $destinationPath.'/'.$prev_image_name.'_thumb.'.$prev_image_ext;
            if (File::exists( $prev_image_path)) {
              unlink($prev_image_path);
            }
            if (File::exists( $prev_image_thumb_path)) {
              unlink($prev_image_thumb_path);
            }
        }
        BlogsModel::where('id', $id)
          ->update($post);

        return redirect()->back()->with(["message" => "Blog Updated Successfully", "type" => "success"]);
    }



    public function delete($id)
    {
        $result = BlogsModel::where('id', $id)
              ->get()[0];

        Storage::disk('public')->delete($result->image);
        Storage::disk('public')->delete($result->image.'_thumb.'.explode('.', $result->image)[1]);


        BlogsModel::where('id', $id)
                ->delete();
        
        return redirect()->back();
    }
}
