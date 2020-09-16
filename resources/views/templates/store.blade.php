<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:54:22 GMT -->
@include('templates.partials.store._head')

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    @include('templates.partials.store._header')
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        @include('templates.partials.store._sidebar')
        <!-- Page Sidebar Ends-->


        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- Container-fluid Ends-->

        </div>

        <!-- footer start-->
        @include('templates.partials.store._footer')
        <!-- footer end-->
    </div>

</div>

@include('templates.partials.store._script')

</body>

<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:54:34 GMT -->
</html>
