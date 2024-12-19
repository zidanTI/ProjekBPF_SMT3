<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fasilitas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_fasilitas';
    protected $fillable = ['nama_paket', 'harga', 'deskripsi'];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_fasilitas');
    }
}
