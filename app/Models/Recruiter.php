<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recruiter extends Model
{  
    protected $fillable = ['name', 'agency', 'contact_method', 'email_address', 'phone_number'];

    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
