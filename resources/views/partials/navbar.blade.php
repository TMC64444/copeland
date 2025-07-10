<nav>
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand"href="#"><img src="images/cope.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Catologue</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                </div>
            </nav>
            <div class="custom_bg">
                <div class="custom_menu">
                    <ul>
                        <ul class="nav">
                            <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">HOME</a>
                            </li>
                            <li class="{{ request()->is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">ABOUT
                                    COPELAND</a></li>
                            <li class="{{ request()->is('catalogue') ? 'active' : '' }}"><a
                                    href="{{ url('/catalogue') }}">CATOLOGUE</a></li>
                            <li class="{{ request()->is('contact') ? 'active' : '' }}"><a
                                    href="{{ url('/contact') }}">CONTACT US</a></li>
                        </ul>

                    </ul>
                </div>
                {{-- <form class="form-inline my-2 my-lg-0">
                        <div class="search_btn">
                            <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                        </div>
                    </form> --}}
            </div>
        </div>
        <!-- banner section start -->
        {{-- <div class="banner_section layout_padding">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Hosting <br>And Domain</h1>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="/images/banner.jpeg"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Hosting <br>And Domain</h1>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <h1 class="banner_taital">Hosting <br>And Domain</h1>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                           <div class="col-md-6">
                              <div class="banner_img"><img src="images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div> --}}
        <!-- banner section end -->
    </div>
</nav>
 <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
</div>
