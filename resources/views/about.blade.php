<!-- Updated about.blade.php -->
@extends('layout')
@section('title', 'About Me - Christian Dale Laureto')
@section('content')
    <h1>About Me</h1>

    <div class="card">
        <div style="display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;">
            <div style="flex: 1; min-width: 250px; text-align: center;">
                <img src="https://scontent.fcrk3-3.fna.fbcdn.net/v/t39.30808-6/615289799_2028739974649038_468332138528043157_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEN-z7srYLr_YJvinL_WZX8er2Ns53kOC16vY2zneQ4LbM7dBymxv6p4Zp1lHg-MpqqdB3_I5JnJITDWwS7TvMX&_nc_ohc=qZNoJ-PCyekQ7kNvwEc_7N1&_nc_oc=AdkatER9XT2DWiu8fp9QjC-VT8qPDjUE-4Eaw9h_sIqLFV2VgG2Ghk8-_KTdRpQtFV0&_nc_zt=23&_nc_ht=scontent.fcrk3-3.fna&_nc_gid=fXFRbfed8ec4hnG75fn7dg&oh=00_Afqn2kxVgY5pLkzQyZaJX5Wpg6u5_hBfd9A6C5dVGTn0FQ&oe=6977B105"
                    alt="Christian Dale Laureto"
                    style="width: 100%; max-width: 300px; height: auto; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.3);">
            </div>
            <div style="flex: 2; min-width: 300px;">
                <h2 style="color: #71b6e3;">{{ $name }}</h2>

                <div style="margin-top: 1.5rem;">
                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.8rem;">
                        <i class="fas fa-book" style="color: #4babeb;"></i>
                        <div>
                            <strong style="color: #88c1f4;">Course:</strong>
                            <span style="margin-left: 0.5rem;">{{ $course }}</span>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.8rem;">
                        <i class="fas fa-university" style="color: #4babeb;"></i>
                        <div>
                            <strong style="color: #88c1f4;">University:</strong>
                            <span style="margin-left: 0.5rem;">{{ $university }}</span>
                        </div>
                    </div>

                    <div style="display: flex; align-items: center; gap: 0.5rem;">
                        <i class="fas fa-map-marker-alt" style="color: #4babeb;"></i>
                        <div>
                            <strong style="color: #88c1f4;">Location:</strong>
                            <span style="margin-left: 0.5rem;">Mindanao, Philippines</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h2><i class="fas fa-bullseye"></i> My Vision</h2>
        <p style="margin-top: 1rem; line-height: 1.8; font-size: 1.1rem;">
            As a dedicated Information Technology student, I am passionate about creating
            innovative digital solutions that solve real-world problems. My goal is to become
            a full-stack developer specializing in Laravel and modern JavaScript frameworks,
            contributing to impactful projects that enhance user experiences and business efficiency.
        </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
        <div class="card">
            <h3><i class="fas fa-code"></i> Technical Skills</h3>
            <ul style="margin-top: 1rem; list-style: none;">
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-check-circle" style="color: #4babeb;"></i>
                    Laravel & PHP Development
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-check-circle" style="color: #4babeb;"></i>
                    HTML5, CSS3 & JavaScript
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-check-circle" style="color: #4babeb;"></i>
                    MySQL Database Management
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-check-circle" style="color: #4babeb;"></i>
                    Git Version Control
                </li>
                <li>
                    <i class="fas fa-check-circle" style="color: #4babeb;"></i>
                    Responsive Web Design
                </li>
            </ul>
        </div>

        <div class="card">
            <h3><i class="fas fa-rocket"></i> Current Focus</h3>
            <ul style="margin-top: 1rem; list-style: none;">
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-spinner" style="color: #4babeb;"></i>
                    Mastering Laravel Ecosystem
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-spinner" style="color: #4babeb;"></i>
                    Learning Vue.js Framework
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-spinner" style="color: #4babeb;"></i>
                    API Development & Integration
                </li>
                <li style="margin-bottom: 0.5rem;">
                    <i class="fas fa-spinner" style="color: #4babeb;"></i>
                    Web Performance Optimization
                </li>
                <li>
                    <i class="fas fa-spinner" style="color: #4babeb;"></i>
                    Cloud Deployment (AWS/DigitalOcean)
                </li>
            </ul>
        </div>
    </div>
@endsection