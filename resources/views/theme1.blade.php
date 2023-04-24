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

    <title>The Hunger Eradication</title>

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
                    @include('includes/header')
                </div><!-- /.tr-topbar -->

                <div class="tr-home-slider home-slider-1 tr-section">
                    <div id="home-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#home-carousel" data-slide-to="0" class="active">
                                <span class="catagory">World</span>
                                <span class="indicators-title">U.S. marshal killed serving warrant at mobile</span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="1">
                                <span class="catagory">Technology</span>
                                <span class="indicators-title">Chelsea Handler slams Angelina yet again</span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="2">
                                <span class="catagory">Business</span>
                                <span class="indicators-title">Mirum est notare quam littera gothica </span>
                            </li>
                            <li data-target="#home-carousel" data-slide-to="3">
                                <span class="catagory">Politics</span>
                                <span class="indicators-title">Duis autem vel eum iriure dolor in hendrerit in</span>
                            </li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item carousel-item active"
                                 style=" background-image: url({{asset('assets/images/post/slider1.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a
                                            href="#">World</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">U.S. marshal killed serving warrant at mobile</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="background-image: url({{asset('assets/images/post/slider2.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a href="#">Technology</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Chelsea Handler slams Angelina yet again</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="background-image: url({{asset('assets/images/post/1.jpg')}})">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a
                                            href="#">Business</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Mirum est notare quam littera gothica</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->

                            <div class="item carousel-item"
                                 style="min-height:500px; background-image: url({{asset('assets/images/post/15.jpg')}});background-repeat:no-repeat;background-size:cover;">
                                <div class="post-content">
                                    <span class="catagory" data-animation="animated fadeInUp"><a href="details.html">Politics</a></span>
                                    <h2 class="entry-title" data-animation="animated fadeInUp">
                                        <a href="details.html">Duis autem vel eum iriure dolor in hendrerit</a>
                                    </h2>
                                    <div class="entry-meta" data-animation="animated fadeInUp">
                                        <ul>
                                            <li>By <a href="#">Adam Hianks</a></li>
                                            <li>643 Share /<a href="#"> 9 Hour ago</a></li>
                                            <li>
                                                <ul>
                                                    <li>Share</li>
                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                       aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- /.post-content -->
                            </div><!-- /.item -->
                        </div><!-- /.carousel-inner -->
                    </div><!-- /#home-carousel -->
                </div><!-- /.tr-home-slider -->

                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title">
                            <h1><span><a href="#">Create Post</a></span></h1>
                        </div>
                        <div class="latest-result text-center">
                            <div class="latest-result-content">
                                <div class="row">
                                    <div style="width: 100%">
                                        <div class="logo text-center">
                                        </div>
                                        <form action="{{route('store.post')}}" class="form_submission" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <textarea type="text" class="form-control" name="content"
                                                          required="required"></textarea>
                                                <input type="hidden" name="longitude" value="">
                                                <input type="hidden" name="latitude" value="">
                                                <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                                                <button type="submit" class="btn btn-primary">Post</button>
                                            </div>
                                        </form><!-- /.contact-form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tr-content">
                            <div class="tr-section bg-transparent">
                                <div class="section-title">
                                    <h1><span><a href="#">Post</a></span></h1>
                                </div>
                                @foreach($posts as $post)
                                    <div class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <iframe
                                                    src="https://maps.google.com/maps?q={{$post->latitude}},{{$post->longitude}}&amp;z=15&amp;output=embed"
                                                    width="100%" height="300px"></iframe>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>By <a href="#">{{Auth::user()->name}}</a></li>
                                                </ul>
                                            </div><!-- /.entry-meta -->
                                            <h2 class="entry-title">
                                                <a>{{$post->content}}</a>
                                                @if(Auth::user()->type == 'admin')
                                                    <i class="fa fa-trash text-danger delete-btn" aria-hidden="true"
                                                       data-model="posts"
                                                       data-id="{{$post->post_id}}"></i>

                                                @endif

                                            </h2>
                                        </div><!-- /.post-content -->

                                        <div class="container-fluid" style="margin-top: 10px">
                                            <div class="row"
                                                 style="border: 1px solid #555555; margin: 0 80px; border-radius: 5px">
                                                @php
                                                    $arrays = [$post->item1.'1' => 'item1', $post->item2.'2' => 'item2', $post->item3.'3' => 'item3'];
                                                    uksort($arrays, 'strcasecmp');
                                                @endphp
                                                @foreach($arrays as $key => $array)
                                                    @php
                                                        $keyzero = explode('0',$key);
                                                    @endphp
                                                    <div class="col-md-4">
                                                        <div style="text-align: center">
                                                            <div class="card-body">
                                                                <input type="checkbox" class="checkbox_selection"
                                                                       data-post-id="{{$post->post_id}}"
                                                                       name="{{$array}}"
                                                                       value="{{$array}}"
                                                                       {{!empty($keyzero[0]) ? 'checked' : ''}}
                                                                       {{!empty($keyzero[0]) ? 'disabled' : ''}}
                                                                       style="width:6rem;height: 6rem;{{!empty($keyzero[0]) ? 'accent-color: green;' : ''}}">
                                                                <p><b>{{$array}}</b></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div><!-- tr-post -->
                                @endforeach
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tr-post medium-post">
                                            <div id="carousel-one" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="item carousel-item active">
                                                        <div class="entry-header">
                                                            <div class="entry-thumbnail">
                                                                <a href="details.html"><img class="img-fluid"
                                                                                            src="{{asset('assets/images/post/2.jpg')}}"
                                                                                            alt="Image"></a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.item -->
                                                    <div class="item carousel-item">
                                                        <div class="entry-header">
                                                            <div class="entry-thumbnail">
                                                                <a href="details.html"><img class="img-fluid"
                                                                                            src="{{asset('assets/images/post/3.jpg')}}"
                                                                                            alt="Image"></a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.item -->
                                                    <div class="item carousel-item">
                                                        <div class="entry-header">
                                                            <div class="entry-thumbnail">
                                                                <a href="details.html"><img class="img-fluid"
                                                                                            src="{{asset('assets/images/post/5.jpg')}}"
                                                                                            alt="Image"></a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.item -->

                                                </div><!-- /.carousel-inner -->
                                                <div class="gallery-turner">
                                                    <a class="left-photo" href="#carousel-one" role="button"
                                                       data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                                    <a class="right-photo" href="#carousel-one" role="button"
                                                       data-slide="next"><i class="fa fa-angle-right"></i></a>
                                                </div>
                                            </div><!-- /#carousel-one -->
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author2.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#"> Matt Cloey</a></li>
                                                        <li>243 Share /<a href="#"> 4 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">Martha Stewart, Snoop Dogg and Anna Kendrick</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div><!-- tr-post -->
                                    </div>
                                    <div class="col-md-6 medium-post">
                                        <div class="tr-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{asset('assets/images/post/3.jpg')}}"
                                                                     alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author3.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#">Adam Hianks</a></li>
                                                        <li>300 Share /<a href="#"> 2 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">Chelsea Handler slams Angelina yet again</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div><!-- tr-post -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.business-section -->

                            <div class="tr-ad">
                                <a href="#"><img class="img-fluid" src="{{asset('assets/images/ai/1.jpg')}}"
                                                 alt="Image"></a>
                            </div><!-- /.add -->

                            <div class="tr-section bg-transparent sports-section">
                                <div class="section-title">
                                    <h1><span><a href="#">Sports</a></span></h1>
                                </div>
                                <div class="latest-result text-center">
                                    <div class="latest-result-content">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img class="img-fluid"
                                                     src="{{asset('assets/images/post/sports/logo1.png')}}" alt="Image">
                                                <h2 class="score">278/10</h2>
                                                <span class="over">Over: 19.5</span>
                                                <ul>
                                                    <li>Mehedi Hasan 103*</li>
                                                    <li>Shakib Al Hasan 73</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="match-category">
                                                    <div class="category-logo">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/post/sports/logo2.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <p>2nd One Day Match <span>BNS Ground</span></p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <img class="img-fluid"
                                                     src="{{asset('assets/images/post/sports/logo3.png')}}" alt="Image">
                                                <h2 class="score">32/0</h2>
                                                <span class="over">Over: 6.2</span>
                                                <ul>
                                                    <li>Moeen Ali 12*</li>
                                                    <li>Joe Root 20*</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.tr-post -->

                                <div class="football-result">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tr-post medium-post">
                                                <div class="featured-result">
                                                    <h2 class="league-name">Premier League</h2>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <img class="img-fluid"
                                                                 src="{{asset('assets/images/post/sports/logo4.png')}}"
                                                                 alt="">
                                                            <span class="match-result">3</span>
                                                        </div>
                                                        <div class="col-4">
                                                            <span class="verses">VS</span>
                                                            <span class="match-time">90:00</span>
                                                        </div>
                                                        <div class="col-4">
                                                            <img class="img-fluid"
                                                                 src="{{asset('assets/images/post/sports/logo5.png')}}"
                                                                 alt="">
                                                            <span class="match-result">0</span>
                                                        </div>
                                                    </div>
                                                </div><!-- /.featured-result -->
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul>
                                                            <li>163 Share /<a href="#"> 7 Hour ago</a></li>
                                                            <li>
                                                                <ul>
                                                                    <li><a href="#"><i class="fa fa-facebook"
                                                                                       aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-twitter"
                                                                                       aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-google-plus"
                                                                                       aria-hidden="true"></i></a></li>
                                                                    <li><a href="#"><i class="fa fa-rss"
                                                                                       aria-hidden="true"></i></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div><!-- /.entry-meta -->
                                                    <h2 class="entry-title">
                                                        <a href="#">Our closest relatives aren't fans of daylight saving
                                                            time</a>
                                                    </h2>
                                                </div><!-- /.post-content -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tr-section">
                                                <div class="league-result text-center">
                                                    <h2>Todays Match</h2>
                                                    <ul>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <div class="pull-left">
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team2.png')}}"
                                                                             alt="">
                                                                        <span class="team-name">Bra</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span class="match-result">3-2</span>
                                                                </li>
                                                                <li>
                                                                    <div class="pull-right">
                                                                        <span class="team-name">Arg</span>
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team1.png')}}"
                                                                             alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <div class="pull-left">
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team1.png')}}"
                                                                             alt="">
                                                                        <span class="team-name">Arg</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span class="match-result">7-4</span>
                                                                </li>
                                                                <li>
                                                                    <div class="pull-right">
                                                                        <span class="team-name">Bra</span>
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team2.png')}}"
                                                                             alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <div class="pull-left">
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team2.png')}}"
                                                                             alt="">
                                                                        <span class="team-name">Bra</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span class="match-result">1-2</span>
                                                                </li>
                                                                <li>
                                                                    <div class="pull-right">
                                                                        <span class="team-name">Arg</span>
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team1.png')}}"
                                                                             alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <div class="pull-left">
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team1.png')}}"
                                                                             alt="">
                                                                        <span class="team-name">Ara</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span class="match-result">3-1</span>
                                                                </li>
                                                                <li>
                                                                    <div class="pull-right">
                                                                        <span class="team-name">Brg</span>
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team2.png')}}"
                                                                             alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <ul>
                                                                <li>
                                                                    <div class="pull-left">
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team2.png')}}"
                                                                             alt="">
                                                                        <span class="team-name">Bra</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <span class="match-result">6-2</span>
                                                                </li>
                                                                <li>
                                                                    <div class="pull-right">
                                                                        <span class="team-name">Arg</span>
                                                                        <img class="img-fluid"
                                                                             src="{{asset('assets/images/post/sports/team1.png')}}"
                                                                             alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div><!-- /.league-result -->
                                            </div><!-- /.tr-section -->
                                        </div>
                                    </div><!-- row -->
                                </div><!-- /.football-result -->
                            </div><!-- /.sports-section -->

                            <div class="tr-section bg-transparent">
                                <div class="section-title">
                                    <h1><span><a href="#">Life Style</a></span></h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="tr-post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{asset('assets/images/post/4.jpg')}}"
                                                                     alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author2.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#">Adam Hianks</a></li>
                                                        <li>43 Share /<a href="#"> 2 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">Martha Stewart, Snoop Dogg and Anna</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tr-post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{asset('assets/images/post/5.jpg')}}"
                                                                     alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author3.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#">Adam Hianks</a></li>
                                                        <li>200 Share /<a href="#"> 5 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">Celeb Role Models You Can Feel Good About</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tr-post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{asset('assets/images/post/6.jpg')}}"
                                                                     alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author1.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#">Matt Cloey</a></li>
                                                        <li>45 Share /<a href="#"> 6 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">Suspicion of plotting New Year's Eve attacks in
                                                        Belgium</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="tr-post medium-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="#"><img class="img-fluid"
                                                                     src="{{asset('assets/images/post/7.jpg')}}"
                                                                     alt="Image"></a>
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="author">
                                                    <a href="#"><img class="img-fluid img-circle"
                                                                     src="{{asset('assets/images/others/author2.png')}}"
                                                                     alt="Image"></a>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>By <a href="#">Jhon dun</a></li>
                                                        <li>64 Share /<a href="#"> 9 Hour ago</a></li>
                                                    </ul>
                                                </div><!-- /.entry-meta -->
                                                <h2 class="entry-title">
                                                    <a href="#">18 Great Performances in Mediocre Movies</a>
                                                </h2>
                                            </div><!-- /.post-content -->
                                        </div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.life-style-section -->

                            <div class="tr-section bg-transparent">
                                <div class="section-title">
                                    <h1><span><a href="#">Photo Gallery</a></span></h1>
                                </div>
                                <div id="photo-gallery" class="carousel slide carousel-fade photo-gallery"
                                     data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">We Are Seeing The Effects Of The Minimum Wage Rise In San
                                                    Francisco</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">500-pound elephant seal causes traffic jam while
                                                    repeatedly</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">I rode a Metroboard electric skateboard 30 miles around
                                                    Manhattan</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The super creepy side of the Internet of Things and smart
                                                    homes</a></h2>
                                        </div>
                                        <div class="item carousel-item active">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">Mirum est notare quam littera gothica, quam nunc putamus
                                                    parum claram</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">Someone has calculated the total cost of saving Matt
                                                    Damon</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">Wet wedding: Yorkshire couple dons wellies to tie the knot
                                                    in flooded town</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">This dog is so stoked for his Christmas present he can
                                                    hardly stand it</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The world's richest people lost $19 billion in 2015, but
                                                    Jeff Bezos</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The world's richest people lost $19 billion in 2015, but
                                                    Jeff Bezos</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The world's richest people lost $19 billion in 2015, but
                                                    Jeff Bezos</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The world's richest people lost $19 billion in 2015, but
                                                    Jeff Bezos</a></h2>
                                        </div>
                                        <div class="item carousel-item">
                                            <a href="#"><img class="img-fluid"
                                                             src="{{asset('assets/images/gallery/1.jpg')}}"
                                                             alt="Image"></a>
                                            <h2><a href="#">The world's richest people lost $19 billion in 2015, but
                                                    Jeff Bezos</a></h2>
                                        </div>
                                    </div><!--/carousel-inner-->

                                    <ol class="gallery-indicators carousel-indicators">
                                        <li data-target="#photo-gallery" data-slide-to="0" class="">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb1.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="1" class="">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb2.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="2" class="">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb3.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="3" class="">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb4.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="4" class="active">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb5.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="5">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb6.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="6">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb7.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="7">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb8.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="8">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb6.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="9">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb1.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="10">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb2.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="11">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb3.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="8">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb4.png')}}"
                                                 alt="Image">
                                        </li>
                                        <li data-target="#photo-gallery" data-slide-to="8">
                                            <img class="img-fluid" src="{{asset('assets/images/gallery/thumb5.png')}}"
                                                 alt="Image">
                                        </li>
                                    </ol><!--/gallery-indicators-->

                                    <div class="gallery-turner">
                                        <a class="left-photo" href="#photo-gallery" role="button" data-slide="prev"><i
                                                class="fa fa-angle-left"></i></a>
                                        <a class="right-photo" href="#photo-gallery" role="button" data-slide="next"><i
                                                class="fa fa-angle-right"></i></a>
                                    </div>
                                </div><!-- /.photo-gallery	 -->
                            </div><!-- /.photo-gallery-section -->
                        </div><!-- /.tr-content -->
                    </div>

                    <div class="col-md-4 tr-sidebar tr-sticky">
                        <div class="theiaStickySidebar">

                            <div class="tr-section tr-widget tr-ad ad-before">
                                <a href="#"><img class="img-fluid" src="{{asset('assets/images/ai/2.jpg')}}"
                                                 alt="Image"></a>
                            </div><!-- /.tr-post -->

                            <div class="tr-section tr-widget">
                                <div class="widget-title">
                                    <span>This Is rising</span>
                                </div>
                                <ul class="medium-post-list">
                                    <li class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <a href="details.html"><img class="img-fluid"
                                                                            src="{{asset('assets/images/post/9.jpg')}}"
                                                                            alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="catagory">
                                                <a href="#">Entertainment</a>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="details.html">Howard Stern: 'I told Trump' I'm voting for
                                                    Clinton</a>
                                            </h2>
                                        </div><!-- /.post-content -->
                                    </li>
                                    <li class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <a href="details.html"><img class="img-fluid"
                                                                            src="{{asset('assets/images/post/10.jpg')}}"
                                                                            alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="catagory">
                                                <a href="#">Business</a>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="details.html">Our closest relatives aren't fans of daylight
                                                    saving time</a>
                                            </h2>
                                        </div><!-- /.post-content -->
                                    </li>
                                    <li class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <a href="details.html"><img class="img-fluid"
                                                                            src="{{asset('assets/images/post/11.jpg')}}"
                                                                            alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="catagory">
                                                <a href="#">Technology</a>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="details.html">And the most streamed Beatles song on Spotify
                                                    is...</a>
                                            </h2>
                                        </div><!-- /.post-content -->
                                    </li>
                                    <li class="tr-post">
                                        <div class="entry-header">
                                            <div class="entry-thumbnail">
                                                <a href="details.html"><img class="img-fluid"
                                                                            src="{{asset('assets/images/post/12.jpg')}}"
                                                                            alt="Image"></a>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <div class="catagory">
                                                <a href="#">Sports</a>
                                            </div>
                                            <h2 class="entry-title">
                                                <a href="details.html">Our closest relatives aren't fans of daylight
                                                    saving time</a>
                                            </h2>
                                        </div><!-- /.post-content -->
                                    </li>
                                </ul>
                            </div><!-- /.tr-section -->

                            <div class="tr-weather tr-widget">
                                <div class="weather-top">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="weather-image">
                                                <img class="img-fluid"
                                                     src="{{asset('assets/images/others/weather1.png')}}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <span class="weather-temp">21 <sup><span>°</span>C</sup></span>
                                            <span class="weather-type">Mostly Cloudy</span>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>London, UK</li>
                                        <li><span><img class="img-fluid"
                                                       src="{{asset('assets/images/others/weather2.png')}}"
                                                       alt="Image"></span>13%
                                        </li>
                                        <li><span><img class="img-fluid"
                                                       src="{{asset('assets/images/others/weather3.png')}}"
                                                       alt="Image"></span>6.44 MPH
                                        </li>
                                    </ul>
                                </div><!-- /.weather-top -->

                                <div class="weather-bottom">
                                    <ul>
                                        <li>
                                            <div class="weather-icon">
                                                <img class="img-fluid"
                                                     src="{{asset('assets/images/others/weather4.png')}}" alt="Image">
                                            </div>
                                            <div class="weather-info">
                                                <span>23°</span>
                                                <span class="date">Sun, 3 July</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="weather-icon">
                                                <img class="img-fluid"
                                                     src="{{asset('assets/images/others/weather5.png')}}" alt="Image">
                                            </div>
                                            <div class="weather-info">
                                                <span>26°</span>
                                                <span class="date">Sun, 3 July</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- /.weather-bottom -->
                            </div><!-- /.weather-widget -->

                            <div class="tr-section tr-widget tr-ad ad-before">
                                <a href="#"><img class="img-fluid" src="{{asset('assets/images/ai/2.jpg')}}"
                                                 alt="Image"></a>
                            </div><!-- /.tr-post -->

                            <div class="tr-widget meta-widget">
                                <div class="widget-title">
                                    <span>Weekly Toplist</span>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation"><a class="active" href="#author" data-toggle="tab"><i
                                                class="fa fa-user"></i>Authors</a></li>
                                    <li role="presentation"><a href="#comment" data-toggle="tab"><i
                                                class="fa fa-comment-o"></i>Comments</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active show fade in" id="author">
                                        <ul class="authors-post">
                                            <li>
                                                <div class="entry-meta">
                                                    <div class="author-image">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/others/author4.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <div class="author-info">
                                                        <h2><a href="#">Janet Jackson</a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="entry-meta">
                                                    <div class="author-image">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/others/author5.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <div class="author-info">
                                                        <h2><a href="#">Matt Cloey</a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="entry-meta">
                                                    <div class="author-image">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/others/author6.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <div class="author-info">
                                                        <h2><a href="#">Kolony Wispe</a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="entry-meta">
                                                    <div class="author-image">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/others/author7.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <div class="author-info">
                                                        <h2><a href="#">Matt Cloey</a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="entry-meta">
                                                    <div class="author-image">
                                                        <a href="#"><img class="img-fluid"
                                                                         src="{{asset('assets/images/others/author8.png')}}"
                                                                         alt="Image"></a>
                                                    </div>
                                                    <div class="author-info">
                                                        <h2><a href="#">Jhon dun</a></h2>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade in" id="comment">
                                        <ul class="comment-list">
                                            <li>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <span><a href="#">Jhon dun,</a></span>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="#">3 students arrested after body-slamming
                                                            principal</a>
                                                    </h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <span><a href="#">Matt Cloey</a></span>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="#">5 students arrested after body-slamming
                                                            principal</a>
                                                    </h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <span><a href="#">Kolony Wispe</a></span>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="#">2 students arrested after body-slamming
                                                            principal</a>
                                                    </h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <span><a href="#">Janet Jackson</a></span>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="#">4 students arrested after body-slamming
                                                            principal</a>
                                                    </h2>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <span><a href="#">Matt Cloey</a></span>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="#">3 students arrested after body-slamming
                                                            principal</a>
                                                    </h2>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- meta-tab -->
                        </div><!-- /.theiaStickySidebar -->
                    </div>
                </div><!-- row -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fulid -->
</div><!-- /.main-wrapper -->
@include('includes/footer')
