<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Beautifies Website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="custom.css">
        <link rel="shortcut icon" href="beautifies 940x348.png" />
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
        <div class="top-header" style="background-color: #7E33E0;"></div>
        <!-- Start Navbar -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="beautifies 940x348.png" style="width: 150px; height: auto;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  style="color: black;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: black;">Shop</a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary label-form" style="margin-top:0px; width: 7%; margin-right: 4%;" data-bs-toggle="modal" data-bs-target="#loginmodal">Login</button>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

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
        <script src="{{ asset('usergueststyle/js/vendor/bootstrap.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/plugins.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/lazysizes.js') }}"></script>
        <script src="{{ asset('usergueststyle/js/vendor/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>