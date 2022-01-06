@extends('layouts.user')
@section('main')

<!-- Start Page -->
<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <section id="about" style="padding-top: 100px; padding-bottom: 150px; background-color: #EFDEFC">
                            <div class="container" >
                                <div class="mt-3 col-12">
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <div style="width:100%;">
                                                <h1 style="color:black; font-size: 35px;"><font face="Poppins"><b>Selamat Datang Di <b>Beautifies</b> Indonesia</b></font></h1>
                                                <p style="font-size: 15px;"><font face="Poppins">Kamu akan menemukan nutrisi kulitmu disini. Yuk! percantik dirimu dengan produk-produk alami dan yang pastinya halal bersama kami.</font></p>
                                                <div style="padding-top:70px;">
                                                    <button type="button" class="btn btn-primary label-form" style="margin-top:0px;width: 95%;" data-bs-toggle="modal" data-bs-target="#registmodal">Registrasi Sekarang</button>
                                                    <h6 style="text-align:center; color: black; margin-top: 10px;">Yuk gabung untuk jadi member tetap!</h6>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="col-6 mt-3">
                                            <img src="{{ asset('usergueststyle/images/beautifes/slider3.png') }}"  alt="..."> 
                                        </div>           
                                    </div>
                                </div>            
                            </div>
                        </section>
                    </div>
                </div>
                <div class="slide">
                	<div class="blur-up lazyload">
                        <section id="about" style="padding-top: 100px; padding-bottom: 150px; background-color: #EFDEFC;">
                            <div class="container" >
                                <div class="mt-3 col-12">
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <div style="width:100%;">
                                                <p style="font-size: 10px;"><font face="Poppins">Best Value!</font></p>
                                                <h1 style="color:black; font-size: 35px;"><font face="Poppins"><b>Skincare <b>Terbaru </b> Akhir Pekan Ini!</b></font></h1>
                                                <p style="font-size: 10px;"><font face="Poppins">Dapatkan diskon hingga 70%</font></p>
                                                <div style="padding-top:70px;">
                                                    <button type="button" class="btn btn-primary label-form" style="margin-top:0px;width: 95%;" data-bs-toggle="modal" data-bs-target="#registmodal">Registrasi Sekarang</button>
                                                    <h6 style="text-align:center; color: black; margin-top: 10px;">Yuk gabung untuk jadi member tetap!</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <img src="{{ asset('usergueststyle/images/beautifes/slider1.png') }}"  alt="...">
                                        </div>              
                                    </div>
                                </div>            
                            </div>
                        </section>
                    </div>
                </div>
            </div>
         </div>
         <!-- End Page -->

         <!-- Start Produk -->
         <section>
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h1 class="h1">Produk Kami</h1>
                                <p>Browse the huge variety of our products</p>
                            </div>
                            <div class="tabs-listing">
                                <div class="tab_container">
                                    <div id="tab1" class="tab_content grid-products">
                                        <div class="productSlider">
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img src="{{ asset('usergueststyle/images/beautifes/125.jpeg') }}"  alt="...">
                                                        <!-- End image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
                                                    
                                                    <!-- countdown start -->
                                                    <div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                                    <!-- countdown end -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        @csrf
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                    
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Edna Dress</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <div class="product-tags" style="margin-top: 5px;">
                                                        <a style="color:deepskyblue;">Code - Y523201</a>
                                                    </div>
                                                    <!-- end code product -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="old-price">$500.00</span>
                                                        <span class="price">$600.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img src="{{ asset('usergueststyle/images/beautifes/122.jpeg') }}"  alt="...">
                                                        <!-- End image -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        @csrf
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Elastic Waist Dress</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <div class="product-tags" style="margin-top: 5px;">
                                                        <a style="color:deepskyblue;">Code - Y523201</a>
                                                    </div>
                                                    <!-- end code product -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$748.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img src="{{ asset('usergueststyle/images/beautifes/121.jpeg') }}"  alt="...">
                                                        <!-- End image -->
                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span class="lbl pr-label2">Hot</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        @csrf
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">3/4 Sleeve Kimono Dress</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <div class="product-tags" style="margin-top: 5px;">
                                                        <a style="color:deepskyblue;">Code - Y523201</a>
                                                    </div>
                                                    <!-- end code product -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$550.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img src="{{ asset('usergueststyle/images/beautifes/123.jpeg') }}"  alt="...">
                                                        <!-- End image -->
                                                        <!-- product label -->
                                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        @csrf
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                        
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Cape Dress</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <!-- code product -->
                                                    <div class="product-tags" style="margin-top: 5px;">
                                                        <a style="color:deepskyblue;">Code - Y523201</a>
                                                    </div>
                                                    <!-- end code product -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="old-price">$900.00</span>
                                                        <span class="price">$788.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star-o"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                            <div class="col-12 item">
                                                <!-- start product image -->
                                                <div class="product-image">
                                                    <!-- start product image -->
                                                    <a href="#">
                                                        <!-- image -->
                                                        <img src="{{ asset('usergueststyle/images/beautifes/12.jpeg') }}"  alt="...">
                                                        <!-- End image -->
                                                        <!-- product label -->
                                                        <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                                        <!-- End product label -->
                                                    </a>
                                                    <!-- end product image -->
            
                                                    <!-- Start product button -->
                                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                                        @csrf
                                                        <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                                        
                                                    </form>
                                                    <div class="button-set">
                                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                                            <i class="icon anm anm-search-plus-r"></i>
                                                        </a>
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#">
                                                                <i class="icon anm anm-heart-l"></i>
                                                            </a>
                                                        </div>
                                                        <div class="compare-btn">
                                                            <a class="compare add-to-compare" href="#" title="Add to Compare">
                                                                <i class="icon anm anm-random-r"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end product button -->
                                                </div>
                                                <!-- end product image -->
            
                                                <!--start product details -->
                                                <div class="product-details text-center">
                                                    <!-- product name -->
                                                    <div class="product-name">
                                                        <a href="#">Paper Dress</a>
                                                    </div>
                                                    <!-- End product name -->
                                                    <div class="product-tags" style="margin-top: 5px;">
                                                        <a style="color:deepskyblue;">Code - Y523201</a>
                                                    </div>
                                                    <!-- end code product -->
                                                    <!-- product price -->
                                                    <div class="product-price">
                                                        <span class="price">$550.00</span>
                                                    </div>
                                                    <!-- End product price -->
                                                    <div class="product-review">
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                        <i class="font-13 fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <!-- End product details -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
          </section>
          <!-- Start Produk -->

          <!--Start Store Feature-->
          <div class="section-header text-center" style="margin-top: 100px;">
            <h1 class="h1">What<img src="{{ asset('usergueststyle/images/beautifes/1.png') }}" style="width: 150px; height: auto;">Offer!</h1>
          </div>
          <div class="store-feature section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5>Free Shipping &amp; Return</h5>
                            	<span class="sub-text">Free shipping on all US orders</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <!--End Store Feature-->

@endsection

{{-- <h1>HALOO</h1> --}}
