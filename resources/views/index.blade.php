@extends('layouts.app')
@section('content')

<!-- AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

<style>
    .who-we-are-section {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        align-items: stretch;
        justify-content: space-between;
    }

    .video-wrapper {
        flex: 1 1 45%;
    }

    .video-wrapper video {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .content-text {
        flex: 1 1 45%;
    }

    .content-text h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #004b8d;
    }

    .content-text p {
        font-weight: 500;
        font-size: 16px;
        color: #1a1a1a;
        margin-bottom: 1rem;
        line-height: 1.6;
    }

    .btn-about {
        background-color: #0024ff;
        color: white;
        text-transform: uppercase;
        padding: 12px 28px;
        border: none;
        border-radius: 6px;
        font-weight: bold;
        font-size: 14px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background-color 0.3s ease;
        text-decoration: none;
    }

    .btn-about:hover {
        background-color: #003cff;
        color: white;
    }

    .btn-about::after {
        content: '›';
        font-size: 16px;
        margin-left: 4px;
        display: inline-block;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .who-we-are-section {
            flex-direction: column;
        }

        .video-wrapper,
        .content-text {
            flex: 1 1 100%;
        }

        .btn-about {
            width: 100%;
            justify-content: center;
        }

        .content-text h2 {
            text-align: center;
        }

        .content-text p {
            text-align: justify;
        }
    }
</style>

<section class="container py-5 who-we-are-section">
    <div class="video-wrapper" data-aos="zoom-in-right">
        <video poster="{{ asset('images/index/video-placeholder.png') }}" controls>
            <source src="{{ asset('images/index/about-us.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="content-text" data-aos="fade-left">
        <h2>Who we are</h2>

        <p>
            At <strong>Copeland</strong>, we’re not just solving today's heating, cooling, and refrigeration needs —
            we’re engineering the future of sustainable living. As a global leader across commercial, industrial,
            cold chain, and residential sectors, our mission is clear: help the world breathe easier, live better,
            and thrive smarter.
        </p>

        <p>
            Our innovations help reduce carbon footprints, elevate energy efficiency, and empower industries to
            adopt climate-conscious refrigerants — protecting not only products like food and medicine, but also the
            planet.
        </p>

        <p>
            With a bold team of <strong>18,000+ professionals</strong> in over 40 countries and <strong>over 3,400
                patents</strong>,
            we stand on a foundation of relentless innovation. From 200 million successful installations to over
            2,300 engineers pioneering what's next, Copeland is redefining sustainability for the HVACR world — and
            beyond.
        </p>

        <a href="{{ route('about') }}" class="btn-about mt-3">About us</a>
    </div>
</section>

@include('components.climate')
@include('components.brands')
@include('components.solutions')
@include('components.culture')

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1000,
        easing: 'ease-in-out',
    });
</script>

@endsection
