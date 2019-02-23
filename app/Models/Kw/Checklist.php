<?php

namespace App\Models\Kw;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $filllable = [
        'object_domain',
        'object_id',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
