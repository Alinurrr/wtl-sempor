@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Edit Status Pembelian</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="invoice">
                    <div class="invoice-print">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="invoice-title">
                            <h2>Detail Pesanan</h2>
                            <div class="invoice-number">{{$pesanan->kode_pemesanan}}</div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-6">
                              <address>
                                <strong>Billed To:</strong><br>
                                {{$pesanan->user->name}}<br>
                                {{$pesanan->user->no_hp}}<br>
                                {{$pesanan->user->alamat}}<br>
                              </address>
                            </div>
                            <div class="col-md-6 text-md-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                    {{$pesanan->created_at->format("D, d/M/Y (H:i:s)")}}<br><br>
                                  </address>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="section-title">Order Summary</div>
                          <p class="section-lead">All items here cannot be deleted.</p>
                          <div class="table-responsive">
                            <table class="table table-striped table-hover table-md">
                              <tbody><tr>
                                <th>Item</th>
                                <th class="text-left">Price</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-left">Sub Totals</th>
                              </tr>
                              <?php $pesanan_details = \App\PesananDetail::where('pesanan_id', $pesanan->id)->get(); ?>
                              @foreach ($pesanan_details as $pesanan_detail)
                              <tr>
                                <td>{{ $pesanan_detail->product->judul }}</td>
                                <td class="text-left">Rp.{{number_format( $pesanan_detail->product->harga )}}</td>
                                <td class="text-center">{{ $pesanan_detail->jumlah_pesanan }}</td>
                                <td class="text-left">Rp.{{ number_format( $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->harga )}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td class="text-right" colspan="3"><strong>Total</strong> :</td>
                                <td class="text-left"><strong>Rp.{{number_format($pesanan->total_harga + $pesanan->kode_unik)}}</strong></td>
                            </tr>

                            </tbody></table>
                          </div>
                        </div>
                      </div>
                    </div>
                    <hr>
                  </div>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <div class="card">
                    <form action="{{ route('pesanan-update', $pesanan->kode_pemesanan) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="card-header">
                      <h4>Status Pemesanan</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="form-group ml-3 col-md-8 col-12">
                            <label>Status</label>
                            <select name="status" class="form-control">
                              <option value="0" {{$pesanan->status == 0 ? 'selected' : ''}}>Masih Di Keranjang</option>
                              <option value="1" {{$pesanan->status == 1 ? 'selected' : ''}}>Belum Dibayar</option>
                              <option value="2" {{$pesanan->status == 2 ? 'selected' : ''}}>Pesanan Diproses</option>
                              <option value="3" {{$pesanan->status == 3 ? 'selected' : ''}}>Dikirim</option>
                              <option value="4" {{$pesanan->status == 4 ? 'selected' : ''}}>Done</option>
                            </select>
                          </div>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary">Save Changes</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
