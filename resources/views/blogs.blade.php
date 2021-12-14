@extends('template_frontend.main')
@section('title', 'blog')
@section('content')
@if ($posts->count())
<div class="masonry-blog clearfix mt-3">
        <div class="single-post-media">
            <img src="https://source.unsplash.com/788x443/?{{ $posts[0]->iniCategory->name }}" alt="" class="img-fluid">
            <div class="shadoweffect">
                <div class="shadow-desc">
                    <div class="blog-meta">
                        <span class="bg-orange"><a href="tech-category-01.html" title="">{{ $posts[0]->iniCategory->name }}</a></span>
                        <h4><a href="tech-single.html" title="">{{ $posts[0]->judul }}</a></h4>
                        <p>{{ $posts[0]->excerpt }}</p>

                        <small><a href="tech-single.html" title="">{{ $posts[0]->created_at->diffForhumans() }}</a></small>
                        <small><a href="tech-author.html" title="">{{ $posts[0]->iniauthor->name }}</a></small>
                    </div><!-- end meta -->
                </div><!-- end shadow-desc -->
            </div><!-- end shadow -->
        </div><!-- end post-media -->
</div><!-- end masonry -->

<div class="container">
    <div class="page-wrapper">
        <div class="blog-top clearfix">
            <h4 class="pull-left">{{ $title }}<a href="#"><i class="fa fa-rss"></i></a></h4>
        </div><!-- end blog-top -->

        @foreach ($posts->skip(1) as $item)
            <div class="blog-list clearfix">
                <div class="blog-box row">
                    <div class="col-md-4">
                        <div class="post-media">
                            <a href="tech-single.html" title="">
                                <img src="https://source.unsplash.com/600x500?{{ $item->iniCategory->name }}" alt="" class="img-fluid">
                                <div class="hovereffect"></div>
                            </a>
                        </div><!-- end media -->
                    </div><!-- end col -->

                    <div class="blog-meta big-meta col-md-8">
                        <h4><a href="/detail/{{ $item->slug }}" title="">{{ $item->judul }}</a></h4>
                        <p>{{ $item->excerpt }}</p>
                        <small class="firstsmall"><a class="bg-orange" href="/?category={{ $item->iniCategory->slug }}" title="">{{ $item->iniCategory->name }}</a></small>
                        <small><a href="tech-single.html" title="">{{ $item->created_at->diffForhumans() }}</a></small>
                        <small><a href="/authors/{{ $item->iniauthor->username }}" title="">{{ $item->iniauthor->name }}</a></small>
                        <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 1114</a></small>
                        <small><a href="/detail/{{ $item->slug }}" title=""><i class="fa fa-eye"></i> readmore</a></small>
                    </div><!-- end meta -->
                </div><!-- end blog-box -->
                <hr class="invis">
            </div><!-- end blog-list -->
        @endforeach
    </div><!-- end page-wrapper -->
    @else
    <p class="text-center fs-4">no post found brooo</p>
@endif
    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-start">
                    <li class="page-item">{{ $posts->links() }}</li>
                </ul>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->

@endsection