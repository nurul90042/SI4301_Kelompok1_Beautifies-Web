<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Beautifies Website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="custom.css">
        <link rel="shortcut icon" href="{{ asset('usergueststyle/images/beautifes/1.png') }}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('usergueststyle/css/plugins.css') }}">
        
        <!-- Bootstap CSS -->
        <link rel="stylesheet" href="{{ asset('usergueststyle/css/bootstrap.min.css') }}">
        
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('usergueststyle/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('usergueststyle/css/responsive.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body style="position: relative;" class="bodyCust">
        <div class="top-header container-fluid" style="background-color: #7E33E0;"></div>
            <!--Header-->
            <div class="header-wrap classicHeader animated d-flex">
                <div class="container-fluid" style="background-color:white;">        
                    <div class="row align-items-center">
                        <!--Desktop Logo-->
                        <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                            <a href="{{ route('home-guest') }}">
                                <img src="{{ asset('usergueststyle/images/beautifes/1.png') }}" style="width: 150px; height: auto;">
                            </a>
                        </div>
                        <!--End Desktop Logo-->
                        <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                            <div class="d-block d-lg-none">
                                <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                    <i class="icon anm anm-times-l"></i>
                                    <i class="anm anm-bars-r"></i>
                                </button>
                            </div>
                            <!--Desktop Menu-->
                            <nav class="grid__item" class="navbar navbar-expand-lg bg-white"><!-- for mobile -->
                                <ul id="siteNav" class="site-nav medium center hidearrow">
                                    <li class="lvl1 parent megamenu"><a href="{{ route('home-guest') }}">Home <i class="anm anm-angle-down-l"></i></a>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="{{ route('about') }}">About <i class="anm anm-angle-down-l"></i></a>
                                    </li>
                                    <li class="lvl1 parent megamenu"><a href="{{ route('product') }}">Product <i class="anm anm-angle-down-l"></i></a>
                                    </li>
                                    <li class="lvl1 parent dropdown"><a href="{{ route('shop') }}">Shop <i class="anm anm-angle-down-l"></i></a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </nav>
                            <!--End Desktop Menu-->
                        </div>
                        <div class="col-4 col-sm-3 col-md-3 col-lg-1" style="margin-left:90px;">
                            <h1>Nama User</h1>
                        </div>
                    </div>
                </div>
            </div>        
            <!--End Header-->
        </div>
            
        

        @yield('main')

         <!--Footer-->
        <footer id="footer">
            <div class="newsletter-section">
                <div class="container">
                    <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                                <div class="display-table">
                                    
                                </div>
                            </div>
                            <div class="align-items-center" style="margin-left: 40%;">
                                <div class="footer-social">
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>    
            </div>
            <div class="site-footer">
                <div class="container">
                    <!--Footer Links-->
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                <h4 class="h4">Contact Us</h4>
                                <ul class="addressFooter">
                                    <li><i class="icon anm anm-map-marker-al"></i><p>Kp Rawa Kalong Rt.006/009 no.66 <br> Kel.Kampung Salam Kec.Bijai Utara <br>Provinsi Binjai</p></li>
                                    <li class="phone"><i class="icon anm anm-phone-s"></i><p>081390875463</p></li>
                                    <li class="email"><i class="icon anm anm-envelope-l"></i><p>@Beautifies.com</p></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box" style="margin-left: 100px;">
                                <h4 class="h4">Maps</h4>
                                <ul class="addressFooter">
                                    <li><iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1703094970635!2d107.58620751397717!3d-6.870186269126905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e697143d9521%3A0xc081c894b0b2eccb!2sTelkom%20University!5e0!3m2!1sen!2sid!4v1635359401541!5m2!1sen!2sid"
                                        width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe></li>
                                </ul>
                            </div>
                            <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box" style="margin-left: 100px;">
                                <h4 class="h4">Video Beautifies</h4>
                                <ul class="addressFooter">
                                    <li><iframe src="https://www.youtube.com/embed/PjEYU7H4XaI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Footer Links-->
                    <hr>
                    <div class="footer-bottom">
                        <div class="row">
                            <!--Footer Copyright-->
                            <div> <a href="#" style="margin-left:40%;">&copy Copyright Beatufies Company</a></div>
                            <!--End Footer Copyright-->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->
         <!-- Including Jquery -->
         <script src="{{ asset('usergueststyle/js/vendor/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/modernizr-3.6.0.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/jquery.cookie.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/wow.min.js') }}"></script>
        <!-- Including Javascript -->
        <script src="{{ asset('usergueststyle/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/plugins.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/popper.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/lazysizes.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>