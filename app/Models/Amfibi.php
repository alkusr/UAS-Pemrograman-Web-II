<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amfibi extends Model
{
    use HasFactory;
    protected $table = "amfibi";
    protected $fillable = [
        'no_binatang',
        'nama',
        'jenis',
        'jk',
        'kesehatan_id',
        'kandang_id',
        'makanan_id'
    ];
}
