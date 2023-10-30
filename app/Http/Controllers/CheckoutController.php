<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Auth as Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CheckoutBarang;


class CheckoutController extends Controller
{
    //
    public function check_out()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->id)-> where ('status', 'barang masih dalam keranjang')->first();
        if(!empty($pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanan->id)->get();
            return view('pesan.check_out', compact('pesanan', 'pesanan_details'));
        }
        
    }

    public function delete($id)
    {
        $pesanan_detail = PesananDetail::where('id', $id)->first();
        
        $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
        $pesanan->update();

        $pesanan_detail->delete();
        Alert::error('Hapus', 'Pesanan Berhasil Di Hapus');
        return redirect('check-out');
    }

    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Error', 'Identitas harus di lengkapi');
            return redirect('profile');
        }
        if(empty($user->nohp))
        {
            Alert::error('Error', 'Identitas harus di lengkapi');
            return redirect('profile');
        }


        $pesanan = Pesanan::where('user_id', Auth::user()->id)-> where ('status', 'barang masih dalam keranjang')->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 'Konfirmasi ke admin';
        $pesanan->update();

        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail)
        {
            $barang = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barang->stok = $barang->stok-$pesanan_detail->jumlah;
            $barang->delete();
        }

        Alert::success('Success', 'Pesanan Berhasil Check Out');
        return redirect('qr/'.$pesanan->id);
        
    }

}
