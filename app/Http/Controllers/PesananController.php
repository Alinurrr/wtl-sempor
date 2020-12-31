<?php

namespace App\Http\Controllers;

use App\Pesanan;
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
}
