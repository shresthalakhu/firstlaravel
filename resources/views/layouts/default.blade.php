<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

        @include('includes.header')

        <div class="innerbanner" style="background-image: url({{asset('assets/images/slider2.jpg')}});">
            <div class="overlay-gradient"></div>
            <div class="container">
                <div class="row innerbanner-text">
                    <div class="innerbanner-text-inner">
                    <div class="desc">
                        <p><span>Hotel</span></p>
                        <h2>Register Now</h2>
                    </div>
                        </div>
                </div>
            </div>
        </div>


        <div id="content">


                        @yield('content')

        </div>
        @include('includes.happycustomer')
        @include('includes.blog')


    <footer class="row">
        @extends('includes.footer')
    </footer>

</div>
        </div>
    </div>
</body>
</html>