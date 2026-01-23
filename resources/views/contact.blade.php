@extends('layout')
@section('title', 'Contact Me - Christian Dale Laureto')
@section('content')
    <h1>Let's Connect</h1>
    <p style="margin-bottom: 2rem; color: #a0d5f1; font-size: 1.1rem;">
        <i class="fas fa-comments"></i> Feel free to reach out for collaborations, opportunities, or just to say hello!
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        <div class="card" style="text-align: center;">
            <div style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;">
                <i class="fas fa-envelope"></i>
            </div>
            <h3>Email</h3>
            <p style="margin: 1rem 0;">
                <a href="mailto:{{ $email }}" style="color: #71b6e3; text-decoration: none; font-size: 1.1rem;">
                    {{ $email }}
                </a>
            </p>
            <p style="color: #a0d5f1; font-size: 0.9rem;">
                I typically respond within 24 hours
            </p>
        </div>
        
        <div class="card" style="text-align: center;">
            <div style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;">
                <i class="fas fa-phone"></i>
            </div>
            <h3>Phone</h3>
            <p style="margin: 1rem 0; color: #71b6e3; font-size: 1.1rem;">
                {{ $phone }}
            </p>
            <p style="color: #a0d5f1; font-size: 0.9rem;">
                Available: 9 AM - 6 PM (GMT+8)
            </p>
        </div>
        
        <div class="card" style="text-align: center;">
            <div style="font-size: 3rem; color: #4babeb; margin-bottom: 1rem;">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h3>Location</h3>
            <p style="margin: 1rem 0; color: #71b6e3; font-size: 1.1rem;">
                {{ $university }}
            </p>
            <p style="color: #a0d5f1; font-size: 0.9rem;">
                {{ $location }}
            </p>
        </div>
    </div>
    
@endsection