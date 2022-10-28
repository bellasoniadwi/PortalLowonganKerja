<?php

namespace App\Models;

use App\Models\Peta;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Status extends Model
{
    use HasFactory;

    protected $table = 'statuses';
    protected $guarded = 'id';

    protected $fillable = [
        'status'
    ];

    /**
     * Get the Transaksi that owns the Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaksi(): BelongsTo
    {
        return $this->belongsTo(Transaksi::class);
    }

    /**
     * Get the peta that owns the Status
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peta(): BelongsTo
    {
        return $this->belongsTo(Peta::class);
    }
}
