<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HobbyController extends Controller
{
    public function index()
    {
        $hobbies = [
            ['name' => 'Hiking', 'description' => 'Exploring nature trails and mountain peaks to refresh my mind and gain new perspectives.'],
            ['name' => 'MOBAS', 'description' => 'Strategic gaming helps improve problem-solving skills and quick decision-making abilities.'],
            ['name' => 'Sleeping', 'description' => 'Essential for maintaining productivity and creative thinking in development work.'],
            ['name' => 'Working out (sometimes)', 'description' => 'Staying active to maintain energy levels and mental clarity for coding sessions.'],
            ['name' => 'Guitar', 'description'=> 'It serves as a sweet treat in stressful time. Not that good though. :('],
            ['name' => 'Pixel Art', 'description'=> 'I recently explored this way of creating art due to a subject.'],
        ];
        return view('hobbies', ['hobbies' => $hobbies]);
    }
}
