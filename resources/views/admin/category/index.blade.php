@extends('template_backend.main')
@section('title', 'dashboard')
@section('container')
<div class="section-header">
    <h1>Kategori</h1>
    <div class="section-header-button">
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Add New</a>
    </div>
    {{-- @if (session('status'))
        <div class="alert alert-success mb-1">
            {{ session('status') }}
        </div>
    @endif --}}
    <div class="section-header-breadcrumb">
    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    <div class="breadcrumb-item"><a href="#">Kategori</a></div>
    <div class="breadcrumb-item">All Kategori</div>
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
                    <th>kategori</th>
                    <th>Created At</th>
                    <th>Status</th>
                </tr>
                @foreach ($categories as $item)
                <tr>
                    <td>
                        <div class="custom-checkbox custom-control">
                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                        <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                        </div>
                    </td>
                    <td>{{ $item->name }}
                        <div class="table-links">
                        <a href="#">View</a>
                        <div class="bullet"></div>
                        <a href="#">Edit</a>
                        <div class="bullet"></div>
                        <a href="#" class="text-danger">Trash</a>
                        </div>
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
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                    </a>
                </li>
                </ul>
            </nav>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection