<!-- Updated hobbies.blade.php -->
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
                        'Working out (sometimes)' => 'fas fa-dumbbell'
                    ];
                    
                    $descriptions = [
                        'Hiking' => 'Exploring nature trails and mountain peaks to refresh my mind and gain new perspectives.',
                        'MOBAS' => 'Strategic gaming helps improve problem-solving skills and quick decision-making abilities.',
                        'Sleeping' => 'Essential for maintaining productivity and creative thinking in development work.',
                        'Working out (sometimes)' => 'Staying active to maintain energy levels and mental clarity for coding sessions.'
                    ];
                @endphp
                
                <div style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;">
                    <i class="{{ $icons[$hobby] ?? 'fas fa-star' }}"></i>
                </div>
                
                <h3 style="color: #71b6e3; margin-bottom: 1rem;">{{ $hobby }}</h3>
                
                <p style="color: #d0e7f7; line-height: 1.7;">
                    {{ $descriptions[$hobby] ?? 'A personal interest that complements my technical work.' }}
                </p>
            </div>
        @endforeach
    </div>
    
    <div class="card" style="margin-top: 3rem;">
        <h2><i class="fas fa-balance-scale"></i> Work-Life Balance</h2>
        <div style="margin-top: 1.5rem;">
            <p style="line-height: 1.8; font-size: 1.1rem;">
                I believe that diverse interests and hobbies contribute to becoming a better developer. 
                Each activity brings unique benefits that enhance my professional skills:
            </p>
            
            <ul style="margin-top: 1rem; list-style: none;">
                <li style="margin-bottom: 0.8rem; display: flex; align-items: start; gap: 0.8rem;">
                    <i class="fas fa-check" style="color: #4babeb; margin-top: 0.3rem;"></i>
                    <span><strong>Hiking</strong> teaches patience and perseverance - essential qualities for debugging complex code</span>
                </li>
                <li style="margin-bottom: 0.8rem; display: flex; align-items: start; gap: 0.8rem;">
                    <i class="fas fa-check" style="color: #4babeb; margin-top: 0.3rem;"></i>
                    <span><strong>Gaming</strong> enhances strategic thinking and pattern recognition skills</span>
                </li>
                <li style="margin-bottom: 0.8rem; display: flex; align-items: start; gap: 0.8rem;">
                    <i class="fas fa-check" style="color: #4babeb; margin-top: 0.3rem;"></i>
                    <span><strong>Rest</strong> is crucial for maintaining creativity and preventing burnout</span>
                </li>
                <li style="display: flex; align-items: start; gap: 0.8rem;">
                    <i class="fas fa-check" style="color: #4babeb; margin-top: 0.3rem;"></i>
                    <span><strong>Exercise</strong> boosts cognitive function and overall well-being</span>
                </li>
            </ul>
        </div>
    </div>
@endsection