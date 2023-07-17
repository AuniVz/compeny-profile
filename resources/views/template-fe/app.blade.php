<!DOCTYPE html>
<html lang="en">

{{-- head --}}
@include('template-fe/head')

<!-- page wrapper -->

<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    @include('template-fe/preloader')


    <!-- page-direction -->
    @include('template-fe/page-direction')
    <!-- page-direction end -->


    <!-- search-popup -->
    @include('template-fe/search-popup')
    <!-- search-popup end -->


    <!-- main header -->
    @include('template-fe/header')
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    @include('template-fe/Mobile-menu')
    <!-- End Mobile Menu -->


    <div>
        @yield('content')
    </div>



    <!-- main-footer -->
    @include('template-fe/footer')
    <!-- main-footer end -->



    <!--Scroll to top-->
    @include('template-fe/Scroll')


    <!-- sidebar cart item -->
    @include('template-fe/sidebar')
    <!-- END sidebar widget item -->


    <!-- jequery plugins -->
    @include('template-fe/jequery')

    <!-- main-js -->
    @include('template-fe/javascript')

</body><!-- End of .page_wrapper -->

</html>
