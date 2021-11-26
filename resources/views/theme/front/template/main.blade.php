<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield($title, 'Tu Asesora Contable')</title>
    <!-- favicons Icons -->
    <link rel="icon" href="{{asset('/favicons/favicon.ico')}}" type="image/x-icon">
    
    <meta name="description" content="Tu Asesora Contable" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/izeetak-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/twentytwenty/twentytwenty.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/izeetak.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/izeetak-responsive.css')}}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{asset('assets/images/loader.png')}}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header main-header-two clearfix">
            <nav class="main-menu main-menu-two clearfix">
                <div class="main-menu-wrapper clearfix">
                    <div class="main-menu-wrapper-inner clearfix">
                        <div class="main-menu-wrapper__left clearfix">
                            @include('theme.front.template.menu')
                        </div>
                        @include('theme.front.template.menu-wrapper')
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu main-menu-two">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Main Slider Two Start-->
        @yield('slider')
        <!--Main Slider Two End-->

        <!--Business Growth Start-->
        @yield('growth')
        <!--Business Growth End-->

        <!--Welcome One Start-->
        @yield('welcome')
        <!--Welcome One End-->

        <!--Video One Start-->
        @yield('video')
        <!--Video One End-->

        <!--Help Start-->
        @yield('help')
        <!--Help End-->

        <!--Project Two Start-->
        @yield('carrusel')
        <!--Project Two End-->

        <!--Brand Two Start-->
        @yield('brand-carrusel')
        <!--Brand Two End-->

        <!--Industries We Serve Start-->
        @yield('factory-category')
        <!--Industries We Serve End-->

        <!--Team One Start-->
        @yield('team')
        <!--Team One End-->

        <!--Why Choose Start-->
        @yield('why-choose')
        <!--Why Choose End-->

        <!--Google Map Start-->
        @yield('map')
        <!--Google Map End-->

        <!--CTA Two Start-->
        @yield('contact')
        <!--CTA Two End-->

        <!--Site Footer One Start-->
        @include('theme.front.template.footer')
        <!--Site Footer One End-->
    </div><!-- /.page-wrapper -->

    @include('theme.front.template.sidebar-footer')
    
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="{{asset('assets/vendors/jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jarallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-appear/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/vendors/nouislider/nouislider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/odometer/odometer.min.js')}}"></script>
    <script src="{{asset('assets/vendors/swiper/swiper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/tiny-slider/tiny-slider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wnumb/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/vendors/wow/wow.js')}}"></script>
    <script src="{{asset('assets/vendors/isotope/isotope.js')}}"></script>
    <script src="{{asset('assets/vendors/countdown/countdown.min.js')}}"></script>
    <script src="{{asset('assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/vendors/twentytwenty/twentytwenty.js')}}"></script>
    <script src="{{asset('assets/vendors/twentytwenty/jquery.event.move.js')}}"></script>
    <script src="{{asset('assets/vendors/bxslider/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/vendors/vegas/vegas.min.js')}}"></script>
    <script src="{{asset('assets/vendors/jquery-ui/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/vendors/timepicker/timePicker.js')}}"></script>
    <script src="{{asset('assets/vendors/particles/particles.min.js')}}"></script>
    <script src="{{asset('assets/vendors/particles/particles-config.js')}}"></script>


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>


    <!-- template js -->
    <script src="{{asset('assets/js/izeetak.js')}}"></script>
</body>

</html>