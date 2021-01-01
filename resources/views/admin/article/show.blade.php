@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>Detail Article</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{route('article-admin')}}">Article</a></div>
            <div class="breadcrumb-item active" aria-current="page">{{$article->title}}</div>
        </div>
    </div>

    <div class="section-body">

        <h2 class="section-title">{{$article->title}}</h2>

        @can('update', $article)

        <div class="row my-3">
            <div class="ml-3">
                <a href="/adm/article/{{$article->slug}}/edit"  class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-icon icon-left btn-danger" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-trash-alt"></i> Delete
                </button>
            </div>
        </div>
        @endcan

        <!--Section: Content-->
        <section class="mx-md-5 dark-grey-text">

                <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">

                <!-- Card -->
                <div class="card card-cascade wider reverse">

                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                    <img class="card-img-top" src="/{{$article->thumbnail}}" alt="Sample image">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h6>
                        <a href="categories/{{$article->article_category->slug}}">
                            <span class="badge badge-primary my-2">{{ $article->article_category->name}}</span>
                        </a>
                    </h6>
                    <h3 class="font-weight-bold"><a>{{$article->title}}</a></h3>
                    <!-- Data -->
                    <p>Written by <a><strong>{{$article->author->name}}</strong></a>, {{$article->created_at->format("D, d/M/Y (H:i:s)")}}</p>
                    <!-- Social shares -->


                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->

                <!-- Excerpt -->
                <div class="mt-5">

                    <p>{!!$article->body!!}</p>


                </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="mb-5 mt-4">

        </section>
        <!--Section: Content-->


    </div>
</section>



</div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="/adm/article/{{$article->slug}}/delete" method="POST">
            @csrf
            @method("delete")
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus ???</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            <h3>{{$article->title}}</h3>
            {{-- <p>Published at : {{$portfolio->created_at->format("D, d/M/Y (H:i:s)")}}</p> --}}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </form>
        </div>
        </div>
    </div>
@endsection
