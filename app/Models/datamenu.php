<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class datamenu extends Model
{
    use HasFactory;
    /**
     * Get the getKaetgori that owns the datamenu
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getKategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class, 'kategori_id', 'id');
    }
}
