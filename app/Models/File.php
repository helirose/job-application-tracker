<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
    ];
    
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function jobApplication() : BelongsTo
    {
        return $this->belongsTo(jobApplication::class);
    }
}
