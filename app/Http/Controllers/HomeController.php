<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = "Christian Dale Laureto";
        $university = "Central Mindanao University";
        $course = "BS Information Technology Student";
        
        return view("home", [
            "name"=> $name,
            "university"=> $university,
            "course"=> $course
        ]);
    }
}
