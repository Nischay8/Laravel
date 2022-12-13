<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');
        }else{
            echo "No Data in the Sessions";
        }
    
    }

    public function storeSession(Request $request){
        $request->session()->put('name','Nis');
        echo "Data Has Been Added TO The Sessions";
    }

    public function DeleteSessionsData(Request $request){
        $request->session()->forget('name');
        echo "Data has Been Removed From Sessions";
    }
}
