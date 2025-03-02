<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = ['company_name', 'job_title', 'date_applied', 'status', 'recruiter_id'];
    
    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }
}

