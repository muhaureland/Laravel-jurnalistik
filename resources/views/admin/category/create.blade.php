@extends('template_backend.main')
@section('container')
<div class="section-header">
    <div class="section-header-back">
    <a href="{{ route('categories.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Create New Kategori</h1>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Kategori</a></div>
    <div class="breadcrumb-item">Create New Kategori</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
    <div class="col-12">
        <form action="{{ route('categories.store') }}" method="post"">
            @csrf
            <div class="card">
            <div class="card-header">
                <h4>Write Your Kategori</h4>
            </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="judul" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Create Kategori</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection
