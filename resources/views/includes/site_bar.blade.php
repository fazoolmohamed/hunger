<div class="col-lg-3 tr-sidebar tr-sticky">
    <div class="theiaStickySidebar">
        <div class="tr-menu sidebar-menu">
            <nav class="navbar navbar-default navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand" href="index-2.html"><img class="img-fluid"
                                                                 src="{{asset('assets/images/logo.png')}}"
                                                                 alt="Logo"></a>

                <span class="discover">Options</span>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a href="{{route('home')}}"><i class="fa fa-info-circle"
                                                                                   aria-hidden="true"></i>Home</a></li>
                        <li class="dropdown"><a data-toggle="dropdown" href="{{route('create.user')}}"><i
                                    class="fa fa-plus-circle" aria-hidden="true"></i>Create User</a>
                        </li>
                        <li><a href="{{route('edit.user')}}"><i class="fa-google-wallet"
                                                                aria-hidden="true"></i>Edit
                                User</a>
                        </li>
                        <li><a href="{{route('details.post')}}"><i class="fa fa-compass"
                                                                   aria-hidden="true"></i> Post</a>
                        </li>
                        <li><a href="#"><i class="fa fa-futbol-o"
                                                     aria-hidden="true"></i>Add Optional Items</a></li>
                    </ul>
                </div>
            </nav><!-- /navbar -->
        </div><!-- /left-memu -->
    </div><!-- /.theiaStickySidebar -->
</div>
