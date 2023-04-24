<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/newshub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 22:04:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Newshub | News & Blog HTML Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jplayer.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/my_style.css')}}">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Signika+Negative" rel="stylesheet">

    <!-- icons -->
    <link rel="icon" href="{{asset('assets/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144"
          href="{{asset('assets/images/ico/apple-touch-icon-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('assets/images/ico/apple-touch-icon-114-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('assets/images/ico/apple-touch-icon-72-precomposed.html')}}">
    <link rel="apple-touch-icon" sizes="57x57"
          href="{{asset('assets/images/ico/apple-touch-icon-57-precomposed.html')}}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
</head>
<body>
<div class="main-wrapper tr-page-top homepage">
    <div class="container-fluid">
        <div class="row">
            @include('includes/site_bar')
            <div class="col-lg-9">
                <div class="tr-topbar clearfix">
                    <div class="topbar-left">
                        <div class="breaking-news">
                            <span># Newsfeed</span>
                            <div id="ticker">
                                <ul>
                                    <li><a href="#">Remarkable Women - character design project</a></li>
                                    <li><a href="#">Remarkable Women - character design project</a></li>
                                    <li><a href="#">Remarkable Women - character design project</a></li>
                                    <li><a href="#">Remarkable Women - character design project</a></li>
                                </ul>
                            </div>
                        </div><!-- breaking-news -->
                    </div><!-- /.topbar-left -->
                    <div class="topbar-right">
                        <div class="user">
                            <div class="user-image">
                                <img class="img-fluid img-circle" src="{{asset('assets/images/others/user.png')}}"
                                     alt="Image">
                            </div>
                            <div class="dropdown user-dropdown">
                                Hello,
                                <a href="#" aria-expanded="true">{{\Illuminate\Support\Facades\Auth::user()->name}}<i
                                        class="fa fa-caret-down"
                                        aria-hidden="true"></i></a>
                                <ul class="sub-menu text-left">
                                    <li><a href="#">My Profile</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="searchNlogin">
                            <ul>
                                <li class="search-icon"><i class="fa fa-search"></i></li>
                                <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                                <li class="dropdown language-dropdown">
                                    <a href="#" aria-expanded="true">EN<i class="fa fa-angle-down"
                                                                          aria-hidden="true"></i></a>
                                    <ul class="sub-menu text-center">
                                        <li><a href="#">EN</a></li>
                                        <li><a href="#">FR</a></li>
                                        <li><a href="#">GR</a></li>
                                        <li><a href="#">ES</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off"
                                           placeholder="Type & Press Enter">
                                </form>
                            </div> <!--/.search-->
                        </div>
                    </div><!-- /.topbar-right -->
                </div><!-- /.tr-topbar -->

                <div class="tr-home-slider home-slider-1 tr-section">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Post Content</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$post->content}}</td>
                                <td>
                                    <button class="btn btn-danger delete-btn" data-model="posts"
                                            data-id="{{$post->id}}">Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div><!-- /.tr-home-slider -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fulid -->
</div><!-- /.main-wrapper -->
@include('includes/footer')
