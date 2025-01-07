<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewa';
    protected $primaryKey = 'id_booking';
    protected $fillable = ['id_customer', 'id_fasilitas', 'tanggal_acara', 'nama_acara'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }

    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas');
    }

}
