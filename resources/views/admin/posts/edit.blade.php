@extends('template_backend.main', ['title' => 'Post-Edit'])
@section('container')
<div class="section-header">
    <div class="section-header-back">
        <a href="{{ route('posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Update Postingan</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Posts</a></div>
    <div class="breadcrumb-item">Edit a Post</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Write Your Post</h4>
                </div>
                <form action="{{ route('posts.update', $post->slug) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="judul">Judul</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul', $post->judul) }}">
                                <input type="hidden" name="views">
                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="category_id">Kategori</label>
                            <div class="col-sm-12 col-md-7">
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option disabled selected>=== Pilih Kategori ===</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id', $post->category_id) == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="gambar" id="image-label">Choose File</label>
                                        <input type="hidden" name="oldGambar" value="{{ $post->gambar }}">
                                    @if ($post->gambar)
                                        <img src="{{ asset('storage/' . $post->gambar) }}" class="img-preview img-fluid">
                                    @else
                                        <img class="img-preview img-fluid">
                                    @endif
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="previewImage()">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="body">body</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="hidden" class="form-control @error('body') is-invalid @enderror" name="body" id="body" value="{{ old('body', $post->body) }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Create Post</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // matikan file input di trix editor
    document.addEventListener('trix-file-accept', function(e){
        e.prevenDefault();
    })

    // function preview gambar
    function previewImage() 
    {
        const image = document.querySelector('#gambar')
        const imgPreview = document.querySelector('.img-preview');
        imgPreview.style.display = 'block';
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent)
            {
                imgPreview.src = oFREvent.target.result;
            }
    }
</script>
@endsection
