<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use File;
use Mail;
use Illuminate\Support\Str;
use Auth;

class HelperController extends Controller
{
    public function uploadImage($image, $rootDirectory)
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

            $file->move($destinationPath,$fileName);

            if (!is_dir($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }
        }

        return $saveURL;
    }
}
