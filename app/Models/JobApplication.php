<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'user_id',
        'company_name', 
        'job_title', 
        'date_applied',
        'closing_date', 
        'location',
        'salary_min',
        'salary_max',
        'salary_type', 
        'contact_id',
        'notes'
    ];
    
    public function contact() : BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function applicationEvents() : HasMany
    {
        return $this->hasMany(applicationEvent::class);
    }

    public function latestEvent() : HasOne
    {
        return $this->hasOne(ApplicationEvent::class)->latestOfMany();
    }

    public function files() : HasMany
    {
        return $this->hasMany(File::class);
    }
}

