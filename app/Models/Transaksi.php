<?php

namespace App\Models;

use App\Models\User;
use App\Models\Peta;
use App\Models\Toko;
use App\Models\Status;
use App\Models\Layanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksis';
    protected $guarded = 'id';

    protected $fillable = [
        'nama_toko',
        'nama',
        'berat',
        'token',
        // 'toko_id',
        'layanan_id',
        'status_id'
    ];

    protected $with = [
        'toko',
        'layanan',
        'status'
    ];

    /**
     * Get the Toko that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function toko(): BelongsTo
    {
        return $this->belongsTo(Toko::class);
    }

    /**
     * Get the Layanan that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function layanan(): BelongsTo
    {
        return $this->belongsTo(Layanan::class);
    }

    /**
     * Get the Status that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    /**
     * Get the peta that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peta(): BelongsTo
    {
        return $this->belongsTo(Peta::class);
    }

    /**
     * Get the user that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama_toko','like', '%' . $search . '%')
            ->orWhere('token','like', '%' . $search . '%');
        });
    }
}
