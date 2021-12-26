@extends('template_backend.main')
@section('title', 'dashboard')
@section('container')
<div class="section-header">
    <h1>Posts</h1>
    <div class="section-header-button">
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Posts</a></div>
    <div class="breadcrumb-item">All Posts</div>
    </div>
</div>
<div class="section-body">
    <div class="row">
    <div class="col-12">
        <div class="card mb-0">
        <div class="card-body">
            <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" href="#">All <span class="badge badge-white">5</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Draft <span class="badge badge-primary">1</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pending <span class="badge badge-primary">1</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Trash <span class="badge badge-primary">0</span></a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </div>
    <div class="row mt-4">
    <div class="col-12">
        <div class="card">
        <div class="card-body">
            <div class="float-left">
            <select class="form-control selectric">
                <option>Action For Selected</option>
                <option>Move to Draft</option>
                <option>Move to Pending</option>
                <option>Delete Pemanently</option>
            </select>
            </div>
            <div class="float-right">
            <form>
                <div class="input-group">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">                                            
                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                </div>
            </form>
            </div>

            <div class="clearfix mb-3"></div>

            <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th class="text-center pt-2">
                        <div class="custom-checkbox custom-checkbox-table custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                        </div>
                    </th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Created At</th>
                    <th>Status</th>
                </tr>
                @foreach ($posts as $item)
                <tr>
                    <td>
                        <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                        <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                        </div>
                    </td>
                    <td>{{ $item->judul }}
                        <div class="table-links">
                        <a href="#">View</a>
                        <div class="bullet"></div>
                        <a href="#">Edit</a>
                        <div class="bullet"></div>
                        <form class="d-inline" action="{{ route('posts.destroy', $item->id) }}" method="post" onsubmit="return submitForm(this);">
                            @method('delete')
                            @csrf
                            {{-- <a href="#" class="text-danger">Trash</a> --}}
                            <button class="text-danger" type="submit">Trash</button>
                        </form>
                        </div>
                    </td>
                    <td>
                        <a href="#">{{ $item->category->name }}</a>, 
                    </td>
                    <td>{{ $item->created_at->diffForhumans() }}</td>
                    <td><div class="badge badge-primary">Published</div></td>
                </tr>
                @endforeach
            </table>
            </div>
            <div class="float-right">
            <nav>
                <ul class="pagination">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-start">
                            <li class="page-item">{{ $posts->links() }}</li>
                        </ul>
                    </nav>
                </ul>
            </nav>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection