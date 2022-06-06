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
        'kesehatan_id',
        'kandang_id',
        'makanan_id'
    ];

    public function kandang(){
        return $this->belongsTo(Kandang::class);
    }
    public function makanan(){
        return $this->belongsTo(Makanan::class);
    }
    public function kesehatan(){
        return $this->belongsTo(Kesehatan::class);
    }
}
