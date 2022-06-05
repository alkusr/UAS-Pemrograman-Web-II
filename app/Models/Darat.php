<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Darat extends Model
{
    use HasFactory;
    protected $table = "darat";
    protected $fillable = [
        'no_binatang',
        'nama',
        'jenis',
        'jk',
        's_kesehatan',
        's_kandang',
        's_makanan'
    ];
}
