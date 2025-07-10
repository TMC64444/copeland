<div class="container py-5">
    <style>
        .section-title {
            font-size: 28px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
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
            width: 100%;
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
            -webkit-backface-visibility: hidden;
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

    <h2 class="section-title animate__animated animate__fadeInDown">Why Copeland</h2>
    <div class="features-grid">
        <div class="flip-card animate__animated animate__fadeInLeft">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Global Scale">
                    <h4>Global Scale</h4>
                    <p>Our global presence makes it possible to serve customers wherever they are and meet challenges
                        with speed and scale.</p>
                </div>
                <div class="flip-card-back">
                     <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Global Scale">
                    <h4>Global Scale</h4>
                    <p>Worldwide reach ensures we support customers effectively, no matter the location or complexity.
                    </p>
                </div>
            </div>
        </div>

        <div class="flip-card animate__animated animate__fadeInLeft animate__delay-1s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Industry-Leading Technology">
                    <h4>Industry-Leading Technology</h4>
                    <p>Our innovation provides valuable differentiation to our customers.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Industry-Leading Technology">
                    <h4>Leading Tech</h4>
                    <p>We develop cutting-edge technologies to provide smarter, more efficient solutions.</p>
                </div>
            </div>
        </div>

        <div class="flip-card animate__animated animate__fadeInLeft animate__delay-2s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Industry Stewardship">
                    <h4>Industry Stewardship</h4>
                    <p>We provide an influential voice on critical issues, building loyalty and helping shape industry
                        change.</p>
                </div>
                <div class="flip-card-back">
 <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Industry Stewardship">                    <h4>Stewardship</h4>
                    <p>Trusted voice in industry, leading through responsibility and innovation.</p>
                </div>
            </div>
        </div>

        <div class="flip-card animate__animated animate__fadeInRight animate__delay-1s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Copeland Business System">
                    <h4>Copeland Business System</h4>
                    <p>Operational excellence and consistent execution ensure high quality and sustainable competitive
                        advantage.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Culture and Engagement">
                    <h4>Business System</h4>
                    <p>Driving performance through discipline, precision, and strategic execution.</p>
                </div>
            </div>
        </div>

        <div class="flip-card animate__animated animate__fadeInRight animate__delay-2s">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Culture and Engagement">
                    <h4>Culture and Engagement</h4>
                    <p>High engagement and an ownership mindset enable our 18,000+ people to deliver extraordinary
                        business outcomes.</p>
                </div>
                <div class="flip-card-back">
                    <img src="{{ asset('/images/index/solution-4.jpg') }}" alt="Culture and Engagement">
                    <h4>Culture</h4>
                    <p>Empowered teams drive innovation, collaboration, and sustainable growth.</p>
                </div>
            </div>
        </div>
    </div>
</div>
