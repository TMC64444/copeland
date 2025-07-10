@extends('layouts.app')

@section('content')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="{{ asset('css/catalogue.css') }}" rel="stylesheet">
    <style>
        .catalogue-section img {
            cursor: zoom-in;
        }
    </style>
    <div>&nbsp;</div>
   

    <section class="catalogue-section py-5" data-aos="fade-up">
        <div class="container">
            <h2>Giới thiệu</h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>Dòng máy Copeland ZX được thiết kế cho các ứng dụng làm lạnh trung và thấp nhiệt độ, bao gồm dòng
                        biến tần (Digital Modulation).
                        ZX được ưa chuộng tại thị trường Châu Á nhờ hiệu suất năng lượng vượt trội và tính năng điện tử thân
                        thiện người dùng.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/catalogue/zx-intro.jpg') }}" alt="Copeland ZX Introduction"
                        class="img-fluid rounded shadow section-img">
                </div>
            </div>
        </div>
    </section>
    @include('components/catalogue/features')

    @include('components/catalogue/specifications')

    @include('components/catalogue/selection')

    @include('components/catalogue/parts')

    @include('components/catalogue/system')

    @include('components/catalogue/dimensions')

    @include('components/catalogue/controller')

    @include('components/catalogue/benefits')

    @include('components/catalogue/srcipt')
@endsection
