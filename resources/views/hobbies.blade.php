@extends('layout')
@section('title', 'My Hobbies - Christian Dale Laureto')
@section('content')
    <h1>My Hobbies & Interests</h1>
    <p style="margin-bottom: 2rem; color: #a0d5f1; font-size: 1.1rem;">
        <i class="fas fa-heart"></i> Balancing code with creativity and outdoor adventures
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        @foreach($hobbies as $hobby)
            <div class="card" style="text-align: center;">
                @php
                    $icons = [
                        'Hiking' => 'fas fa-mountain',
                        'MOBAS' => 'fas fa-gamepad',
                        'Sleeping' => 'fas fa-bed',
                        'Working out (sometimes)' => 'fas fa-dumbbell',
                        'Guitar' => 'fa-solid fa-guitar',
                        'Pixel Art' => 'fas fa-palette',
                    ];
                    
                @endphp
                
                <div style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;">
                    <i class="{{ $icons[$hobby['name']] ?? 'fas fa-star' }}"></i>
                </div>
                
                <h3 style="color: #71b6e3; margin-bottom: 1rem;">{{ $hobby['name'] }}</h3>
                
                <p style="color: #d0e7f7; line-height: 1.7;">
                    {{ $hobby['description'] ?? 'A personal interest that complements my technical work.' }}
                </p>
            </div>
        @endforeach
    </div>
@endsection