<section class="climate-section py-5">
    <div class="container">
        <h2 class="section-title mb-3">Global climate priorities</h2>
        <p class="section-subtitle mb-5" style="font-size: 20px">
            We are evolving to reflect the changing world around us and are focused on addressing
            multiple sustainability-linked megatrends that impact us all.
        </p>
        <div class="row g-4">
            @foreach ([['title' => 'Energy Transition', 'desc' => 'Supporting the energy transition across heating, cooling, cold chain and industrial applications', 'image' => asset('images/index/climate-energy.jpg')], ['title' => 'Refrigerants Transition', 'desc' => 'Accelerating the adoption of climate-friendly, low-GWP and natural refrigerants', 'image' => asset('images/index/climate-refrigerants.jpg')], ['title' => 'Food & Pharmaceutical Availability', 'desc' => 'Safeguarding perishable food and medical products through an efficient and sustainable cold chain', 'image' => asset('images/index/climate-pharma.jpg')]] as $item)
                <div class="col-12 col-md-4">
                    <div class="climate-card">
                        <img src="{{ $item['image'] }}" class="img-fluid mb-3 rounded shadow-sm"
                            alt="{{ $item['title'] }}">
                        <h6 class="fw-semibold"
                        style="font-family: 'Georgia', serif; color: blue; font-size: 18px;">{{ $item['title'] }}</h6>
                        <p class="mb-0 climate-desc">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
