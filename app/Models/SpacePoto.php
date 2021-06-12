<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpacePoto extends Model
{
    // use HasFactory;
    protected $guarded = [];
    /**
     * Get the space that owns the SpacePoto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function space()
    {
        return $this->belongsTo(Space::class, 'space_id', 'id');
    }
}
