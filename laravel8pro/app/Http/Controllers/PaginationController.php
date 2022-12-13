<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function allUsers(){
        $users=User::paginate(100);
        return View('users',compact('users'));
    }
}
