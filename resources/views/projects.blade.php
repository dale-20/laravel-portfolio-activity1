@extends('layout')
@section('title', 'My Projects - Christian Dale Laureto')
@section('content')
    <h1>My Projects</h1>
    <p style="margin-bottom: 2rem; color: #a0d5f1; font-size: 1.1rem;">
        <i class="fas fa-lightbulb"></i> Showcasing my journey in web development through practical projects
    </p>

    @php
        function getToolIcon($toolName)
        {
            $icons = [
                'Java' => 'fab fa-java',
                'Android Studio' => 'fas fa-mobile-alt',
                'SQLite' => 'fas fa-database',
                'PHP' => 'fab fa-php',
                'Bootstrap' => 'fab fa-bootstrap',
                'MySQL' => 'fas fa-database',
                'Flutter' => 'fas fa-mobile-alt',
                'Dart' => 'fab fa-google',
            ];
            return $icons[$toolName] ?? 'fas fa-code';
        }
    @endphp

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
        @foreach($projects as $index => $project)
            <div class="card" style="position: relative; overflow: hidden;">
                <div
                    style="position: absolute; top: 15px; right: 15px; background: #4babeb; color: white; padding: 0.3rem 0.8rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600;">
                    Project {{ $index + 1 }}
                </div>

                <h3 style="color: #71b6e3; margin-bottom: 1rem;">
                    <i class="fas fa-project-diagram"></i> {{ $project['title'] }}
                </h3>

                <img src="{{ asset('images/icon/' . $project['image']) }}" alt="Christian Dale Laureto"
                    style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">

                <p style="color: #d0e7f7; line-height: 1.7; margin-bottom: 1.5rem;">
                    {{ $project['description'] }}
                </p>

                <div style="display: flex; gap: 1rem; margin-top: auto; flex-wrap: wrap;">
                    @foreach ($project['tools'] as $tool)
                        <span class="tech-tag"
                            style="background: rgba(75, 171, 235, 0.2); color: #4babeb; padding: 0.5rem 1rem; border-radius: 15px; font-size: 0.9rem; display: flex; align-items: center; gap: 0.5rem;">
                            <i class="{{ getToolIcon($tool) }}" style="font-size: 1.1rem;"></i>
                            {{ $tool }}
                        </span>
                    @endforeach
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