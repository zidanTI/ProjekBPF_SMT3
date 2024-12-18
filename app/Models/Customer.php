<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_hp'];

    public function sewa()
    {
        return $this->hasMany(Sewa::class, 'id_customer');
    }
}
