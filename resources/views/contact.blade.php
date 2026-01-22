<!-- Updated contact.blade.php -->
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
                Central Mindanao University
            </p>
            <p style="color: #a0d5f1; font-size: 0.9rem;">
                Mindanao, Philippines
            </p>
        </div>
    </div>
    
    <div class="card" style="margin-top: 3rem;">
        <h2><i class="fas fa-paper-plane"></i> Send Me a Message</h2>
        
        <form style="margin-top: 1.5rem;">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem;">
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; color: #88c1f4;">Your Name</label>
                    <input type="text" style="width: 100%; padding: 0.8rem; background: rgba(40, 40, 40, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 5px; color: white; font-size: 1rem;" 
                           placeholder="Enter your name">
                </div>
                <div>
                    <label style="display: block; margin-bottom: 0.5rem; color: #88c1f4;">Your Email</label>
                    <input type="email" style="width: 100%; padding: 0.8rem; background: rgba(40, 40, 40, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 5px; color: white; font-size: 1rem;" 
                           placeholder="Enter your email">
                </div>
            </div>
            
            <div style="margin-bottom: 1rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #88c1f4;">Subject</label>
                <input type="text" style="width: 100%; padding: 0.8rem; background: rgba(40, 40, 40, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 5px; color: white; font-size: 1rem;" 
                       placeholder="What is this regarding?">
            </div>
            
            <div style="margin-bottom: 1.5rem;">
                <label style="display: block; margin-bottom: 0.5rem; color: #88c1f4;">Message</label>
                <textarea rows="5" style="width: 100%; padding: 0.8rem; background: rgba(40, 40, 40, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 5px; color: white; font-size: 1rem; resize: vertical;" 
                          placeholder="Your message here..."></textarea>
            </div>
            
            <button type="submit" class="btn" style="width: 100%;">
                <i class="fas fa-paper-plane"></i> Send Message
            </button>
        </form>
    </div>
@endsection