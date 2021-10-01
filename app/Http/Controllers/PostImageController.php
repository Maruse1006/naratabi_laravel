<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Storage;

use App\Post;

 use App\Category;

 use App\Image;

 use Illuminate\Support\Facades\Auth;



class PostImageController extends Controller
{
    public function s3(Request $request)
    {
        $user = Auth::user();
        $disk = Storage::disk('s3');
      
        $image = $request->image;

    
        $path = $disk->putFile('images', $image,'public');

        $image =new Image();

        $image->title = $request->title;

        $image->path = Storage::disk('s3')->url($path);
        $image->save();

        

        return response()->json(['response'=>$path],200);
    }

    public function show(Request $request)
    {
       $images= Image::all();
       $user = Auth::user();
       $id = Auth::id();
       

        return response()->json(['images'=>$images],200);
        return response()->json(['user'=>$user],200);
        return response()->json(['id'=>$id],200);
    }
}

