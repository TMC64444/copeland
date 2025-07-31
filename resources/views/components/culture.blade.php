<style>
    body {
        background-color: #f8f9fa;
    }

    .btn-custom {
        padding: 10px 20px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        width: auto;
    }

    @media (max-width: 576px) {
        .btn-custom {
            width: 100%;
        }
    }

    .btn-outline-primary-custom {
        border: 2px solid #0d6efd;
        color: #0d6efd;
        background-color: transparent;
    }

    .btn-outline-primary-custom:hover {
        background-color: #ffffff;
        color: #eb0707;
        border-color: #0b5ed7;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <!-- Hình ảnh -->
            <div class="col-md-6 animate__animated animate__fadeInLeft">
                <img src="{{ asset('images/index/culture-bg.jpg') }}" alt="Văn hóa Copeland"
                    class="img-fluid rounded shadow" />
            </div>

            <!-- Nội dung -->
            <div class="col-md-6 animate__animated animate__fadeInUp">
                <h2 class="mb-3 section-title">Văn hóa của chúng tôi</h2>
                <p>
                    Con người là nền tảng cho mọi thành tựu của Copeland. Chúng tôi xây dựng một môi trường hiệu suất cao, giúp hơn 18.000 nhân sự trên toàn cầu phát triển mỗi ngày.
                </p>
                <p>
                    Với cam kết về an toàn, sự hòa nhập và đổi mới bền vững, chúng tôi đảm bảo rằng mọi thành viên đều cảm thấy an toàn, được tôn trọng, hỗ trợ và có động lực để tạo ra giá trị tích cực.
                </p>
                <div class="d-flex flex-wrap gap-3 mt-3">
                    <a href="#" class="btn btn-outline-primary-custom btn-custom">LÀM VIỆC TẠI COPELAND</a>
                    &nbsp;
                    <a href="#" class="btn btn-outline-primary-custom btn-custom">TÌM VIỆC NGAY</a>
                </div>
            </div>
        </div>
    </div>
</section>
