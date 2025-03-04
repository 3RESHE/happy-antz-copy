<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployerProfile extends Model
{
    protected $fillable = [
        'company_name',
        'complete_name',
        'position',
        'company_address',
        'company_email',
        'company_phone'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
