<footer>
    <!-- Your footer content -->
    <style>
        .footer {
            background-color: #0d0d0d;
            color: #f5f5f5;
            font-family: 'Segoe UI', sans-serif;
            font-size: 16px;
            padding: 30px 20px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 4px;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .footer-top {
            text-align: center;
            margin-bottom: 20px;
        }

        .footer-top hr {
            border-top: 1px solid #ccc;
            margin: 15px auto;
            width: 80%;
        }

        .footer-social a {
            margin: 0 8px;
            font-size: 18px;
            color: #fff;
        }

        .footer-policy {
            margin-top: 10px;
            font-size: 18px;
            line-height: 1.6;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            border-top: 1px solid #444;
            padding-top: 15px;
            margin-top: 30px;
        }

        .footer-brand p {
            color:#ccc;
            margin: 0;
            font-weight: bold;
        }

        .footer-logo img {
            height: 50px;
        }
    </style>
    <button id="backToTop" title="Lên đầu trang">↑</button>
    <footer class="footer">
        {{-- <div class="footer-top">
            <div class="footer-links">
                <span>Quick Links</span>
                <a href="#">Contact Us</a> |
                <a href="#">Investors</a> |
                <a href="#">Newsroom</a> |
                <a href="#">Careers</a> |
                <a href="#">Patents</a> |
                <a href="#">Sign In</a>
            </div>
            <hr>
            <div class="footer-social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="footer-policy">
                <a href="#">Sitemap</a> |
                <a href="#">Privacy Notice</a> |
                <a href="#">Terms of Use</a> |
                <a href="#">Cookies</a> |
                <a href="#">Accessibility</a> |
                <a href="#">Imprint</a> |
                <a href="#">Do Not Sell or Share My Personal Information</a> |
                <a href="#">Report a Vulnerability</a>
            </div>
        </div> --}}

        <div class="footer-bottom">
            <div class="footer-brand">
                <p>Engineered for Sustainability</p>
                <p>© 2025 Copeland L.P. All rights reserved.</p>
            </div>
            <div class="footer-logo">
                <img src="{{ asset('images/cope.png') }}" alt="Copeland Logo">
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>

    <!-- sidebar -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</footer>
