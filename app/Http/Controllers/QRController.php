<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use RealRashid\SweetAlert\Facades\Alert as Alert;
use Carbon\Carbon as Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as Auth;

class QRController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        
        $pesanan = Pesanan::where('user_id', Auth::user()->id)->where('id', $id)->where('status', '!=', 'barang masih dalam keranjang')->get();
        $pesanan_details = PesananDetail::where('pesanan_id', Auth::user()->id)->get();

        return view('qrtest', compact('pesanan', 'pesanan_details'));
    }

}
