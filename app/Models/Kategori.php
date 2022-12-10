<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LowonganPekerjaan;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $guarded = 'id';

    protected $fillable = [
        'nama_kategori',
    ];

    public function lowonganpekerjaan(){
        return $this->hasMany('App\Models\LowonganPekerjaan', 'kategori', 'nama_kategori');
    }
}
