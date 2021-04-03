<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RANPHONE | Website Informasi Smartphone di Rentang Harga 1-3 Juta</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="/" class="logo"><img src="{{asset('front/img/your-logo.png')}}" alt="" style="width: 200px;"></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    @stack('nav')
                    <!-- /nav -->

                    <!-- search & aside toggle -->
                    <div class="nav-btns">
                        <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    </div>
                    <!-- /search & aside toggle -->
                </div>
            </div>
            <!-- /Main Nav -->

            <!-- Aside Nav -->
            <div id="nav-aside">
                <!-- nav -->
                <div class="section-row">
                    <ul class="nav-aside-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contacts</a></li>
                        <li><a href="{{ route('home') }}">Login Admin</a></li>
                    </ul>
                </div>
                <!-- /nav -->


                <!-- social links -->
                <div class="section-row">
                    <h3>Follow My Social Media</h3>
                    <ul class="nav-aside-social">
                        <li><a target ="_blank" href="https://www.facebook.com/firman.nur.372"><i class="fa fa-facebook"></i></a></li>
                        <li><a target ="_blank" href="https://twitter.com/Randy11365378"><i class="fa fa-twitter"></i></a></li>
                        <li><a target ="_blank" href="https://www.instagram.com/randy_nur13/"><i class="fa fa-instagram"></i></a></li>
                        <li><a target ="_blank" href="https://www.youtube.com/channel/UCGIOwUKbq3AcPUHFeQRTUlg"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
                <!-- /social links -->

                <!-- aside nav close -->
                <button class="nav-aside-close"><i class="fa fa-times"></i></button>
                <!-- /aside nav close -->
            </div>
            <!-- Aside Nav -->
        </div>
        <!-- /Nav -->
    </header>
    <!-- /Header -->

    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                        <a href="/" class="logo"><img src="{{asset('front/img/your-logo.png')}}" alt="" style="width: 200px;"></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> All rights reserved | This website is made with <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by RANPHONE
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Menu</h3>
                                <ul class="footer-links">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="About">About</a></li>
                                    <li><a href="Contact">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                @stack('categoris')
                            </div>
                        </div>
                    </div>
                </div>
        <div class="col-md-3">
        <div class="footer-widget">
            <h3 class="footer-title">Follow My Social Media</h3>
            <ul class="footer-social">
            <li><a target ="_blank" href="https://www.facebook.com/firman.nur.372"><i class="fa fa-facebook"></i></a></li>
            <li><a target ="_blank" href="https://twitter.com/Randy11365378"><i class="fa fa-twitter"></i></a></li>
            <li><a target ="_blank" href="https://www.instagram.com/randy_nur13/"><i class="fa fa-instagram"></i></a></li>
            <li><a target ="_blank" href="https://www.youtube.com/channel/UCGIOwUKbq3AcPUHFeQRTUlg"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
        </div>
    </div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>