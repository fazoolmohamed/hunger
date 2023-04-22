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
                            <th scope="col">User</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{$post->content}}</td>
                                <td>{{$post->name}}</td>
                                <td>
                                    <button class="btn btn-danger">Delete</button>
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

<footer id="footer">
    <div class="footer-menu">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Advertisement</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget widget-menu-2">
                        <h2>Category</h2>
                        <ul>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">World</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Environment</a></li>
                            <li><a href="#">Health</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Lifestyle</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h2>Editions</h2>
                        <ul>
                            <li><a href="#">United States</a></li>
                            <li><a href="#">China</a></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Maxico</a></li>
                            <li><a href="#">Middle East</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget widget-menu-3">
                        <h2>Tag</h2>
                        <ul>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Featured</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Entertainment</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Tech</a></li>
                            <li><a href="#">Movies</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">Packages</a></li>
                            <li><a href="#">Amazon</a></li>
                            <li><a href="#">Cars</a></li>
                            <li><a href="#">Phones</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="widget">
                        <h2>Products</h2>
                        <ul>
                            <li><a href="#">Ebooks</a></li>
                            <li><a href="#">Newsfeeds</a></li>
                            <li><a href="#">Reprints & Permissions</a></li>
                            <li><a href="#">Magazine</a></li>
                            <li><a href="#">College Guide</a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- /.row -->
        </div>
    </div>
    <div class="footer-bottom text-center">
        <div class="container">
            <div class="footer-bottom-content">
                <div class="footer-logo">
                    <a href="index-2.html"><img class="img-fluid" src="{{asset('assets/images/footer-logo.png')}}"
                                                alt="Logo"></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
                <address>
                    <p>&copy; 2017 <a href="index-2.html">Newshub</a>. Email: <a href="#"><span class="__cf_email__"
                                                                                                data-cfemail="6f060109002f010a181c071a0d410c0002">[email&#160;protected]</span></a>
                        | News: <a href="#">news.newshub.com</a> | Advertising: <a href="#">ad.newshub.com</a> <br>Phone:
                        + 1234 8812345, 880112345 + 1359, 6356 + 112-11-9874</p>
                </address>
            </div><!-- /.footer-bottom-content -->
        </div><!-- /.container -->
    </div><!-- /.footer-bottom -->
</footer><!-- /#footer -->


<!-- JS -->
{{--<script src="{{asset('assets/js/jquery.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{asset('assets/js/popper.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/marquee.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/moment.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/theia-sticky-sidebar.min.js')}}"
        type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/jquery.jplayer.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/jplayer.playlist.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/slick.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/carouFredSel.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script src="{{asset('assets/js/main.js')}}" type="cc35a73622a83eb79f34e5e8-text/javascript"></script>
<script>(function () {
        var js = "window['__CF$cv$params']={r:'7ba8706b3acc4cb0',m:'gMfK8.PxEJEjNdjdRoNYDbWBYSKu3YPApnuMrc5M3bc-1681941823-0-ARIwQbcNW5lBPU7Of3erXIU/RqbrtDC4yFUbhzkXljoC',u:'/cdn-cgi/challenge-platform/h/g'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='{{asset("cdn-cgi/challenge-platform/h/g/scripts/jsd/70d5f7ce/invisible.js")}}',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.nonce = '';
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }

        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function () {
            };
            document.onreadystatechange = function (e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('[data-toggle=offcanvas]').click(function () {
            $(this).toggleClass('visible-xs text-center');
            $(this).find('i').toggleClass('glyphicon-chevron-right glyphicon-chevron-left');
            $('.row-offcanvas').toggleClass('active');
            $('#lg-menu').toggleClass('hidden-xs').toggleClass('visible-xs');
            $('#xs-menu').toggleClass('visible-xs').toggleClass('hidden-xs');
            $('#btnShow').toggle();
        });
    });

    $(document).on('submit', '.form_submission', function (e) {
        e.preventDefault();
        let this_ = $(this);
        let action = this_.attr('action');
        $.post(action, this_.serialize(), function (res) {
            reload();
        });
    });

    $(document).on('keyup', 'textarea[name="content"]', function () {
        getLocation();
    });

    let longitude = $('input[name="longitude"]');
    let latitude = $('input[name="latitude" ]');
    let _token = $('meta[name="csrf-token"]').attr('content');

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);

        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        latitude.val(position.coords.latitude);
        longitude.val(position.coords.longitude);
    }

    $(document).on('click', '.checkbox_selection', function () {

        let _this = $(this);
        _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
        _this.attr('disabled', false);
        let action = "{{route('suggestion.box')}}";
        let post_id = _this.attr('data-post-id');
        let user_id = 1;
        {{--        let user_id = "{{Auth::user()->id}}";--}}
        if (_this.is(':checked')) {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', 'disabled');
            _this.attr('disabled', false);
            $.post(action, {_token: _token, item: _this.val(), post_id: post_id, user_id: user_id});
        } else {
            _this.closest('.container-fluid').find('.card-body').find('input[type="checkbox"]').attr('disabled', false);
        }
    });
</script>

</body>

<!-- Mirrored from demo.themeregion.com/newshub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Apr 2023 22:04:14 GMT -->
</html>
