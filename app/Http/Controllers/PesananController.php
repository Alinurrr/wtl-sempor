<?php

namespace App\Http\Controllers;

use App\Pesanan;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PesananController extends Controller
{
    public function index()
    {
        $pesanans = Pesanan::latest()->orderBy('created_at')->paginate(12);
        return view('admin.pesanan.index', [
            'pesanans' => $pesanans,

        ]);
    }

    public function penjualanindex()
    {
        $pesanans = Pesanan::latest()->paginate(40)->where('status', "4");
        $totalJual = Pesanan::latest()->paginate(40)->where('status', "4")->sum('total_harga');
        return view('admin.pesanan.indexpenjualan', [
            'pesanans' => $pesanans,
            'totalJual' => $totalJual,

        ]);
    }

    public function edit(Pesanan $pesanan)
    {
        return view('admin.pesanan.edit', [
            'pesanan' => $pesanan,
        ]);
    }

    public function update(Pesanan $pesanan)
    {
        $attr = request()->validate([
            'status' => 'required',
        ]);

        // dd($attr);

        //update
        $pesanan->update($attr);

        Alert::success('Status pesanan user telah diedit');
        return redirect()->route('pesanan-edit', $pesanan->kode_pemesanan);
        // return redirect()->to(route('product-admin'));
    }
    public function cetak_pdf()
    {
        $pesanan = Pesanan::latest()->paginate(40)->where('status', "4");
        $totalJual = Pesanan::latest()->paginate(40)->where('status', "4")->sum('total_harga');

        $mytime = Carbon::now()->toDateTimeString();
        // dd($mytime);

        $pdf = PDF::loadview('admin.pesanan.cetakpenjualan', [
            'pesanan' => $pesanan,
            'totalJual' => $totalJual,
        ]);
        return $pdf->download('[' . $mytime . ']laporan-penjualanWTL.pdf');
    }
}
