<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sewa extends Model
{
    use HasFactory;

    protected $fillable = ['id_customer', 'id_fasilitas', 'tanggal_acara', 'bukti_pembayaran', 'nama_acara'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }
}
