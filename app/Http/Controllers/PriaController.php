<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class PriaController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(20);
        // dd($barangs);
        return view ('man', compact('barangs'));
    }
}
