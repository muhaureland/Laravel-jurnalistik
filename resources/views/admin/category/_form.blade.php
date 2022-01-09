<div class=" card">
    <div class="card-header">
        <h4>Write Your Kategori</h4>
    </div>
    <div class="card-body">
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
            <div class="col-sm-12 col-md-7">
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    id="judul" value="{{ old('name', $category->name) }}">
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-4">
            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
            <div class="col-sm-12 col-md-7">
                <button type="submit" class="btn btn-primary">{{ $submit }}</button>
            </div>
        </div>
    </div>
</div>