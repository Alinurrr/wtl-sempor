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





            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Laporan Penjualan WTL</h4>
                    <div class="ml-auto mr-3">
                        <a href="{{route('product-create')}}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-print"></i> Cetak</a>
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
                            <th>Kode Pemesanan</th>
                            <th>waktu</th>
                            <th>User</th>
                            <th>Barang</th>
                            <th>Sub Total</th>
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
                            <td>{{$pesanan->kode_pemesanan}}</td>

                            <td>{{$pesanan->created_at->format("D, d/M/Y")}}</td>

                            <td>{{$pesanan->user->name}}</td>

                            <td>
                                <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                                @foreach ($pesanan_details as $pesanan_detail)
                                {{ $pesanan_detail->product->judul }} || Rp.{{ number_format($pesanan_detail->product->harga)}}
                                <br>
                                @endforeach
                            </td>


                            <td>Rp. {{number_format($pesanan->total_harga + $pesanan->kode_unik )}}</td>




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
