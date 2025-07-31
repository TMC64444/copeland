@extends('layouts.app')

@section('content')
    <style>
        .contact-box {
            transition: all 0.3s ease-in-out;
            background-color: #fff;
        }

        .contact-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <section class="contact-section py-5" data-aos="fade-up">
        <div class="container">
            &nbsp;
            <h2 class="text-center mb-5 text-primary fw-bold"> MỘT SỐ THÔNG TIN LIÊN HỆ CƠ BẢN</h2>
            <div class="row mb-5 text-center">
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-box shadow-sm p-4 rounded h-100 bg-white">
                        <i class="bi bi-geo-alt-fill text-danger fs-2 mb-2"></i>
                        <h5 class="fw-bold">Địa chỉ</h5>
                        <p class="mb-0 text-muted">17-19-21 Nguyễn Văn Trỗi, P.11, Phú Nhuận, TP.HCM</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-box shadow-sm p-4 rounded h-100 bg-white">
                        <i class="bi bi-telephone-fill text-danger fs-2 mb-2"></i>
                        <h5 class="fw-bold">Hotline</h5>
                        <p class="mb-0 text-muted">0964 840 454 (Mr. Long)</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-box shadow-sm p-4 rounded h-100 bg-white">
                        <i class="bi bi-envelope-fill text-danger fs-2 mb-2"></i>
                        <h5 class="fw-bold">Email</h5>
                        <p class="mb-0 text-muted">support@tmcgroup.vn</p>
                    </div>
                </div>
            </div>

            {{-- <form action="{{ route('contact.send') }}" method="POST" class="mx-auto" style="max-width: 700px;"> --}}
            <form action="#" method="POST" class="mx-auto" style="max-width: 700px;">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Họ và tên"
                        required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Số điện thoại">
                </div>
                <div class="mb-3">
                    <textarea name="message" rows="5" class="form-control form-control-lg" placeholder="Nội dung cần liên hệ"
                        required></textarea>
                </div>
                <div class="text-center">
                    <button class="btn btn-danger px-5 py-2 text-uppercase fw-bold">Gửi ngay</button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 1000
        });
    </script>
@endsection
