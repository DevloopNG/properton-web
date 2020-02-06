<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('asset/img/fav.png')}}">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Properton</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('asset/css/linearicons.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/jquery-ui.css')}}">				
        <link rel="stylesheet" href="{{asset('asset/css/nice-select.css')}}">					
        <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.css')}}">		
        <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
    </head>

    <body>	
      {{-- @include('sweetalert::alert') --}}
      <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href=""><img src="" alt="" title="" />PROPERTON</a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="{{url('sign-up')}}">Create Account</a></li>
                  <li><a href="{{url('invest')}}">Invest</a></li>
                  <li><a href="{{url('sign-in')}}">Login</a> <i class="fa fa-user-circle-o"></i></li>
                  {{-- <li class="menu-has-children"><a href="#">Blog</a>
                    <ul>
                      <li><a href="blog">Blog Home</a></li>
                      <li><a href="">Blog Single</a></li>
                    </ul>
                  </li>	 --}}
                  {{-- <li class="menu-has-children"><a href="">Pages</a>
                    <ul>
                      <li><a href="elements.html">Elements</a></li>
                      <li class="menu-has-children"><a href="">Level 2 </a>
                        <ul>
                          <li><a href="#">Item One</a></li>
                          <li><a href="#">Item Two</a></li>
                        </ul>
                      </li>					                		
                    </ul>
                  </li>					          					          		           --}}
                 
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->