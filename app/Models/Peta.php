<?php

namespace App\Models;

use App\Models\Titik;
use App\Models\Status;
use App\Models\Layanan;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use phpDocumentor\Reflection\PseudoTypes\LowercaseString;

class Peta extends Model
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

    /**
     * Get the status that owns the Peta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('nama','like', '%' . $search . '%')
            ->orWhere('pemilik','like', '%' . $search . '%')
            ->orWhere('alamat','like', '%' . $search . '%')
            ->orWhere('no_hp','like', '%' . $search . '%');
        });
    }
}
