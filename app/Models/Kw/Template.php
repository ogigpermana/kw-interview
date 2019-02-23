<?php

namespace App\Models\Kw;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'name',
        'checklist_id',
        'item_id'
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'item_id');
    }

    public function checklist()
    {
        return $this->belongsTo(Checklist::class, 'checklist_id');
    }
}
