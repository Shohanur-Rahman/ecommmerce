<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use File;
use Intervention\Image\Facades\Image;
use Mail;
use Illuminate\Support\Str;
use Auth;

class HelperController extends Controller
{
    public function uploadImage($image, $rootDirectory, $width= null, $height = null)
    {
        $saveURL="";

        if($image){
            $file = $image;
            $originalName = $file->getClientOriginalName();
            $mainFolder = Carbon::now()->format('F_Y');
            $subFolder = Carbon::now()->format('d');
            $destinationPath = $rootDirectory . $mainFolder .'/'. $subFolder.'/';

            $fileName = time().'_'.$originalName;
            $saveURL = $destinationPath . $fileName;

            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            if($width || $height){
                Image::make($image)->resize($width,$height)->save($saveURL);
            }else{
                $file->move($destinationPath,$fileName);
            }
        }

        return $saveURL;
    }
}
