<section class="solutions-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Giải pháp của chúng tôi</h2>
        <div class="row g-3">
            @foreach ([
        [
            'title' => 'Hệ thống sưởi & điều hòa không khí',
            'desc' => 'Công nghệ tiên tiến như máy nén điều biến, hai cấp và tốc độ biến đổi mang lại sự thoải mái, độ tin cậy và tính bền vững cho cả ứng dụng dân dụng và thương mại',
            'image' => asset('images/index/solution-1.jpg'),
        ],
        [
            'title' => 'Bộ điều nhiệt (Thermostats)',
            'desc' => 'Giải pháp chính xác, tiết kiệm năng lượng như bộ điều nhiệt thông minh Sensi, hệ thống quản lý năng lượng Verdant và các mẫu truyền thống — tất cả đều được thiết kế để nâng cao sự thoải mái và độ tin cậy',
            'image' => asset('images/index/solution-2.jpg'),
        ],
        [
            'title' => 'Hệ thống điều khiển & giám sát',
            'desc' => 'Các bộ điều khiển, cảm biến, thiết bị phát hiện rò rỉ và hệ thống giám sát thời gian thực giúp tối ưu hiệu suất năng lượng, bảo vệ hàng dễ hư hỏng và nâng cao hiệu suất vận hành cho chuỗi lạnh và các ngành công nghiệp khác',
            'image' => asset('images/index/solution-3.jpg'),
        ],
        [
            'title' => 'Giải pháp làm lạnh',
            'desc' => 'Công nghệ máy nén, dàn ngưng tụ và linh kiện hệ thống giúp bảo vệ thực phẩm, nâng cao hiệu quả, độ tin cậy và hiệu suất cho ứng dụng thương mại và công nghiệp',
            'image' => asset('images/index/solution-4.jpg'),
        ],
    ] as $item)
                <div class="col-12 col-md-6 d-flex flex-wrap">
                    <div class="solution-box d-flex w-100 border rounded shadow-sm overflow-hidden">
                        <img src="{{ $item['image'] }}" class="img-fluid solution-img rounded shadow"
                            alt="{{ $item['title'] }}">
                        <div class="solution-content p-3 d-flex flex-column justify-content-center">
                            <h6 class="fw-bold mb-2" style="font-weight: bold; font-size: 15px;">{{ $item['title'] }}
                            </h6>
                            <p class="mb-0">{{ $item['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Inline CSS --}}
    <style>
        .solution-box {
            transition: all 0.3s ease;
        }

        .solution-img {
            width: 40%;
            object-fit: cover;
        }

        .solution-content {
            width: 60%;
            background-color: #fff;
            color: #000;
            transition: all 0.3s ease;
        }

        .solution-content h6 {
            color: #003399;
        }

        .solution-box:hover .solution-content {
            background-color: #003399;
            color: #fff;
        }

        .solution-box:hover .solution-content h6,
        .solution-box:hover .solution-content p {
            color: #fff;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #003399;
        }

        
    </style>
</section>
