<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/image/logo.png" style="width: 60px;" >
    <title>@yield('title')</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awesome-->
    @includeIf('layouts.partials.css')
    <!-- Scripts -->
    <script src="jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function(){
    $("#home").hover(function(){
       $("#home").animate({ 
             opacity: '0.7',
           fontSize:'20px',
           color: '#0a0a0a'
          }); }); 
          $("#home").mouseleave(function(){
       $("#home").animate({ 
        opacity: '1',
           fontSize:'18px',
           color: '#fcfafa'
        });
           });  
           $("#h1").hover(function(){
       $("#h1").animate({ 
             opacity: '0.7',
           fontSize:'20px',
           color: '#0a0a0a'
           }); }); 
           $("#h1").mouseleave(function(){
       $("#h1").animate({ 
        opacity: '1',
           fontSize:'18px',
           color: '#fcfafa'});
           });  

           $("#h2").hover(function(){
       $("#h2").animate({ 
             opacity: '1',
           fontSize:'22px',
           color: '#0a0a0a'
          }); });
        });  
    </script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background:#00BFFF;" dir="rtl">
            <div class="container">
             
            <a class="navbar-brand" href="{{ url('/HomePage') }}" id="home" style="padding-top:1px;margin-right:3px;position:absolute;right:95px">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" viewBox="0 0 24 24" fill="white" stroke="#00BFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>    
                </a>


                <a class="navbar-brand" href="{{ url('/HomePage') }}" id="home" style="font-size: 18px;text-transform:uppercase;">
                    الصفحة الرئيسية
                </a>


                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" id="h2">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" >
                                    <a class="nav-link" href="{{ route('login') }}" style="color:white;position:absolute;left:250px;margin-top :-18px;font-size: 18px" >{{ __('تسجيل الدخول') }}</a>
                                </li>
                            @endif
                            @if(Route::has('register'))
                            <div class="dropdown">
  <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: none;background:#00BFFF;color:white;font-size: 18px;position:absolute;left:-480px;margin-top :-12px;">
    إنشاء حساب
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="background:#00BFFF;position:absolute;left:-480px;margin-top :14px;">
    <li class="nav-item">
      <a class="dropdown-item nav-link" href="{{ route('register') }}" style="color:white;">{{ __('طالب أو طالبة') }}</a>
    </li>    
    <li class="nav-item">
      <a class="nav-link dropdown-item" href="{{ route('register') }}" style="color:white">{{ __('مشرف أو مشرفة') }}</a>
    </li>
  </ul>
</div> 

<style>
  .dropdown-toggle:hover+.dropdown-menu {
    display:block;
  }
  .dropdown-menu {
    display: none;
  }
  .dropdown-item:hover {
    background-color: #1E90FF;
  }
</style>
@endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
            @yield('content')
        </main>
        <div>
            @include('layouts.footer')
        </div>

        <div>
            @include('layouts.scroll')
        </div>
    </div>
    @includeIf('layouts.partials.js')   
</body>
</html>
