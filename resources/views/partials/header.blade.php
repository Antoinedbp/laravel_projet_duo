<header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                
                <a href="index.html" class="site-title yellow-text">{{env('APP_ENTREPRISE')}}</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="{{route('home')}}" style="">Home</a></li>
                    <li>
                        <a href="{{route('blog')}}">blog </a>
                    </li>
                    <li>
                        <a href="{{route('portoflio')}}">portfolio</a>                                
                    </li>
                    <li>
                        <a href="{{route('contact')}}">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('hombo')}}">Back-office</a>
                    </li>  
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>
                  
    </nav><!-- /.site-navigation -->
    
</header><!-- /#masthead -->