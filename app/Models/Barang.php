<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    // use HasFactory;
    public function pesanan_detail()
    {
        return $this->hasmany('App\Models\PesananDetail', 'pesanan_id', 'id');
    }

    public function checkout_barang()
    {
        return $this->hasmany('App\Models\CheckoutBarang', 'pesanan_id', 'id');
    }
}
