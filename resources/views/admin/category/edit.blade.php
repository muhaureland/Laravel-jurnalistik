@extends('template_backend.main', ['title' => 'Categories - Edit'])
@section('container')
<div class="section-header">
    <div class="section-header-back">
        <a href="{{ route('categories.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
    </div>
    <h1>Update Kategori</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Kategori</a></div>
        <div class="breadcrumb-item">Update Kategori</div>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('categories.update', $category->slug) }}" method="post"">
                @csrf
                @method('PUT')
                @include('admin.category._form', [
                    'submit' => 'Update'
                ])
            </form>
        </div>
    </div>
</div>
@endsection