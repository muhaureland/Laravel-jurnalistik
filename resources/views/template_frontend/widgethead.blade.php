
{{-- <section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            <div class="first-slot">
                <div class="masonry-box post-media">
                    <img src="https://source.unsplash.com/788x443/?{{ $posts[0]->iniCategory->name }}" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">{{ $posts[0]->iniCategory->name }}</a></span>
                                <h4><a href="tech-single.html" title="">{{ $posts[0]->judul }}</a></h4>
                                <small><a href="tech-single.html" title="">{{ $posts[0]->created_at->diffForhumans() }}</a></small>
                                <small><a href="tech-author.html" title="">{{ $posts[0]->iniauthor->name }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end first-side -->

            <div class="second-slot">
                <div class="masonry-box post-media">
                    <img src="https://source.unsplash.com/394x449/?{{ $posts[1]->iniCategory->name }}" alt="" class="img-fluid">
                    <div class="assets_frontend/shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">{{ $posts[1]->iniCategory->name }}</a></span>
                                <h4><a href="tech-single.html" title="">{{ $posts[1]->judul }}</a></h4>
                                <small><a href="tech-single.html" title="">{{ $posts[1]->created_at->diffForhumans() }}</a></small>
                                <small><a href="tech-author.html" title="">{{ $posts[1]->iniauthor->name }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->

            <div class="last-slot">
                <div class="masonry-box post-media">
                    <img src="https://source.unsplash.com/394x449/?{{ $posts[2]->iniCategory->name }}" alt="" class="img-fluid">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-orange"><a href="tech-category-01.html" title="">{{ $posts[2]->iniCategory->name }}</a></span>
                                <h4><a href="tech-single.html" title="">{{ $posts[2]->judul }}</a></h4>
                                <small><a href="tech-single.html" title="">{{ $posts[2]->created_at->diffForhumans() }}</a></small>
                                <small><a href="tech-author.html" title="">{{ $posts[2]->iniauthor->name }}</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end second-side -->
        </div><!-- end masonry -->
    </div>
</section> --}}

<div class="container-fluid">
    <section class="section second-section">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <form action="/" method="get">
                        {{-- @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif --}}
                        <div class="input-group mb-12">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                    </form>