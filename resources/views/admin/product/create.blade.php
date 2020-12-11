@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Tambah Product</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{route('product-admin')}}">Product</a></div>
        <div class="breadcrumb-item active" aria-current="page">Tambah Product</div>
    </div>
    </div>


    <div class="section-body">

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>New Product</h4>
                </div>
                <div class="card-body">
                <form action="{{ route('product-store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" class="form-control" name="judul" value="{{old('judul')}}" autofocus placeholder="Judulnya Apa ?">
                    @error('judul')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                  </div>



                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" class="form-control" name="gambar" id="gambar" value="{{old('gambar')}}">
                        @error('gambar')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                  </div>

                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="number" class="form-control" name="harga" value="{{old('harga')}}" autofocus placeholder="Tulis harga dalam satuan Rp.">
                    @error('harga')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                  </div>



                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                    <div class="col-sm-12 col-md-7">
                      <textarea id="summernote" class="form-control" name="desc">{{old('desc')}}</textarea>
                        @error('desc')
                            <div class="mt-2 text-danger">
                            {{$message}}
                            </div>
                        @enderror
                    </div>
                  </div>
                  <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                      <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
    </div>
</section>
</div>
@endsection
@section('css-after')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js-after')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
    $('#summernote').summernote();
});
</script>
@endsection
