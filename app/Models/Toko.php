<?php

namespace App\Models;

use App\Models\Titik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'tokos';
    protected $guarded = 'id';

    protected $fillable = [
        'nama',
        'alamat',
        'no_hp',
        'pemilik',
        'image',
        'token',
        'x',
        'y',
        'jam_buka',
        'jam_tutup'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'nama';
    }

    /**
     * Get the Titik that owns the Toko
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function titik(): BelongsTo
    {
        return $this->belongsTo(Titik::class);
    }

    /**
     * Get the Layanan that owns the Toko
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }

    /**
     * Get the Transaksi that owns the Toko
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    }

    public function generateRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[mt_rand(0, strlen($charactersLength) - 1)];
        }
        return $code;
    }
}
