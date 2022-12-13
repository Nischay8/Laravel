<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm(){
        return view('upload');
    }

    public function uploadFile(Request $request){
       $request->file->store('public'); 
       return "File Has Been Uploaded Succesfully";
    }
}
