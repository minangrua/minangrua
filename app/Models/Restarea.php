<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Type;
use Illuminate\Database\Eloquent\Model;

class Restarea extends Model
{
    use HasFactory;

    protected $table = 'restareas';
    protected $fillable = ['nama', 'gambar', 'keterangan', 'type_id'];  

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }
}
