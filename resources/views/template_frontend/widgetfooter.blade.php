                            </div><!-- end col -->
                        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 mt-4">
                            <div class="sidebar">
                                <div class="widget">
                                    <h2 class="widget-title">Trend Videos</h2>
                                    <div class="trend-videos">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="tech-single.html" title="">
                                                    <img src="https://source.unsplash.com/800x460/" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class="videohover"></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="tech-single.html" title="">We prepared the best 10 laptop presentations for you</a></h4>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                        <hr class="invis">
                                    </div><!-- end videos -->
                                </div><!-- end widget -->
                        
                                <div class="widget">
                                    <h2 class="widget-title">Popular Posts</h2>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            @foreach ($popular as $item)
                                            <a href="detail/{{ $item->slug }}" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="https://source.unsplash.com/600x500/" alt="" class="img-fluid float-left">
                                                    <h5 class="mb-1">{{ $item->judul }}</h5>
                                                    <small>{{ $item->created_at->diffForhumans() }} </small><span class="badge badge-info">{{ $item->views }}</span>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div><!-- end blog-list -->
                                </div><!-- end widget -->
                        
                                <div class="widget">
                                    <h2 class="widget-title">Recent Reviews</h2>
                                    <div class="blog-list-widget">
                                        <div class="list-group">
                                            <a href="tech-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                                <div class="w-100 justify-content-between">
                                                    <img src="upload/tech_blog_02.jpg" alt="" class="img-fluid float-left">
                                                    <h5 class="mb-1">Banana-chip chocolate cake recipe..</h5>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div><!-- end blog-list -->
                                </div><!-- end widget -->
                        
                                <div class="widget">
                                    <h2 class="widget-title">Follow Us</h2>
                        
                                    <div class="row text-center">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button facebook-button">
                                                <i class="fa fa-facebook"></i>
                                                <p>27k</p>
                                            </a>
                                        </div>
                        
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button twitter-button">
                                                <i class="fa fa-twitter"></i>
                                                <p>98k</p>
                                            </a>
                                        </div>
                        
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button google-button">
                                                <i class="fa fa-google-plus"></i>
                                                <p>17k</p>
                                            </a>
                                        </div>
                        
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <a href="#" class="social-button youtube-button">
                                                <i class="fa fa-youtube"></i>
                                                <p>22k</p>
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- end widget -->
                        
                                <div class="widget">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end widget -->
                            </div><!-- end sidebar -->
                        </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </section>
