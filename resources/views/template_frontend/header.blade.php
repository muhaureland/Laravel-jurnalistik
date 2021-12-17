<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="d-flex justify-content-center">
            <a class="mt-1" href="{{ url('/') }}"><img src="{{ asset('assets_frontend/images/version/tech-logo.png') }}" alt=""></a>
            </div>
            

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang</a>
                        <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <li>
                                <div class="container">
                                    
                                    <div class="mega-menu-content clearfix">
                                        <div class="tab">
                                            <button class="tablinks active" onclick="openCategory(event, 'cat01')">{{ $categories[0]->name }}</button>
                                            <button class="tablinks" onclick="openCategory(event, 'cat02')">{{ $categories[1]->name }}</button>
                                            <button class="tablinks" onclick="openCategory(event, 'cat03')">{{ $categories[2]->name }}</button>
                                            <button class="tablinks" onclick="openCategory(event, 'cat04')">{{ $categories[3]->name }}</button>
                                            <button class="tablinks" onclick="openCategory(event, 'cat05')">{{ $categories[4]->name }}</button>
                                        </div>

                                        <div class="tab-details clearfix">
                                            <div id="cat01" class="tabcontent active">
                                                <div class="row">
                                                    {{-- take untuk membatasi foreach --}}
                                                    @foreach ($posts->take(4) as $item)
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="{{ asset('assets_frontend/upload/tech_menu_01.jpg') }}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    {{-- <span class="menucat">{{ $item->postKeCategory->name }}</span> --}}
                                                                    <span class="menucat">{{ $categories[0]->name }}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                <h4><a href="tech-single.html" title="">{{ $item->judul }}</a></h4>
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                        
                                                    </div>
                                                    @endforeach
                                                </div><!-- end row -->
                                            </div>
                                            <div id="cat02" class="tabcontent">
                                                <div class="row">
                                                    @foreach ($posts->take(4) as $item)
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="{{ asset('assets_frontend/upload/tech_menu_02.jpg') }}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">{{ $categories[1]->name }}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                <h4><a href="tech-single.html" title="">{{ $item->judul }}</a></h4>
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                    @endforeach
                                                </div><!-- end row -->
                                            </div>
                                            <div id="cat03" class="tabcontent">
                                                <div class="row">
                                                    @foreach ($posts->take(4) as $item)
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="{{ asset('assets_frontend/upload/tech_menu_03.jpg') }}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">{{ $categories[2]->name }}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                <h4><a href="tech-single.html" title="">{{ $item->judul }}</a></h4>
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                    @endforeach
                                                </div><!-- end row -->
                                            </div>
                                            <div id="cat04" class="tabcontent">
                                                <div class="row">
                                                    @foreach ($posts->take(4) as $item)
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="tech-single.html" title="">
                                                                    <img src="{{ asset('assets_frontend/upload/tech_menu_04.jpg') }}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">{{ $categories[3]->name }}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                <h4><a href="tech-single.html" title="">{{ $item->judul }}</a></h4>
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                    @endforeach
                                                </div><!-- end row -->
                                            </div>
                                            <div id="cat05" class="tabcontent">
                                                <div class="row">
                                                    @foreach ($posts->take(4) as $item)
                                                    <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                        <div class="blog-box">
                                                            <div class="post-media">
                                                                <a href="{{ url('detail', $item->slug) }}" title="">
                                                                    <img src="{{ asset('assets_frontend/upload/tech_menu_05.jpg') }}" alt="" class="img-fluid">
                                                                    <div class="hovereffect">
                                                                    </div><!-- end hover -->
                                                                    <span class="menucat">{{ $categories[4]->name }}</span>
                                                                </a>
                                                            </div><!-- end media -->
                                                            <div class="blog-meta">
                                                                <h4><a href="{{ url('detail', $item->slug) }}" title="">{{ $item->judul }}</a></h4>
                                                            </div><!-- end meta -->
                                                        </div><!-- end blog-box -->
                                                    </div>
                                                    @endforeach
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end tab-details -->
                                    </div><!-- end mega-menu-content -->

                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('categories') }}">Kategori</a>
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
                        <a class="nav-link" href="#"><i class="fa fa-rss"> Login</i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->