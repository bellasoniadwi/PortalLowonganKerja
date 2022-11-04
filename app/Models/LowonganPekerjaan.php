<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LowonganPekerjaan extends Model
{
    use HasFactory;
    protected $table = 'lowongan_pekerjaans';

    protected $fillable = [
        'nama_pekerjaan',
        'kategori_id',
        'tipe_pekerjaan',
        'status',
        'foto',
        'perusahaan',
        'x',
        'y',
        'deskripsi',
        'contact_person',
        'no_telp'
    ];

    public function kategori(){
        return $this->belongsTo('App\Models\Kategori', 'kategori_id', 'id');
    }

    // /**
    //  * Get the route key for the model.
    //  *
    //  * @return string
    //  */
    // public function getRouteKeyName()
    // {
    //     return 'nama_pekerjaan';
    // }

    // /**
    //  * Get the Titik that owns the Toko
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function titik(): BelongsTo
    // {
    //     return $this->belongsTo(Titik::class);
    // }


    // public function generateRandomString($length = 20)
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $charactersLength = strlen($characters);
    //     $code = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $code .= $characters[mt_rand(0, strlen($charactersLength) - 1)];
    //     }
    //     return $code;
    // }
}
