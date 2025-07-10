<section class="solutions-section py-5">
    <div class="container">
        <h2 class="section-title mb-4">Our solutions</h2>
        <div class="row g-3">
            @foreach ([
        ['title' => 'Heating & Air Conditioning', 'desc' => 'Advanced technologies like modulating, two-stage and variable speed compressors deliver comfort, reliability and sustainability for residential and commercial applications', 'image' => asset('images/index/solution-1.jpg')],
        ['title' => 'Thermostats', 'desc' => 'Precise, energy-efficient solutions like Sensi smart thermostats, Verdant energy management systems and traditional models, all designed to enhance comfort and reliability', 'image' => asset('images/index/solution-2.jpg')],
        ['title' => 'Controls & Monitoring Systems', 'desc' => 'Controls, sensors, leak detectors and real-time monitoring systems optimize energy efficiency, safeguard perishables and enhance operational performance across the cold chain and other industries', 'image' => asset('images/index/solution-3.jpg')],
        ['title' => 'Refrigeration', 'desc' => 'Compressor technologies, condensing units and system components protect perishables and deliver efficiency, reliability and performance for commercial and industrial applications', 'image' => asset('images/index/solution-4.jpg')],
    ] as $item)
                <div class="col-12 col-md-6 d-flex flex-wrap">
                    <div class="solution-box d-flex w-100 border rounded shadow-sm overflow-hidden">
                        <img src="{{ $item['image'] }}" class="img-fluid solution-img" alt="{{ $item['title'] }}">
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

        .solution-box:hover .solution-content h6 {
            color: #fff;
        }

        .solution-box:hover .solution-content p {
            color: #fff;
        }

        /* Optional: style the title */
        .section-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #003399;
        }
    </style>
</section>
