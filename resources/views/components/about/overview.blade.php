<div class="container py-5">
    <style>
        .tagline {
            font-size: 18px;
            font-weight: 500;
            max-width: 900px;
            margin: 0 auto 40px;
            color: #1a1a1a;
            text-align: center;
        }

        .video-wrapper {
            text-align: center;
            margin-bottom: 60px;
        }

        .video-wrapper video {
            max-width: 100%;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .stats-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin: 60px 0;
        }

        .flip-box {
            background-color: transparent;
            width: 280px;
            height: 240px;
            perspective: 1000px;
        }

        .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-box:hover .flip-box-inner {
            transform: rotateY(180deg);
        }

        .flip-box-front,
        .flip-box-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 10px;
            padding: 30px;
            color: #cce6ff;
            background-color: #001f4d;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .flip-box-front h3,
        .flip-box-back h3 {
            font-size: 20px;
            margin: 15px 0 10px;
            color: #aee1ff;
        }

        .flip-box-front p,
        .flip-box-back p {
            font-size: 16px;
            font-weight: 600;
            line-height: 1.5;
        }

        .flip-box-back {
            transform: rotateY(180deg);
        }

        .icon {
            font-size: 40px;
            color: #00bfff;
        }
    </style>

    <div>&nbsp;</div>
    <p class="tagline animate__animated animate__fadeIn">
        VỚI NHIỀU THẬP KỶ KINH NGHIỆM VÀ CAM KẾT ĐỔI MỚI, CHÚNG TÔI MANG ĐẾN CÁC GIẢI PHÁP SƯỞI ẤM, LÀM MÁT
        VÀ CHUỖI LẠNH TIẾT KIỆM NĂNG LƯỢNG, BẢO VỆ MÔI TRƯỜNG HÔM NAY VÀ CHO CẢ NHỮNG THẾ HỆ TƯƠNG LAI.
    </p>

    <div class="video-wrapper animate__animated animate__fadeInUp">
        <video poster="{{ asset('images/index/video-placeholder.png') }}" controls style="width: 100%;">
            <source src="{{ asset('images/index/about-us.mp4') }}" type="video/mp4">
            Trình duyệt của bạn không hỗ trợ thẻ video.
        </video>
    </div>

    <div class="stats-container">
        <div class="flip-box animate__animated animate__fadeInUp">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-globe"></i>
                    <h3>QUY MÔ</h3>
                    <p>18.000+ Nhân sự<br>tại hơn 40 Quốc gia</p>
                </div>
                <div class="flip-box-back">
                    <i class="fa-solid fa-globe"></i>
                    <h3>QUY MÔ</h3>
                    <p>Đội ngũ toàn cầu của chúng tôi mang lại hiệu quả cao tại từng địa phương.</p>
                </div>
            </div>
        </div>

        <div class="flip-box animate__animated animate__fadeInUp animate__delay-1s">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>ĐỔI MỚI</h3>
                    <p>2.300+ Kỹ sư<br>3.400+ Bằng sáng chế</p>
                </div>
                <div class="flip-box-back">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>ĐỔI MỚI</h3>
                    <p>Thúc đẩy tiến bộ bằng sự sáng tạo và chuyên môn kỹ thuật sâu rộng.</p>
                </div>
            </div>
        </div>

        <div class="flip-box animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-sync-alt"></i>
                    <h3>BỀN BỈ</h3>
                    <p>200 Triệu+ Hệ thống lắp đặt<br>80% Doanh thu lặp lại</p>
                </div>
                <div class="flip-box-back">
                    <i class="fa-solid fa-sync-alt"></i>
                    <h3>BỀN BỈ</h3>
                    <p>Thiết kế để hoạt động ổn định và bền bỉ trong mọi điều kiện.</p>
                </div>
            </div>
        </div>
    </div>
</div>
