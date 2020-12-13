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
        <h2 class="section-title">All Product</h2>
        <div class="row my-3">

            <div>
                <p class="section-lead">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima suscipit accusamus temporibus,
                </p>
            </div>

        </div>


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
                <h4>My Product</h4>
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


                        <td>Rp.{{$product->harga}}</td>

                        <td>{{$product->created_at->format("D, d/M/Y")}}</td>


                        <td>
                                <a href="/adm/portfolio/{{$product->slug}}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                    @csrf
                                    @method("delete")

                                        <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                </form>
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
