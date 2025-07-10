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
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            border-radius: 10px;
            padding: 30px;
            color: #cce6ff;
            background-color: #001f4d;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }


        .icon {
            font-size: 40px;
            color: #00bfff;
        }
    </style>
    <div>&nbsp;</div>
    <p class="tagline animate__animated animate__fadeIn">
    WITH DECADES OF EXPERTISE AND A COMMITMENT TO INNOVATION, WE DELIVER ENERGY-EFFICIENT HEATING,
    COOLING AND COLD CHAIN TECHNOLOGIES THAT PROTECT THE PLANET, TODAY AND FOR FUTURE GENERATIONS.
</p>

    <div class="video-wrapper animate__animated animate__fadeInUp">
        <video poster="{{ asset('images/index/video-placeholder.png') }}" controls style="width: 100%;">
            <source src="{{ asset('images/index/about-us.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="stats-container">
        <div class="flip-box animate__animated animate__fadeInUp">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-globe"></i>
                    <h3>SCALE</h3>
                    <p>18,000+ Employees<br>in 40+ Countries</p>
                </div>
                <div class="flip-box-back">
                    <i class="fa-solid fa-globe"></i>
                    <h3>SCALE</h3>
                    <p>Our global workforce delivers local excellence at scale.</p>
                </div>
            </div>
        </div>

        <div class="flip-box animate__animated animate__fadeInUp animate__delay-1s">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>INNOVATION</h3>
                    <p>2,300+ Engineers<br>3,400+ Patents</p>
                </div>
                <div class="flip-box-back">
                    <i class="fa-solid fa-lightbulb"></i>
                    <h3>INNOVATION</h3>
                    <p>Driving progress through creativity and deep engineering expertise.</p>
                </div>
            </div>
        </div>

        <div class="flip-box animate__animated animate__fadeInUp animate__delay-2s">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <i class="fa-solid fa-sync-alt"></i>
                    <h3>RESILIENCE</h3>
                    <p>200M+ Installations<br>80% Recurring Revenue</p>
                </div>
                <div class="flip-box-back">
                     <i class="fa-solid fa-sync-alt"></i>
                    <h3>RESILIENCE</h3>
                    <p>Built for durability and sustained performance in all conditions.</p>
                </div>
            </div>
        </div>
    </div>
</div>
