<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\CheckoutBarang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\Auth as Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        // $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('id', $id)->where('status', '!=', 'belum lunas')->get();
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->paginate(100);
        $tanggal = Carbon::now();
        $barang = Barang::where('id', $id)->first();
        $pesanan_details = PesananDetail::where('pesanan_id', Auth::user()->id)->get();
        // $checkout_barang = CheckoutBarang::where('id', $id)->first();

        // dd($pesanans);

        return view('shop', compact('pesanans', 'tanggal', 'barang', 'pesanan_details'));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->cari;
        $tanggal = Carbon::now();
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pesanans = DB::table('pesanans')
		->where('kode','like',"%".$search."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('belanja.shop', compact('tanggal'), ['pesanans' => $pesanans]);
 
	}

    public function detail($id)
    {   

        $pesanan_details = PesananDetail::where('pesanan_id', Auth::user()->id)->where('pesanan_id', $id)->get();
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('id', $id)->get();
        $checkout_barang = CheckoutBarang::where('id', $id)->get();
        return view('belanja.shopdetail', compact('pesanan', 'pesanan_details', 'checkout_barang'));  
        
    }
}
