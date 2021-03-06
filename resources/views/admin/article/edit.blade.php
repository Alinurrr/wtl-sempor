@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Edit Artcle</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{route('article-admin')}}">Article</a></div>
        <div class="breadcrumb-item" aria-current="page"><a href="/adm/article/{{$article->slug}}">{{$article->title}}</a></div>
        <div class="breadcrumb-item active" aria-current="page">Edit</div>
    </div>
    </div>


    <div class="section-body">

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <img class="card-img-top mx-auto" src="/{{$article->thumbnail}}" alt="Sample image" style="width: 500px">
                </div>
                <div class="card-body">
                <form action="/adm/article/{{$article->slug}}/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" class="form-control" name="title" value="{{old('title') ?? $article->title}}" autofocus placeholder="Judulnya Apa ?">
                        @error('title')
                                <div class="mt-2 text-danger">
                                {{$message}}
                                </div>
                            @enderror
                        </div>
                      </div>



                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="file" class="form-control" name="thumbnail" id="thumbnail" value="{{old('thumbnail')}}">
                            @error('thumbnail')
                                <div class="mt-2 text-danger">
                                {{$message}}
                                </div>
                            @enderror
                        </div>
                      </div>

                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="category">
                                <option disabled selected>Pilih Satu Yuk</option>
                                @foreach ($article_categories as $category)
                                    <option {{$category->id == $article->article_category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="mt-2 text-danger">
                                {{$message}}
                                </div>
                            @enderror
                        </div>
                      </div>

                      {{-- <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                        <div class="col-sm-12 col-md-7">
                            <select class="form-control selectric" name="category">
                                <option disabled selected>Pilih Satu Yuk</option>
                                @foreach ($categories as $category)
                                    <option {{$category->id == $product->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <div class="mt-2 text-danger">
                                {{$message}}
                                </div>
                            @enderror
                        </div>
                      </div> --}}


                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea id="summernote" class="form-control" name="body">{{old('body') ?? $article->body}}</textarea>
                            @error('body')
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
