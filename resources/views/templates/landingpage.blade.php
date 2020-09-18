<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:05:27 GMT -->
@include('templates.partials.landingpage._head')

<body>

<!-- header start -->
@include('templates.partials.landingpage._header')
<!-- header end -->


<!-- Home slider -->
@include('templates.partials.landingpage._slide')
<!-- Home slider end -->


<!-- Paragraph-->
@yield('content')
<!-- Paragraph end -->

<!-- Paragraph-->
<div class="title1 section-t-space">
    <h4>special offer</h4>
    <h2 class="title-inner1">top collection</h2>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="product-para">
                <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
            </div>
        </div>
    </div>
</div>
<!-- Paragraph end -->


<!-- Product slider -->
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="product-4 product-m no-arrow">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/27.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/28.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                    <i class="ti-shopping-cart"></i>
                                </button>
                                <a href="javascript:void(0)" title="Add to Wishlist">
                                    <i class="ti-heart" aria-hidden="true"></i>
                                </a>
                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                                    <i class="ti-search" aria-hidden="true"></i>
                                </a>
                                <a href="compare.html" title="Compare">
                                    <i class="ti-reload" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                    sale</span></div>
                            <div class="front">
                                <a href="product-page(no-sidebar).html">
                                    <img src="{{ asset ('assets-landingpage/images/pro3/1.jpg') }}" class="img-fluid blur-up lazyload bg-img"
                                        alt=""></a>
                            </div>
                            <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/2.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                    href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00 <del>$600.00</del></h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                    sale</span></div>
                            <div class="front">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/33.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/34.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                    href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/35.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/36.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                    href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on
                                    sale</span></div>
                            <div class="front">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/33.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="product-page(no-sidebar).html"><img src="{{ asset ('assets-landingpage/images/pro3/34.jpg') }}"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i
                                        class="ti-shopping-cart"></i></button> <a href="javascript:void(0)"
                                    title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a> <a
                                    href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i
                                        class="ti-search" aria-hidden="true"></i></a> <a href="compare.html"
                                    title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                            </div>
                            <a href="product-page(no-sidebar).html">
                                <h6>Slim Fit Cotton Shirt</h6>
                            </a>
                            <h4>$500.00</h4>
                            <ul class="color-variant">
                                <li class="bg-light0"></li>
                                <li class="bg-light1"></li>
                                <li class="bg-light2"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product slider end -->

<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-left">
        <img src="{{ asset ('assets-landingpage/images/home-banner/slide2.jpg') }}" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2020</h2>
                        <h3>WartegKu</h3>
                        <h4>Aplikasi WartegKu</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->


<!-- footer -->
@include('.templates.partials.landingpage._footer')
<!-- footer end -->


@include('templates.partials.landingpage._script')

</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Sep 2020 22:08:16 GMT -->
</html>
