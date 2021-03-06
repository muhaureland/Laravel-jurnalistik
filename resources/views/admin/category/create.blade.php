@extends('template_backend.main', ['title' => 'Categories - Create'])
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
                @include('admin.category._form',[
                    'submit' => 'Create'
                ])
            </form>
        </div>
    </div>
</div>
@endsection