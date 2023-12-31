<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    // use HasFactory;
    public function barang ()
    {
        return $this->belongsTo('App\Models\Barang', 'barang_id', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\PesananDetail', 'pesanan_id', 'id');
    }

    public function checkout_barang ()
    {
        return $this->belongsTo('App\Models\CheckoutBarang', 'barang_id', 'id');
    }
}
