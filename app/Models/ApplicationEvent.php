<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApplicationEvent extends Model
{
    protected $fillable = [
        'job_application_id',
        'status',
        'created_at'
    ];

    public function jobApplication() : BelongsTo
    {
        return $this->belongsTo(JobApplication::class);
    }
}
