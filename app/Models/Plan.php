<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'plan_name',
        'user_type',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
