<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = [
            'Hiking',
            'MOBAS',
            'Sleeping',
            'Working out (sometimes)'
        ];
        return view('hobbies', ['hobbies' => $hobbies]);
    }
}
