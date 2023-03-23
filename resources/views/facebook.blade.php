@include('includes/header')
<div class="wrapper">
    <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
            <!-- main right col -->
            <div class="column col-md-12 col-sm-10 col-xs-11" id="main">
                <!-- top nav -->
            @include('includes/navigation')
            <!-- /top nav -->
                <div class="padding">
                    <div class="full col-sm-9">
                        <!-- content -->
                        <div class="row">
                            <!-- main col left -->
                            <div class="col-sm-5">
                                <div class="panel panel-default">
                                    <div class="panel-thumbnail"><img src="assets/img/bg_5.jpg" width="100%" class="img-responsive">
                                    </div>
                                    <div class="panel-body">
                                        <p class="lead">Hunger</p>
                                        <p>45 Followers, 13 Posts</p>
                                        <p>
                                            <img src="assets/img/uFp_tsTJboUY7kue5XAsGAs28.png" height="28px"
                                                 width="28px">
                                        </p>
                                    </div>
                                </div>
                                <div class="well">
                                    <form action="{{route('store.post')}}" class="form_submission" method="post">
                                        @csrf
                                        <h4>New Post</h4>
                                        <div class="form-group" style="padding:14px;">
                                            <textarea class="form-control" placeholder="Update your status"
                                                      name="content"></textarea>
                                            <input type="checkbox" class="new_post_checkbox" name="cloths"
                                                   value="cloths"><label
                                                for="scales">Cloths</label>
                                            <br>
                                            <input type="checkbox" class="new_post_checkbox" name="foods" value="foods"><label
                                                for="scales">Foods</label>
                                            <input type="hidden" name="longitude" value="">
                                            <input type="hidden" name="latitude" value="">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">Post</button>
                                        <ul class="list-inline">
                                            <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!-- main col right -->
                            @foreach($posts as $post)
                                <div class="col-sm-7">
                                    <div class="panel panel-default">
                                        <div class="panel-thumbnail">
                                            <iframe
                                                src="https://maps.google.com/maps?q={{$post->latitude}},{{$post->longitude}}&amp;z=15&amp;output=embed"
                                                width="100%" height="300px"></iframe>
                                        </div>
                                        <div class="panel-body">
                                            <p class="lead" style="text-transform: uppercase;">{{$post->content}}</p>
                                            <b><a style="color: green; text-transform: uppercase;">{{$post->cloths}}</a><br>
                                                <a style="color: green; text-transform: uppercase;">{{$post->food}}</a></b>
                                            {{--                                        <form action="{{route('store.commence')}}" method="post"--}}
                                            {{--                                              class="commence_submission">--}}
                                            {{--                                            <div class="input-group">--}}
                                            {{--                                                <div class="input-group-btn">--}}
                                            {{--                                                    <button type="submit" class="btn btn-default"><i--}}
                                            {{--                                                            class="glyphicon glyphicon-share"></i></button>--}}
                                            {{--                                                    <input type="submit" hidden>--}}
                                            {{--                                                </div>--}}
                                            {{--                                                <input class="form-control" placeholder="Add a comment.." type="text">--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </form>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            <i class="fal fa-soup fa-lg"></i>
                            <i class="fa-thin fa-shirt-long-sleeve fa-xl"></i>
                        </div><!--/row-->
                        <hr>
                        <div class="row" id="footer">
                            <div class="col-sm-6">

                            </div>
                            <div class="col-sm-6">
                                <p>
                                    <a href="#" class="pull-right">�Copyright 2023</a>
                                </p>
                            </div>
                        </div>
                    </div><!-- /col-9 -->
                </div><!-- /padding -->
            </div>
            <!-- /main -->
        </div>
    </div>
</div>

<!--post modal-->
<div id="postModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
                Post Status
            </div>
            <form action="{{route('store.post')}}" class="form_submission" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <textarea class="form-control input-lg" autofocus="" name="content"
                                  placeholder="What do you want to share?"></textarea>
                    </div>
                </div>
                <div>
                    <div class="modal-footer-more">
                        <input type="checkbox" value="cloths" name="cloths" class="new_post_checkbox">
                        <label>Cloths</label>
                        <br>
                        <input type="checkbox" value="foods" name="food" class="new_post_checkbox">
                        <label>Food</label>
                        <input type="hidden" name="longitude" value="">
                        <input type="hidden" name="latitude" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Post
                        </button>
                        <ul class="pull-left list-inline">
                            <li><a href=""><i class="glyphicon glyphicon-map-marker"></i></a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('includes/footer')
