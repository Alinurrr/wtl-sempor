@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Halaman Pesanan User</h1>
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





            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>WTL Pesanan</h4>
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
                            <th>waktu</th>
                            <th>User</th>
                            <th>Kode Pemesanan</th>
                            <th>kode Unik</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @php
                            $no = 0
                        @endphp
                        @foreach ($pesanans as $pesanan)
                        @php
                            $no++
                        @endphp

                          <tr>
                            <td>
                              {{$no}}
                            </td>

                            <td>{{$pesanan->created_at->format("D, d/M/Y")}}</td>

                            <td>{{$pesanan->user->name}}</td>

                            <td>{{$pesanan->kode_pemesanan}}</td>


                            <td>{{$pesanan->kode_unik}}</td>



                            <td>
                                @if ($pesanan->status == 0 )
                                <span class="badge badge-light">Kerangjang</span>
                                @elseif($pesanan->status == 1)
                                <span class="badge badge-info">Belum Dibayar</span>
                                @elseif($pesanan->status == 2)
                                <span class="badge badge-warning">Pesanan Proses</span>
                                @elseif($pesanan->status == 3)
                                <span class="badge badge-secondary">Pesanan Kirim</span>
                                @elseif($pesanan->status == 4)
                                <span class="badge badge-success">Done :)</span>
                                @endif
                            </td>



                            <td>
                                    <a href="{{ route('pesanan-edit', $pesanan->kode_pemesanan) }}" class="btn btn-icon btn-info"><i class="fas fa-info-circle"></i></a>
                                    {{-- @can('update', $product)
                                    <form action="/adm/product/{{$product->slug}}/delete" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                        @csrf
                                        @method("delete")

                                            <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></i></button>
                                    </form>
                                    @endcan --}}
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
