<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request){




        $uploadedFile=$request->file('file');
        $filename=time().$uploadedFile->getClientOriginalName();
        $original_name=$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileAs(
            'photos',$uploadedFile,$filename
        );
        $image=new Image();
        $image->name=$original_name;
        $image->path=$filename;
        $image->user_id=1;
        $image->save();
        return response()->json([
            'image_slide_id'=>$image->id
        ]);

    }
}
