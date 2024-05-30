<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id_user',
        'id_destinasi',
        'id_destinasi_akhir',
        'status',
        'payment_proof',
    ];

    public function destinasiAwal()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi', 'id');
    }

    public function destinasiAkhir()
    {
        return $this->belongsTo(Destinasi::class, 'id_destinasi_akhir', 'id');
    }
}
