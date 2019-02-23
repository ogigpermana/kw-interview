<?php

namespace App\Models\Kw;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['description', 'updated_by'];

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
