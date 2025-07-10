<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Culture Section</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
        body {
            background-color: #f8f9fa;
        }

        .btn-custom {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 14px;
        }

        @media (max-width: 576px) {
            .btn-custom {
                width: 100%;
            }
        }

        .btn-custom {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        /* Custom hover for outline button */
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

        @media (max-width: 576px) {
            .btn-custom {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- Our Culture Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Image -->
                <div class="col-md-6 animate__animated animate__fadeInLeft">
                    <img src="{{ asset('images/index/culture-bg.jpg') }}" alt="Our Culture"
                        class="img-fluid rounded shadow" />
                </div>

                <!-- Content -->
                <div class="col-md-6 animate__animated animate__fadeInUp">
                    <h2 class="mb-3 section-title">Our culture</h2>
                    <p>
                        Our people are the foundation of everything we achieve. We are committed to fostering a
                        high-performing culture that empowers our 18,000 colleagues across the globe to excel every day.
                    </p>
                    <p>
                        Through an unwavering focus on safety, inclusion and sustainable innovation, we ensure our teams
                        thrive in an environment where they feel safe, valued, supported and driven to make a meaningful
                        impact.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-3">
                        <a href="#" class="btn btn-outline-primary-custom btn-custom">WORKING AT COPELAND</a>
                       <a href="#" class="btn btn-outline-primary-custom btn-custom">SEARCH CAREERS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
