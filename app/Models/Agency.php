<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    protected $fillable = [
    ];

    public function contacts() : HasMany
    {
        return $this->hasMany(Contact::class);
    }
}
