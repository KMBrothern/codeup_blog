<nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{{ action ('HomeController@showWelcome') }}}">
                    <i class="fa fa-refresh fa-spin"></i><span class="light"> RL6</span> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="/#about">About Me</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="/#contact">Contact</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="{{{ action ('AboutController@getResume') }}}">Resumé</a>
                    </li>
                    <li class="active">
                        <a class="page-scroll" href="{{{ action ('AboutController@getPortfolio') }}}">Portfolio</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="{{{ action ('PostsController@index') }}}">Blog</a>
                    </li>
                    @if(Auth::check())
                        <li><a href="{{{ action('LoginController@logout') }}}">Logout</a></li>
                    @endif
                </ul>
                {{-- My login/logout area --}}
                {{-- End of login/logout area --}}
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>