<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home_page(){
        $name = "Hacker";
        $students = [
            "hacker", "Joker", "SpiderMan", "Batman", "SuperMan"
        ];
        return view("home",compact("name", "students"));
    }
}
