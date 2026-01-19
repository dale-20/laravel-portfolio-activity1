<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    $name = 'Laureto, Christian Dale';
    $course = 'Bachelor of Science in Information Technology';
    $university = 'Central Mindanao University';

    return view('about', [
        'name' => $name,
        'course' => $course,
        'university' => $university
    ]);
})->name('about');

Route::get('/projects', function () {
    $projects = [
        ['title' => 'Project 1', 'description' => 'My first web project'],
        ['title' => 'Project 2', 'description' => 'E-commerce website'],
        ['title' => 'Project 3', 'description' => 'Mobile app design'],
    ];
    return view('projects', ['projects' => $projects]);
})->name('projects');

Route::get('/contact', function () {
    $email = 's.laureto.christiandale@cmu.edu.ph';
    $phone = '+63 963 096 2494';

    return view('contact', [
        'email' => $email,
        'phone' => $phone
    ]);
})->name('contact');