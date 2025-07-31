<div class="container py-5">
    <style>
        .section-title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #00204a;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 30px;
            max-width: 1140px;
            margin: 0 auto;
        }
        .flip-card {
            background-color: transparent;
            height: 340px;
            perspective: 1000px;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .flip-card-front img {
            width: 100%;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .flip-card-front h4,
        .flip-card-back h4 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #00204a;
        }
        .flip-card-front p,
        .flip-card-back p {
            font-size: 14px;
            color: #333;
        }
        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>

    <h2 class="section-title animate__animated animate__fadeInDown">Tại sao nên chọn Copeland</h2>

    <div class="features-grid">
        <!-- 1 -->
        <div class="flip-card animate__animated animate__fadeInUp">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-global.jpg') }}" alt="Quy mô toàn cầu">
                    <h4>Quy mô toàn cầu</h4>
                    <p>Copeland hiện diện tại hơn 40 quốc gia với 18.000+ nhân sự.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-global.jpg') }}" alt="Quy mô toàn cầu">
                    <h4>Quy mô toàn cầu</h4>
                    <p>Hiệu quả địa phương, cam kết toàn cầu: phục vụ khách hàng ở bất cứ đâu.</p>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-1s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-innovation.jpg') }}" alt="Đổi mới">
                    <h4>Đổi mới kỹ thuật</h4>
                    <p>2.300 kỹ sư & hơn 3.400 bằng sáng chế hỗ trợ đổi mới liên tục.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-innovation.jpg') }}" alt="Đổi mới">
                    <h4>Đổi mới kỹ thuật</h4>
                    <p>Định hướng tương lai HVACR bằng công nghệ tiên phong và sáng tạo.</p>
                </div>
            </div>
        </div>

        <!-- 3 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-resilience.jpg') }}" alt="Bền bỉ">
                    <h4>Bền bỉ & tin cậy</h4>
                    <p>200 triệu+ hệ thống đã được lắp đặt, doanh thu tái lập 80 %.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-resilience.jpg') }}" alt="Bền bỉ">
                    <h4>Bền bỉ & tin cậy</h4>
                    <p>Thiết kế cho độ bền cao trong mọi điều kiện, đảm bảo hiệu suất liên tục.</p>
                </div>
            </div>
        </div>

        <!-- 4 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-3s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-sustainability.jpg') }}" alt="Phát triển bền vững">
                    <h4>Bền vững môi trường</h4>
                    <p>Chuyển đổi năng lượng & môi chất lạnh GWP thấp.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-sustainability.jpg') }}" alt="Phát triển bền vững">
                    <h4>Bền vững môi trường</h4>
                    <p>Giảm dấu chân carbon bằng công nghệ xanh và đổi mới bền vững.</p>
                </div>
            </div>
        </div>

        <!-- 5 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-4s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-smart-solutions.jpg') }}" alt="Giải pháp thông minh">
                    <h4>Giải pháp thông minh</h4>
                    <p>Điều khiển & giám sát thời gian thực cho hiệu suất tối ưu.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-smart-solutions.jpg') }}" alt="Giải pháp thông minh">
                    <h4>Giải pháp thông minh</h4>
                    <p>Công nghệ theo dõi thông minh giúp vận hành hiệu quả và tiết kiệm.</p>
                </div>
            </div>
        </div>

        <!-- 6 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-5s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-cold-chain.jpg') }}" alt="Chuỗi lạnh">
                    <h4>Chuỗi lạnh an toàn</h4>
                    <p>Bảo quản thực phẩm và dược phẩm trong môi trường kiểm soát.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-cold-chain.jpg') }}" alt="Chuỗi lạnh">
                    <h4>Chuỗi lạnh an toàn</h4>
                    <p>Giữ an toàn sản phẩm quan trọng, giảm lãng phí & bảo vệ quyền lợi người tiêu dùng.</p>
                </div>
            </div>
        </div>

        <!-- 7 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-6s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-global-support.jpg') }}" alt="Hỗ trợ toàn cầu">
                    <h4>Hỗ trợ toàn cầu</h4>
                    <p>Hệ thống dịch vụ & kỹ thuật viên hiện diện khắp nơi.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-global-support.jpg') }}" alt="Hỗ trợ toàn cầu">
                    <h4>Hỗ trợ toàn cầu</h4>
                    <p>Sẵn sàng hỗ trợ khẩn cấp, xử lý sự cố nhanh & chính xác mọi lúc mọi nơi.</p>
                </div>
            </div>
        </div>

        <!-- 8 -->
        <div class="flip-card animate__animated animate__fadeInUp animate__delay-7s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/feature-culture.jpg') }}" alt="Văn hóa & đội ngũ">
                    <h4>Văn hóa & đội ngũ</h4>
                    <p>Đội ngũ 18.000+ nhân viên, sáng tạo & gắn kết.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/feature-culture.jpg') }}" alt="Văn hóa & đội ngũ">
                    <h4>Văn hóa & đội ngũ</h4>
                    <p>Môi trường làm việc tích cực, đổi mới & mang lại ảnh hưởng thực sự.</p>
                </div>
            </div>
        </div>
    </div>
</div>
