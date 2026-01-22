<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            ['title' => 'Tower Bound', 'description' => 'A text_adventure game',  'image' => 'tower_bound_icon.png', 'tools'=> ['Java', 'Android Studio', 'SQLite']],
            ['title' => 'Pet Care', 'description' => 'A web-based infomation management system for a veterinary clinic', 'image' => 'pet_care_icon.png', 'tools'=> ['PHP', 'Bootstrap' ,'MySQL']],
            ['title' => 'TrackMyRun', 'description' => 'A mobile run traker application', 'image' => 'run_logo.png', 'tools'=> ['Java', 'Android Studio', 'MySQL']],
            ['title' => 'Smart Budget', 'description' => 'An expense traking application for mobile', 'image' => 'smart_budget_icon.png', 'tools'=> ['Flutter', 'Dart', 'SQLite']],
        ];
        return view('projects', ['projects' => $projects]);

    }
}
