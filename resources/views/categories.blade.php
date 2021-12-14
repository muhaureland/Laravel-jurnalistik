@extends('template_frontend.main')
@section('title', 'categories')

@section('content')
<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
    <div class="page-wrapper">
        <div class="blog-grid-system">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-box">
                        {{-- <div class="post-media">
                            <a href="tech-single.html" title="">
                                <img src="assets_frontend/upload/tech_menu_01.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta big-meta">
                            <span class="color-orange"><a href="tech-category-01.html" title="">Gadgets</a></span>
                            <h4><a href="tech-single.html" title="">We visited the ancient theater in Macedonia</a></h4>
                            <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh.</p>
                            <small><a href="tech-single.html" title="">14 July, 2017</a></small>
                            <small><a href="tech-author.html" title="">by Jack</a></small>
                            <small><a href="tech-single.html" title=""><i class="fa fa-eye"></i> 2887</a></small>
                        </div><!-- end meta --> --}}
                        <h1 class="mb-4">Kategori media</h1>
                            <div class="row">
                                @foreach ($categories as $category)
                                <div class="col-md-6 mt-2 post-media">
                                    <a href="/categories/{{ $category->slug }}">
                                        <div class="card bg-dark text-white">
                                            <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                                            <div class="card-img-overlay d-flex align-items-center">
                                                <h5 class="card-title text-center">{{ $category->name }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                    </div><!-- end blog-box -->
                </div><!-- end col -->


            </div><!-- end row -->
        </div><!-- end blog-grid-system -->
    </div><!-- end page-wrapper -->

    <hr class="invis">

    <div class="row">
        <div class="col-md-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-start">
                    <li class="page-item">{{ $categories->links() }}</li>
                </ul>
            </nav>
        </div><!-- end col -->
    </div><!-- end row -->

</div><!-- end col -->

@endsection