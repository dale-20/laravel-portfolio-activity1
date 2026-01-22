<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Project 1', 'description' => 'My first web project'],
            ['title' => 'Project 2', 'description' => 'E-commerce website'],
            ['title' => 'Project 3', 'description' => 'Mobile app design'],
            ['title' => 'Project 4', 'description' => 'A text adventure game'],
        ];
        return view('projects', ['projects' => $projects]);

    }
}
