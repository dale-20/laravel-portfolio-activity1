<!-- Updated projects.blade.php -->
@extends('layout')
@section('title', 'My Projects - Christian Dale Laureto')
@section('content')
    <h1>My Projects</h1>
    <p style="margin-bottom: 2rem; color: #a0d5f1; font-size: 1.1rem;">
        <i class="fas fa-lightbulb"></i> Showcasing my journey in web development through practical projects
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        @foreach($projects as $index => $project)
            <div class="card" style="position: relative; overflow: hidden;">
                <div style="position: absolute; top: 15px; right: 15px; background: #4babeb; color: white; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                    Project {{ $index + 1 }}
                </div>
                
                <h3 style="color: #71b6e3; margin-bottom: 1rem;">
                    <i class="fas fa-project-diagram"></i> {{ $project['title'] }}
                </h3>
                
                <p style="color: #d0e7f7; line-height: 1.7; margin-bottom: 1.5rem;">
                    {{ $project['description'] }}
                </p>
                
                <div style="display: flex; gap: 1rem; margin-top: auto;">
                    <span class="tech-tag" style="background: rgba(75, 171, 235, 0.2); color: #4babeb; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.9rem;">
                        <i class="fab fa-laravel"></i> Laravel
                    </span>
                    <span class="tech-tag" style="background: rgba(113, 182, 227, 0.2); color: #71b6e3; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.9rem;">
                        <i class="fab fa-js"></i> JavaScript
                    </span>
                    <span class="tech-tag" style="background: rgba(136, 193, 244, 0.2); color: #88c1f4; padding: 0.3rem 0.8rem; border-radius: 15px; font-size: 0.9rem;">
                        <i class="fas fa-database"></i> MySQL
                    </span>
                </div>
                
                <div style="margin-top: 1.5rem; display: flex; gap: 1rem;">
                    <a href="#" class="btn" style="flex: 1; text-align: center;">
                        <i class="fas fa-eye"></i> View Details
                    </a>
                    <a href="#" class="btn" style="flex: 1; text-align: center; background: rgba(75, 171, 235, 0.2); color: #4babeb;">
                        <i class="fab fa-github"></i> View Code
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="card" style="margin-top: 3rem; text-align: center;">
        <h2><i class="fas fa-plus-circle"></i> More Projects Coming Soon</h2>
        <p style="margin-top: 1rem; color: #a0d5f1;">
            I'm continuously working on new projects to expand my skills and portfolio.
            Stay tuned for updates!
        </p>
        <a href="{{ route('contact') }}" class="btn" style="margin-top: 1rem;">
            <i class="fas fa-handshake"></i> Interested in Collaboration?
        </a>
    </div>
@endsection