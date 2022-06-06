<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Air extends Model
{
    use HasFactory;
    protected $table = "air";
    protected $fillable = [
        'no_binatang',
        'nama',
        'jenis',
        'jk',
        'kesehatan_id',
        'kandang_id',
        'makanan_id'
    ];

    public function kandang(){
        return $this->belongsTo(Kandang::class);
    }
    //ini relation, Belum diterapkan kesemua model
}
