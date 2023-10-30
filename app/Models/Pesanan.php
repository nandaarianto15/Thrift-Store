<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    // use HasFactory;
     public function user()
     {
        return $this->belongsTo('App\Models\user', 'user_id', 'id');
     }

     public function pesanan_detail()
     {
         return $this->hasmany('App\Models\PesananDetail', 'pesanan_id', 'id');
     }

     public function checkout_barang()
     {
         return $this->hasmany('App\Models\CheckoutBarang', 'pesanan_id', 'id');
     }
}
