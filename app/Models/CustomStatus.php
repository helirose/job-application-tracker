<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CustomStatus extends Model
{
    protected $fillable = [
        'user_id',
        'status',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(CustomStatus::class);
    }
}
