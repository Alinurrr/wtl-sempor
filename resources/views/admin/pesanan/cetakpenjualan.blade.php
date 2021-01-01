<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penjualan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan Barang</h4>
        <h5>Wahana Tirta Lestari</h4>
        <p>Tanggal : @php echo date('d-m-Y H:i:s'); @endphp</p>
	</center>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Pemesanan</th>
                <th>waktu</th>
                <th>User</th>
                <th>Barang</th>
                <th>Sub Total</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pesanan as $pesanan)
			<tr>
                <td>{{ $i++ }}</td>
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
            <tr>
                <td colspan="5" align="right"><strong>Total Penjualan : </strong></td>
                <td ><strong>Rp.{{number_format($totalJual)}}</strong></td>
            </tr>
		</tbody>
	</table>

</body>
</html>
