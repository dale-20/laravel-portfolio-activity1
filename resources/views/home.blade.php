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
                    <img src="https://scontent.fcrk3-3.fna.fbcdn.net/v/t39.30808-6/615289799_2028739974649038_468332138528043157_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEN-z7srYLr_YJvinL_WZX8er2Ns53kOC16vY2zneQ4LbM7dBymxv6p4Zp1lHg-MpqqdB3_I5JnJITDWwS7TvMX&_nc_ohc=qZNoJ-PCyekQ7kNvwEc_7N1&_nc_oc=AdkatER9XT2DWiu8fp9QjC-VT8qPDjUE-4Eaw9h_sIqLFV2VgG2Ghk8-_KTdRpQtFV0&_nc_zt=23&_nc_ht=scontent.fcrk3-3.fna&_nc_gid=fXFRbfed8ec4hnG75fn7dg&oh=00_Afqn2kxVgY5pLkzQyZaJX5Wpg6u5_hBfd9A6C5dVGTn0FQ&oe=6977B105" 
                         alt="Christian Dale Laureto" 
                         style="width: 100%; height: auto; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                </div>
                <div style="flex: 2; min-width: 300px;">
                    <h2 style="color: #4babeb;">Christian Dale Laureto</h2>
                    <p style="color: #71b6e3; margin-bottom: 0.5rem;">
                        <i class="fas fa-graduation-cap"></i> BS Information Technology Student
                    </p>
                    <p style="color: #88c1f4;">
                        <i class="fas fa-university"></i> Central Mindanao University
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