<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index($id)
    {
        $barang = Barang::where ('id', $id)->first();

        return view('produkpria.shirt', compact('barang'));
        
    }
}
