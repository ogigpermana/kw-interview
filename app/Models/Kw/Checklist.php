<?php

namespace App\Models\Kw;

use App\Models\Actor\User;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $filllable = [
        'object_domain',
        'object_id',
        'description',
        'is_completed',
        'completed_at',
        'updated_by',
        'updated_at',
        'created_at',
        'due',
        'urgency'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

     // Scope untuk memfilter tulisan
     public function ScopeFilter($query, $filter)
     {
         // Make sure any sort entered
         if(isset($filter['sort']) && $sort = $filter['sort'])
         {
            $query->where(function($q) use ($sort){
             $q->orWhere('urgency', 'LIKE', "%{$sort}%");
             $q->orWhere('-urgency', 'LIKE', "%{$sort}%", 'DESC');
            });
         }
     }
}
