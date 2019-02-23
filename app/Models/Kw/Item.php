<?php

namespace App\Models\Kw;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'description', 
        'updated_by',
        'is_completed',
        'completed_at',
        'due',
        'urgency',
        'updated_at',
        'created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
