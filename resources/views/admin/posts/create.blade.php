@extends('template_backend.main', ['title' => 'Post-Create'])
@section('container')
<div class="section-header">
    <div class="section-header-back">
    <a href="{{ route('posts.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Create New Post</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Posts</a></div>
    <div class="breadcrumb-item">Create New Post</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Form tambah permintaan pendistribusian bahan bangunan</h4>
                </div>
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
         
                        {{-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="category_id">Pemasok</label>
                            <div class="col-sm-12 col-md-6">
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option disabled selected>=== Pilih Pemasok ===</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="category_id">Material</label>
                            <div class="col-sm-12 col-md-6">
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option disabled selected>=== Pilih Material ===</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="category_id">Jenis</label>
                            <div class="col-sm-12 col-md-6">
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option disabled selected>=== Pilih Jenis ===</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="category_id">Merk</label>
                            <div class="col-sm-12 col-md-6">
                                <select class="form-control selectric @error('category_id') is-invalid @enderror" name="category_id" id="category_id">
                                    <option disabled selected>=== Pilih Merk ===</option>
                                    @foreach($categories as $item)
                                    <option value="{{ $item->id }}" {{ old('category_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah</label>
                                <div class="form-group col-md-3">
                                <input type="number" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-3">
                                <select id="inputState" class="form-control">
                                    <option selected>Satuan</option>
                                    <option>...</option>
                                </select>
                                </div>
                          </div>
                          {{-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="gambar" id="image-label">Choose File</label>
                                    <img class="img-preview img-fluid">
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar" onchange="previewImage()">
                                    @error('gambar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="body">Keterangan</label>
                            <div class="col-sm-12 col-md-6">
                                <input type="hidden" class="form-control @error('body') is-invalid @enderror" name="body" id="body" value="{{ old('body') }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button type="submit" class="btn btn-primary">Create</button>
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

