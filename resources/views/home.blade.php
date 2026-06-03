@extends('layouts.app')

@section('content')

<div class="container-fluid px-0">

    <!-- Hero Section -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-8">
                <p class="text-primary fw-bold mb-1">Hello, I'm</p>
                <h1 class="display-4 fw-bold">Millen Michael Emmanuel</h1>
                <h4 class="text-muted mb-3">Full Stack Web Developer</h4>
                <p class="lead mb-4">I build clean, functional web applications that solve real problems. Based in Dar es Salaam, Tanzania — open to freelance projects and full-time opportunities.</p>
                <a href="/projects" class="btn btn-primary btn-lg me-2">View My Work</a>
                <a href="/contact" class="btn btn-outline-secondary btn-lg">Hire Me</a>
            </div>
        </div>
    </div>

    <!-- What I Do -->
    <div class="bg-light py-5">
        <div class="container">
            <h2 class="fw-bold mb-4">What I Do</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <h5 class="fw-bold">Web Development</h5>
                        <p class="text-muted">I build full-stack web applications using PHP, Laravel, and React — from simple business sites to complex SaaS platforms.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <h5 class="fw-bold">API Development</h5>
                        <p class="text-muted">I design and build REST APIs that power mobile apps, third-party integrations, and modern frontend frameworks.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 p-3">
                        <h5 class="fw-bold">Web Hosting & Deployment</h5>
                        <p class="text-muted">I handle full deployment on cPanel and Linux servers — domain setup, SSH configuration, and site go-live.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="container py-5 text-center">
        <h2 class="fw-bold mb-3">Let's Work Together</h2>
        <p class="text-muted mb-4">Have a project in mind? I'm available for freelance work and full-time roles.</p>
        <a href="/contact" class="btn btn-primary btn-lg">Get In Touch</a>
    </div>

</div>

@endsection
