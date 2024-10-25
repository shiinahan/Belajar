<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kategori extends Model
{
    use HasFactory;
    /**
     * Get the getDatamenu that owns the kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getDatamenu(): BelongsTo
    {
        return $this->belongsTo(datamenu::class, 'nama_menu', 'id');
    }
}
