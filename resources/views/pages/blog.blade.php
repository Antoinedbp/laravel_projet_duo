@extends('template.welcome')
@section('content')

    

    <main id="main" class="site-main">

        <section class="site-section-small section-blog">

            <div class="container">
                <div class="text-center">
                    
                    <h1 class="section-title-big">Blog</h1>
                    <p class="section-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi quis tempore explicabo molestias consequuntur rerum saepe, ex repellendus alias, nemo officiis dolores magnam temporibus excepturi suscipit itaque at qui impedit?</p>
                    
                </div>
                
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog</li>
                </ol><!-- /.breadcrumb -->
                @foreach ($dataBlog as $item )

                <div class="row">

                    <div class="col-md-9">

                        <div class="blog-post">

                        <a href="blog-post.html"><img class="img-carousel post-img" src="{{asset($item->img)}}" alt=""></a>
                        

                            <div class="post-content">

                            <h3><a class="post-title" href="blog-post.html">{{$item->titre}}</a></h3>

                                        
                            <p class="section-text">{{$item->description}}</p>
                                
                            </div><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                        <div class="blog-post">

                            <a href="blog-post.html"><img class="img-carousel post-img" src="{{asset($item->img)}}" alt=""></a>

                            <div class="post-content">

                                <h3><a class="post-title" href="blog-post.html">{{$item->titre}}</a></h3>

                                        
                                <p class="section-text">{{$item->description}}</p>
                                
                            </div><!-- /.post-content -->

                        </div><!-- /.blog-post -->


                    </div>
                </div>
                @endforeach   
            </div>
        </section><!-- /.section-blog -->

        <section class="social-networks">

            <div class="container-fluid">

                <div class="row">

                    <a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
 
                </div>
                
            </div>
            
        </section><!-- /.social-networks -->

    </main><!-- /.site-main -->

@endsection