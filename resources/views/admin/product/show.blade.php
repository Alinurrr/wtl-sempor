@extends('layouts-adm.app-adm')

@section('css-after')

    <style>

        img {
        max-width: 100%; }

        .preview {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }
        @media screen and (max-width: 996px) {
            .preview {
            margin-bottom: 20px; } }

        .preview-pic {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .preview-thumbnail.nav-tabs {
        border: none;
        margin-top: 15px; }
        .preview-thumbnail.nav-tabs li {
            width: 18%;
            margin-right: 2.5%; }
            .preview-thumbnail.nav-tabs li img {
            max-width: 100%;
            display: block; }
            .preview-thumbnail.nav-tabs li a {
            padding: 0;
            margin: 0; }
            .preview-thumbnail.nav-tabs li:last-of-type {
            margin-right: 0; }

        .tab-content {
        overflow: hidden; }
        .tab-content img {
            width: 100%;
            -webkit-animation-name: opacity;
                    animation-name: opacity;
            -webkit-animation-duration: .3s;
                    animation-duration: .3s; }

        .card {
        margin-top: 50px;
        background: #eee;
        padding: 3em;
        line-height: 1.5em; }

        @media screen and (min-width: 997px) {
        .wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex; } }

        .details {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
            -ms-flex-direction: column;
                flex-direction: column; }

        .colors {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
                flex-grow: 1; }

        .product-title, .price, .sizes, .colors {
        text-transform: UPPERCASE;
        font-weight: bold; }

        .checked, .price span {
        color: #ff9f1a; }

        .product-title, .rating, .product-description, .price, .vote, .sizes {
        margin-bottom: 15px; }

        .product-title {
        margin-top: 0; }

        .size {
        margin-right: 10px; }
        .size:first-of-type {
            margin-left: 40px; }

        .color {
        display: inline-block;
        vertical-align: middle;
        margin-right: 10px;
        height: 2em;
        width: 2em;
        border-radius: 2px; }
        .color:first-of-type {
            margin-left: 20px; }

        .add-to-cart, .like {
        background: #ff9f1a;
        padding: 1.2em 1.5em;
        border: none;
        text-transform: UPPERCASE;
        font-weight: bold;
        color: #fff;
        -webkit-transition: background .3s ease;
                transition: background .3s ease; }
        .add-to-cart:hover, .like:hover {
            background: #b36800;
            color: #fff; }

        .not-available {
        text-align: center;
        line-height: 2em; }
        .not-available:before {
            font-family: fontawesome;
            content: "\f00d";
            color: #fff; }

        .orange {
        background: #ff9f1a; }

        .green {
        background: #85ad00; }

        .blue {
        background: #0076ad; }

        .tooltip-inner {
        padding: 1.3em; }

        @-webkit-keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }

        @keyframes opacity {
        0% {
            opacity: 0;
            -webkit-transform: scale(3);
                    transform: scale(3); }
        100% {
            opacity: 1;
            -webkit-transform: scale(1);
                    transform: scale(1); } }


    </style>

@endsection

@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Ini Halaman Detail Product</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="{{route('product-admin')}}">Product</a></div>
        <div class="breadcrumb-item active" aria-current="page">{{$product->judul}}</div>
    </div>
    </div>

    <div class="section-body">



        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                              <img src="/{{$product->gambar}}">
                            </div>

                        </div>
                        <div class="details col-md-6">
                            <div class="row my-1 ml-1">
                                <h3 class="product-title">{{$product->judul}}</h3>
                            </div>

                            <div class="action">
                                <a href="#" class="badge badge-warning mr-2 text-capitalize">{{$product->category->name}}</a>
                                &#9900; <span class="text-muted ml-2">{{$product->created_at->format("D, d/M/Y")}}</span>
                            </div>

                            <div class="action mt-2">
                                <span class="text-muted ml-2">Diunggah oleh {{$product->author->name}}</span>
                            </div>
                            <div class="row mt-4">
                                <div class="mr-auto">
                                    <h5 class="price ml-3 text-capitalize text-muted ">Harga: <span>Rp.{{number_format($product->harga)}}</span></h5>
                                </div>
                                {{-- @if (auth()->user()->id == $product->user_id) --}}
                                @can('update', $product)
                                <div class="ml-auto">
                                    <a href="/adm/product/{{$product->slug}}/edit"  class="btn btn-icon icon-left btn-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                                    <button type="button" class="btn btn-icon icon-left btn-danger  btn-sm" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-trash-alt"></i> Delete
                                    </button>
                                </div>
                                @endcan
                            </div>
                            {{-- <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">41 reviews</span>
                            </div> --}}
                            <p class="product-description pt-2">{!!$product->desc!!}</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="/adm/product/{{$product->slug}}/delete" method="POST">
        @csrf
        @method("delete")
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin mau hapus ???</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <h3>{{$product->judul}}</h3>
        {{-- <p>Published at : {{$product->created_at->format("D, d/M/Y (H:i:s)")}}</p> --}}
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
