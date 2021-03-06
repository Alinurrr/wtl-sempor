@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
        <h1>List Product</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{route('product-admin')}}">Product</a></div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">WTL Product</h2>

        <form class="form-group" action="{{ route('search-product') }}" method="GET">
            <div class="col-6 input-group mb-3">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250" name="query" value="{{old('query')}}">
                <button class="btn btn-info" type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>

        <div class="card mt-4">
            <div class="card-header">
              <h4>Kategori</h4>
            </div>
            <div class="card-body">
              <div class="row">

                <a href="/adm/product" class="col mb-4 mb-lg-0 text-center btn">
                    <img src="{{ asset('/img/categories/all.svg') }}" alt="">
                    <div class="mt-2 font-weight-bold text-capitalize">all</div>
                </a>
                @foreach ($categories as $category)

                <a href="/adm/product/categories/{{$category->slug}}" class="col mb-4 mb-lg-0 text-center btn">
                    <img src="{{ asset('/img/categories') . '/' . $category->gambar}}" alt="">
                    <div class="mt-2 font-weight-bold text-capitalize">{{$category->name}}</div>
                </a>

                @endforeach

              </div>
            </div>
        </div>





        <div class="row mt-4">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h4>WTL Product</h4>
                <div class="ml-auto mr-3">
                    <a href="{{route('product-create')}}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah</a>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped" id="table-1">
                    <thead>
                      <tr>
                        <th class="text-center">
                          #
                        </th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Rekomendasi</th>
                        <th>Waktu Upload</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @php
                        $no = 0
                    @endphp
                    @foreach ($products as $product)
                    @php
                        $no++
                    @endphp

                      <tr>
                        <td>
                          {{$no}}
                        </td>

                        <td>
                          <img alt="image" src="/{{$product->gambar}}" class="img img-fluid p-2" width="200" data-toggle="tooltip" title="Mantap">
                        </td>
                        <td>{{$product->judul}}</td>

                        <td>{{$product->category->name}}</td>


                        <td>Rp.{{number_format($product->harga)}}</td>
                        <td>
                            @if ($product->rekomendasi == 1 )
                            <span class="badge badge-primary">OK</span>
                            @else
                            <span class="badge badge-warning">NO</span>
                            @endif
                        </td>

                        <td>{{$product->created_at->format("D, d/M/Y")}}</td>


                        <td>
                                <a href="/adm/product/{{$product->slug}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                @can('update', $product)
                                <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                    @csrf
                                    @method("delete")

                                        <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                </form>
                                @endcan
                        </td>
                      </tr>



                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>





        </div>



    </div>
</section>
</div>


@endsection
