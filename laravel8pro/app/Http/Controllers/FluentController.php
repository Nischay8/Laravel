<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo '<h1>Fluent String</h1>';
        $slice=str::of('Welcome to my Youtube Channel')->after('welcome to');
        echo $slice;
        echo "<br>";
        $slice2=Str::of('App\Http\Controller\Controller')->afterLast('\\');
        echo $slice2 ."<br>";

        $string=Str::of("Hello")->append('World');
        echo $string."<br>";

        $result=Str::of("LARAVEL 8")->lower();
        echo $result."<br>";

    }
}
