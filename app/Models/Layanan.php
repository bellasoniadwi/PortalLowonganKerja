<?php

namespace App\Models;

use App\Models\Peta;
use App\Models\Toko;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanans';
    protected $guarded = 'id';

    protected $fillable = [
        'nama_toko',
        'jenis',
    ];

    /**
     * Get the Toko that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toko(): BelongsTo
    {
        return $this->belongsTo(Toko::class);
    }

    /**
     * Get the Transaksi that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    }

    /**
     * Get the peta that owns the Layanan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peta(): BelongsTo
    {
        return $this->belongsTo(Peta::class);
    }
}
