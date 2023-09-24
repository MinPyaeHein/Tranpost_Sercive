<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public  static function uploadImage($request, $file_name)
    {
        if ($request->image != null && $request->hasFile('image')) {
            $image = $request->file('image');
            $newName = time() . '.jpg';
            $destinationPath = str_replace('/TRANPOST_SERVICE/public', '', public_path('/storage/' . $file_name));
            $path = $image->move($destinationPath,   $newName);
            return $newName;
        }
    }

    public  static function uploadImages($request, $file_name)
    {
        if ($request->image != null && $request->hasFile('image')) {
            $newName = time() . '.jpg';
            $destinationPath = str_replace('/TRANPOST_SERCIVE/public', '', public_path('/storage/' . $file_name));
            $path = $request->image->move($destinationPath,   $newName);
            return $newName;
        }
    }
}
