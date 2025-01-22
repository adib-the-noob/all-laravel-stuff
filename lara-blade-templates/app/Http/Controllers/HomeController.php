<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_page(){
        $name = "adib";
        return view("home",compact("name"));
    }
}
