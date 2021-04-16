<!DOCTYPE html>
<html class="no-js" lang="zxx">

@include('components.head')   

<body>


    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    @include('components.header')   
    
    <div class="site-wrapper-reveal">
        
        @yield('breadcumb')        

        @yield('content')        

        @include('components.footer')

        

        <!--====================  scroll top ====================-->
        <a href="#" class="scroll-top" id="scroll-top">
            <i class="arrow-top fal fa-long-arrow-up"></i>
            <i class="arrow-bottom fal fa-long-arrow-up"></i>
        </a>
        <!--====================  End of scroll top  ====================-->

        @include('components.mobiles.menu-overlay') 
        

        <!-- JS
    ============================================ -->
        <!-- Modernizer JS -->
        <script src="{{asset ('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>

        <!-- jQuery JS -->
        <script src="{{asset ('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>

        <!-- Bootstrap JS -->
        <script src="{{asset ('assets/js/vendor/bootstrap.min.js')}}"></script>

        <!-- Swiper Slider JS -->
        <script src="{{asset ('assets/js/plugins/swiper.min.js')}}"></script>

        <!-- Light gallery JS -->
        <script src="{{asset ('assets/js/plugins/lightgallery.min.js')}}"></script>

        <!-- Waypoints JS -->
        <script src="{{asset ('assets/js/plugins/waypoints.min.js')}}"></script>

        <!-- Counter down JS -->
        <script src="{{asset ('assets/js/plugins/countdown.min.js')}}"></script>

        <!-- Isotope JS -->
        <script src="{{asset ('assets/js/plugins/isotope.min.js')}}"></script>

        <!-- Masonry JS -->
        <script src="{{asset ('assets/js/plugins/masonry.min.js')}}"></script>

        <!-- ImagesLoaded JS -->
        <script src="{{asset ('assets/js/plugins/images-loaded.min.js')}}"></script>

        <!-- Wavify JS -->
        <script src="{{asset ('assets/js/plugins/wavify.js')}}"></script>

        <!-- jQuery Wavify JS -->
        <script src="{{asset ('assets/js/plugins/jquery.wavify.js')}}"></script>

        <!-- circle progress JS -->
        <script src="{{asset ('assets/js/plugins/circle-progress.min.js')}}"></script>

        <!-- counterup JS -->
        <script src="{{asset ('assets/js/plugins/counterup.min.js')}}"></script>

        <!-- wow JS -->
        <script src="{{asset ('assets/js/plugins/wow.min.js')}}"></script>

        <!-- animation text JS -->
        <script src="{{asset ('assets/js/plugins/animation-text.min.js')}}"></script>

        <!-- Vivus JS -->
        <script src="{{asset ('assets/js/plugins/vivus.min.js')}}"></script>

        <!-- Some plugins JS -->
        <script src="{{asset ('assets/js/plugins/some-plugins.js')}}"></script>


        <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->

        <!--
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

        <!-- Main JS -->
        <script src="{{asset ('assets/js/main.js')}}"></script>


</body>

</html>