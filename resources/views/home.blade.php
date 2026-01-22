@extends('layout')
@section('title', 'Home - Christian Dale Laureto')
@section('content')
    <div style="text-align: center; padding: 2rem 0;">
        <h1>Welcome to My Digital Portfolio</h1>
        <p style="font-size: 1.3rem; color: #a0d5f1; margin-top: 1rem; max-width: 600px; margin: 1rem auto;">
            <i class="fas fa-quote-left" style="color: #4babeb;"></i>
            Transforming ideas into functional, elegant web solutions
            <i class="fas fa-quote-right" style="color: #4babeb;"></i>
        </p>
        
        <div class="card" style="max-width: 800px; margin: 2rem auto; text-align: left;">
            <div style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
                <div style="flex: 1; min-width: 200px;">
                    <img src="{{ asset('images/ako_images/ako.JPG') }}" 
                         alt="Christian Dale Laureto" 
                         style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                </div>
                <div style="flex: 2; min-width: 300px;">
                    <h2 style="color: #4babeb;">{{$name}}</h2>
                    <p style="color: #71b6e3; margin-bottom: 0.5rem;">
                        <i class="fas fa-graduation-cap"></i> {{$course}}
                    </p>
                    <p style="color: #88c1f4;">
                        <i class="fas fa-university"></i> {{ $university }}
                    </p>
                    <p style="margin-top: 1rem; line-height: 1.7;">
                        Passionate about creating innovative web applications with clean code and 
                        user-centered design. Currently specializing in Laravel development and 
                        exploring modern web technologies.
                    </p>
                    <a href="{{ route('about') }}" class="btn" style="margin-top: 1rem;">
                        <i class="fas fa-arrow-right"></i> Learn More About Me
                    </a>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 3rem;">
            <div class="card" style="text-align: center;">
                <i class="fas fa-laptop-code" style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;"></i>
                <h3>Web Development</h3>
                <p>Building responsive and dynamic web applications</p>
            </div>
            
            <div class="card" style="text-align: center;">
                <i class="fas fa-mobile-alt" style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;"></i>
                <h3>Responsive Design</h3>
                <p>Creating mobile-friendly user experiences</p>
            </div>
            
            <div class="card" style="text-align: center;">
                <i class="fas fa-server" style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;"></i>
                <h3>Backend Solutions</h3>
                <p>Developing robust server-side applications</p>
            </div>
        </div>
    </div>
@endsection