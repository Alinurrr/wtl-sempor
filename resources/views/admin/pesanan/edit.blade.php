@extends('layouts-adm.app-adm')


@section('content')
<!-- Main Content -->
<div class="main-content">
<section class="section">
    <div class="section-header">
    <h1>Edit Status Pembelian</h1>
    </div>

    <div class="section-body">
        <div class="col-12 col-md-12 col-lg-6">
            <div class="card">
                <form action="{{ route('pesanan-update', $pesanan->kode_pemesanan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="card-header">
                  <h4>Kode Pesan : {{$pesanan->kode_pemesanan}}  ||  </h4>
                  <h4>Nama : {{$pesanan->user->name}}</h4>
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
</section>
</div>
@endsection
