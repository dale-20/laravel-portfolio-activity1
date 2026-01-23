<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Home
    public function home()
    {
        $name = "Christian Dale Laureto";
        $university = "Central Mindanao University";
        $course = "BS Information Technology Student";

        return view("home", [
            "name" => $name,
            "university" => $university,
            "course" => $course
        ]);
    }

    //About
    public function about()
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

    //Projects
    public function projects()
    {
        $projects = [
            ['title' => 'Tower Bound', 'description' => 'A text_adventure game', 'image' => 'tower_bound_icon.png', 'tools' => ['Java', 'Android Studio', 'SQLite']],
            ['title' => 'Pet Care', 'description' => 'A web-based infomation management system for a veterinary clinic', 'image' => 'pet_care_icon.png', 'tools' => ['PHP', 'Bootstrap', 'MySQL']],
            ['title' => 'TrackMyRun', 'description' => 'A mobile run traker application', 'image' => 'run_logo.png', 'tools' => ['Java', 'Android Studio', 'MySQL']],
            ['title' => 'Smart Budget', 'description' => 'An expense traking application for mobile', 'image' => 'smart_budget_icon.png', 'tools' => ['Flutter', 'Dart', 'SQLite']],
        ];
        return view('projects', ['projects' => $projects]);

    }

    //Contact
    public function contact()
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

    //Hobbies
    public function hobbies()
    {
        $hobbies = [
            ['name' => 'Hiking', 'description' => 'Exploring nature trails and mountain peaks to refresh my mind and gain new perspectives.'],
            ['name' => 'MOBAS', 'description' => 'Strategic gaming helps improve problem-solving skills and quick decision-making abilities.'],
            ['name' => 'Sleeping', 'description' => 'Essential for maintaining productivity and creative thinking in development work.'],
            ['name' => 'Working out (sometimes)', 'description' => 'Staying active to maintain energy levels and mental clarity for coding sessions.'],
            ['name' => 'Guitar', 'description' => 'It serves as a sweet treat in stressful time. Not that good though. :('],
            ['name' => 'Pixel Art', 'description' => 'I recently explored this way of creating art due to a subject.'],
        ];
        return view('hobbies', ['hobbies' => $hobbies]);
    }
}
