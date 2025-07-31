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

    /* .content-text {
        flex: 1 1 45%;
    } */

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
        <h2>Chúng tôi là ai</h2>

        <p>
            Tại <strong>Copeland</strong>, chúng tôi không chỉ giải quyết các nhu cầu hiện tại về sưởi, làm mát và làm lạnh —
            mà còn kiến tạo tương lai sống bền vững. Là đơn vị dẫn đầu toàn cầu trong các lĩnh vực thương mại, công nghiệp,
            chuỗi lạnh và dân dụng, sứ mệnh của chúng tôi rất rõ ràng: giúp thế giới hít thở dễ dàng hơn, sống tốt hơn và phát triển thông minh hơn.
        </p>

        <p>
            Các giải pháp sáng tạo của chúng tôi giúp giảm lượng khí thải carbon, nâng cao hiệu suất năng lượng và
            hỗ trợ các ngành công nghiệp chuyển sang sử dụng môi chất lạnh thân thiện với môi trường —
            nhằm bảo vệ không chỉ sản phẩm như thực phẩm và thuốc men, mà còn cả hành tinh này.
        </p>

        <p>
            Với đội ngũ mạnh mẽ gồm <strong>hơn 18.000 nhân sự</strong> tại hơn 40 quốc gia và <strong>hơn 3.400 bằng sáng chế</strong>,
            chúng tôi đứng vững trên nền tảng đổi mới không ngừng. Với 200 triệu thiết bị đã được lắp đặt thành công và hơn
            2.300 kỹ sư đang tiên phong phát triển các công nghệ mới, Copeland đang tái định nghĩa sự bền vững trong thế giới HVACR — và hơn thế nữa.
        </p>

        <a href="{{ route('about') }}" class="btn-about mt-3">Về chúng tôi</a>
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
