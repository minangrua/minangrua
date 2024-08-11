<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konservasi extends Model
{
    use HasFactory;

    protected $table = 'konservasis';
    protected $fillable = ['nama', 'gambar', 'keterangan'];  
}
