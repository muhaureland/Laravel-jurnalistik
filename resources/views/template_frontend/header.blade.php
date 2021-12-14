<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex justify-content-center">
            <a class="mt-1" href="/"><img src="{{ asset('assets_frontend/images/version/tech-logo.png') }}" alt=""></a>
            </div>
            

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                        <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <li>
                                <div class="container">
                                    
                                    <div class="mega-menu-content clearfix">
                                        <div class="tab">
                                            {{-- @foreach ($categories as $item)
                                            <button class="tablinks active" onclick="openCategory(event, 'cat01')">{{ $item->name }}</button>
                                            @endforeach --}}
                                        </div>

                                        <div class="tab-details clearfix">
                                            <div id="cat01" class="tabcontent active">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="https://source.unsplash.com/600x500/" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    {{-- @foreach ($categories as $item)
                                                                    <span class="menucat">{{ $item->name }}</span>
                                                                    @endforeach --}}
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                
                                                                    
                                                                {{-- <h4><a href="tech-single.html" title="">{{ $posts[0]->judul }}</a></h4> --}}
                                                                
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end tab-details -->
                                    </div><!-- end mega-menu-content -->

                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Kategori</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="tech-category-02.html">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech-category-03.html">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tech-contact.html">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav mr-2">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-rss"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-android"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-apple"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->