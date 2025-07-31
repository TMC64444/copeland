<style>
    .climate-card h6 {
        font-family: 'Roboto', sans-serif !important;
        color: blue;
        font-size: 18px;
    }

    /* Style cho ảnh trong climate card hoặc các card nội dung */
    .climate-card img,
    .catalogue-section img.section-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .climate-card img:hover,
    .catalogue-section img.section-img:hover {
        transform: scale(1.03);
    }

    /* Responsive cho mobile */
    @media (max-width: 768px) {

        .climate-card img,
        .catalogue-section img.section-img {
            height: 160px;
        }
    }
</style>
<section class="climate-section py-5">
    <div class="container">
        <h2 class="section-title mb-3">Ưu tiên khí hậu toàn cầu</h2>
        <p class="section-subtitle mb-5" style="font-size: 20px">
            Chúng tôi đang không ngừng phát triển để thích nghi với thế giới đang thay đổi,
            tập trung giải quyết các xu hướng bền vững lớn có ảnh hưởng đến tất cả chúng ta.
        </p>
        <div class="row g-4">
            @foreach ([
        [
            'title' => 'Chuyển đổi năng lượng',
            'desc' => 'Hỗ trợ quá trình chuyển đổi năng lượng trong các ứng dụng sưởi ấm, làm mát, chuỗi lạnh và công nghiệp',
            'image' => asset('images/index/climate-energy.jpg'),
        ],
        [
            'title' => 'Chuyển đổi môi chất lạnh',
            'desc' => 'Thúc đẩy việc sử dụng các môi chất lạnh thân thiện với khí hậu, GWP thấp và tự nhiên',
            'image' => asset('images/index/climate-refrigerants.jpg'),
        ],
        [
            'title' => 'Thực phẩm & Dược phẩm',
            'desc' => 'Bảo vệ thực phẩm dễ hỏng và dược phẩm thông qua chuỗi lạnh hiệu quả và bền vững',
            'image' => asset('images/index/climate-pharma.jpg'),
        ],
    ] as $item)
                <div class="col-12 col-md-4">
                    <div class="climate-card">
                        <img src="{{ $item['image'] }}" class="img-fluid mb-3 rounded shadow-sm"
                            alt="{{ $item['title'] }}">
                        <h6 class="fw-semibold" style="font-family: 'Georgia', serif; color: blue; font-size: 18px;">
                            {{ $item['title'] }}
                        </h6>
                        <p class="mb-0 climate-desc">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
