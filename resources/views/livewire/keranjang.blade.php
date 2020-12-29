<div class="container pt-3">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-danger">
                    {{session('message')}}
                </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-respondsive">
                <table class="table">
                    <thead>
                        <td>No.</td>
                        <td>Gambar</td>
                        <td>Keterangan</td>
                        <td>Jumlah</td>
                        <td>Harga</td>
                        <td><strong>SubTotal</strong></td>
                        <td></td>
                    </thead>
                    <tbody>
                        @php
                            $no =1
                        @endphp

                        @forelse ($pesanan_details as $pesanan_detail )
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <img src="/{{$pesanan_detail->product->gambar}}" class="img-flluid" width="200">
                                </td>
                                <td>
                                    {{$pesanan_detail->product->judul}}
                                </td>
                                <td>
                                    {{$pesanan_detail->jumlah_pesanan}}
                                </td>
                                <td>
                                    Rp.{{number_format($pesanan_detail->product->harga)}}
                                </td>
                                <td>

                                    <strong>Rp.{{number_format($pesanan_detail->total_harga)}}</strong>
                                </td>
                                <td>
                                    <i wire:click="destroy({{ $pesanan_detail->id }})" class="fas fa-trash text-danger"></i>
                                </td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td align="center" colspan="7">Data Kosong?</td>
                            </tr>
                        @endforelse
                        @if (!empty($pesanan))
                            <tr>
                                <td colspan="5" align="right"><strong>Total Harga : </strong></td>
                                <td><strong>Rp.{{number_format($pesanan->total_harga)}}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Kode Unik : </strong></td>
                                <td><strong>Rp.{{number_format($pesanan->kode_unik)}}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="5" align="right"><strong>Total Yang Harus Dibayarkan : </strong></td>
                                <td><strong>Rp.{{number_format($pesanan->total_harga+$pesanan->kode_unik)}}</strong></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="6"></td>
                                <td colspan="2">
                                    <a href="#" class="btn btn-success btn-blok">
                                        Check Out
                                    </a>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
