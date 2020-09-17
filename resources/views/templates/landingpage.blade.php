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

<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-left">
        <img src="{{ asset ('assets-landingpage/images/parallax/1.jpg') }}" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2018</h2>
                        <h3>fashion trends</h3>
                        <h4>special offer</h4>
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