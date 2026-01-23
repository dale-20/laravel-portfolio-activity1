<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $email = 's.laureto.christiandale@cmu.edu.ph';
        $phone = '+63 963 096 2494';
        $location = 'Mindanao, Philippines';
        $university = 'Central Mindanao University';

        return view('contact', [
            'email' => $email,
            'phone' => $phone,
            'location' => $location,
            'university' => $university,
        ]);
    }
}
