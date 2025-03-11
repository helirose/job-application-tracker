<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JobApplication extends Model
{
    use HasFactory;

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
        return $this->hasMany(ApplicationEvent::class);
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

