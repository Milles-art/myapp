@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="container py-5">

    <!-- Bio -->
    <div class="row mb-5">
        <div class="col-md-8">
            <h1 class="fw-bold mb-3">About Me</h1>
            <p class="lead">I'm Millen Michael Emmanuel, a Full Stack Web Developer based in Dar es Salaam, Tanzania. I hold a Diploma in Computer Science from St. Jordan University College, Morogoro.</p>
            <p class="text-muted">I specialize in building scalable web applications using PHP, Laravel, and React. Currently working at EvMak, and open to freelance projects alongside my full-time role.</p>
        </div>
    </div>

    <!-- Experience -->
    <div class="mb-5">
        <h3 class="fw-bold mb-4">Experience</h3>
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card h-100 p-3">
                    <h5 class="fw-bold">Software Developer — EvMak</h5>
                    <p class="text-primary small">Present · Dar es Salaam</p>
                    <p class="text-muted small">Working on web development projects, building and maintaining web applications for clients.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3">
                    <h5 class="fw-bold">Freelance Web Developer</h5>
                    <p class="text-primary small">2023 – Present · Dar es Salaam</p>
                    <p class="text-muted small">Built and deployed multiple client websites and web applications. Managed web hosting, domain setup, and server configuration on cPanel.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3">
                    <h5 class="fw-bold">IT Intern — CRDB Bank</h5>
                    <p class="text-primary small">2022 · Dar es Salaam</p>
                    <p class="text-muted small">Assisted IT operations with hardware and software support. Monitored network infrastructure and supported system configuration.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card h-100 p-3">
                    <h5 class="fw-bold">IT Intern — Reviesoft</h5>
                    <p class="text-primary small">2021 · Tanzania</p>
                    <p class="text-muted small">Participated in software development tasks and testing. Assisted in client support and system troubleshooting.</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Education -->
    <div class="mb-5">
        <h3 class="fw-bold mb-4">Education</h3>
        <div class="card p-3 col-md-4">
            <h5 class="fw-bold">Diploma in Computer Science</h5>
            <p class="text-primary small">St. Jordan University College · Morogoro, Tanzania</p>
            <p class="text-muted small">2020 – 2023</p>
        </div>
    </div>

    <!-- CTA -->
    <div class="text-center py-4">
        <h4 class="fw-bold mb-3">Want to work together?</h4>
        <a href="/contact" class="btn btn-primary btn-lg">Get In Touch</a>
    </div>

</div>

@endsection