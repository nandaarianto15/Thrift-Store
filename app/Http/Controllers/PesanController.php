<?php

namespace App\Http\Controllers;
use App\Models\Barang;
// use Auth;
use App\Models\CheckoutBarang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
// use Alert;
use RealRashid\SweetAlert\Facades\Alert as Alert;
// use Carbon;
use Carbon\Carbon as Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class PesanController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index($id)
    {
        $barang = Barang::where ('id', $id)->first();

        return view('pesan.index', compact('barang'));
        
    }
    public function pesan(Request $request, $id)
    {
        // dd('sudah sampai');
        $barang = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        //validasi melebihi batas
        if($request->jumlah > $barang->stok)
        {
            return redirect('pesan/' .$id);
        }
                
        
        //cek validasi
        $cek_pesanan =  Pesanan::where('user_id', Auth::user()->id)-> where ('status', 'barang masih dalam keranjang')->first();
        //simpan ke database pesanan
        if (empty($cek_pesanan))
        {
            $pesanan = new Pesanan;
            $pesanan -> user_id = Auth::user()->id;
            $pesanan -> tanggal = $tanggal;
            $pesanan -> status = 'barang masih dalam keranjang';
            // $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga+$request->jumlah_pesan;
            $pesanan -> jumlah_harga = 0;
            $pesanan -> kode = mt_rand(10000000, 99999999);
            $pesanan -> save();
        }

        //simpan ke history
        $cek_barang = Pesanan::where('user_id', Auth::user()->id)->where('status', 'barang masih dalam keranjang')->first();

        $checkout_barang = new CheckoutBarang;
        $checkout_barang -> id = $barang->id;
        $checkout_barang -> pesanan_id = $cek_barang->id;
        $checkout_barang -> nama_barang = $barang -> nama_barang;
        $checkout_barang -> gambar = $barang -> gambar;
        $checkout_barang -> harga = $barang -> harga;
        $checkout_barang -> stok = $barang -> stok;
        $checkout_barang -> keterangan = $barang -> keterangan;
        $checkout_barang -> save();


        //simpan ke database pesanan detail
        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)-> where ('status', 'barang masih dalam keranjang')->first(); 
         
        //cek pesanan detail
        $cek_pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
        if (empty($cek_pesanan_detail))
        {
            $pesanan_detail = new PesananDetail;
            $pesanan_detail -> barang_id = $barang->id;
            $pesanan_detail -> pesanan_id = $pesanan_baru->id;
            $pesanan_detail -> jumlah = $request->jumlah_pesan;
            $pesanan_detail -> jumlah_harga = $pesanan_detail->jumlah_harga+$barang->harga+$request->jumlah_pesan;
            $pesanan_detail -> save();
        }   else {
            $pesanan_detail = PesananDetail::where('barang_id', $barang->id)->where('pesanan_id', $pesanan_baru->id)->first();
            $pesanan_detail->jumlah = $pesanan_detail->jumlah+$request->jumlah_pesan;

            //harga sekarang
            $harga_pesanan_detail_baru = $barang->harga*$request->jumlah_pesan;
            $pesanan_detail->jumlah_harga = $pesanan_detail->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_detail->update();
        }

        
        //jumlah total
        $pesanan = Pesanan::where('user_id', Auth::user()->id)-> where ('status', 'barang masih dalam keranjang')->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga+$pesanan_detail->jumlah_harga;
        $pesanan->update(); 

        //Alert
        Alert::success('Success', 'Pesanan Sukses Masuk Keranjang');

        $pesanan_baru->jumlah_harga = $barang->harga*$request ->jumlah_pesan;
        // $pesanan_baru->jumlah_harga = 0;
        return redirect('pria');
    }

}

