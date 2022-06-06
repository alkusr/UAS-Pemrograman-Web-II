<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;
    protected $table = "makanan";
    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function air(){
        return $this->hasMany(Air::class);
    }
    public function darat(){
        return $this->hasMany(Darat::class);
    }
    public function amfibi(){
        return $this->hasMany(Amfibi::class);
    }
}
