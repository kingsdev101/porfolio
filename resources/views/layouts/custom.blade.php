<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="black">
	<meta name="msapplication-navbutton-color" content="black">
    <script src="{{ asset('js/jquery-3.5.1.min.js') }} "></script>

    <!-- Fonts -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/desktop-style.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/mobile-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/resume-mobile.css')}}">
    <link rel="stylesheet" href="{{asset('css/resume-desktop.css')}}">
    <link rel="stylesheet" href="{{asset('css/projects.css')}}">


    <!-- bartheme -->
    <meta name="theme-color" content="#ffff">
    <meta name="msapplication-navbutton-color" content="#ffff">

    <!-- chart -->
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <title>@yield('title', 'KingsSite')</title>



</head>

<body>

<div class="loader-wrapper">
      <div class="loader">
  <div class="loader__bar"></div>
  <div class="loader__bar"></div>
  <div class="loader__bar"></div>
  <div class="loader__bar"></div>
  <div class="loader__bar"></div>
  <div class="loader__ball"></div>
</div>
      </div>
    <!-- menu -->

    <div class="menu-container" id="menu-container">
        <div class="menu-wrapper" id="menu-wrapper">

            <div class="seedico" style="color:#ffff;font-family:'helvetica';text-tr " >
                    <i class="fa fa-dragon" style="color: #f75901; font-size:28px"></i> <span>lightsUpc</span>    
            </div>
            <div class="line-wrapper" id="line-wrapper">
                <div class="line ln1"></div>
                <div class="line ln2"></div>
                <div class="line ln3"></div>
            </div>
        </div>
    </div>

    <div class="bgd"></div>
    <!-- slidebar -->

    <div class="menu-content-container" id="main-content-container" style="position:fixed">
        <div class="close-wrapper">
            <div id="closebtn">&times;</div>
        </div>
        <div class="menu-content">

            <ul>
                <li><a href="{{route('resume')}}">Resume</a></li>
                <li><a href="{{route('projects')}}">Projects</a></li>
                <li><a href="{{route('home')}}">Home-page</a></li>



            </ul>
        </div>
    </div>


    <div class="container-fluide" data-scroll-container>
      
    
        <div class="smooth-scroll-wrapper" id="butter">


            @yield('content')



            <script> 
            $(window).on("load",function(){
                $(".loader-wrapper").fadeOut("slow");
                $('body').css("overflowY",'scroll');
            });
        </script>

            <script src="{{ asset('js/gsap.min.js') }}"></script>
            <script src="{{ asset('js/ScrollTrigger.min.js') }} "></script>
            <script src="{{ asset('js/mediagsap.js') }}"></script>
 
            <script src="{{ asset('js/mobile-animation.js') }}"></script>
            <script src="{{ asset('js/desktop-animation.js') }}"></script>
            <script src="{{ asset('js/ChartCode.js') }}"></script>


        </div>
    </div>
</body>

</html>