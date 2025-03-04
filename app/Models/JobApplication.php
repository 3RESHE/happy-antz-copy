<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'talent_id',
        'job_post_id',
        'cv_path',
        'resume_path',
        'status',
    ];

    public function talent()
    {
        return $this->belongsTo(User::class, 'talent_id');
    }

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class, 'job_post_id');
    }
}
