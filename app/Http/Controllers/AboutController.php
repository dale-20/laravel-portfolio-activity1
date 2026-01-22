<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $name = 'Laureto, Christian Dale';
        $course = 'Bachelor of Science in Information Technology';
        $university = 'Central Mindanao University';

        return view('about', [
            'name' => $name,
            'course' => $course,
            'university' => $university
        ]);
    }
}
