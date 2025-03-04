<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TalentProfile extends Model
{
    protected $fillable = [
        'complete_name',
        'phone_number',
        'city_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
