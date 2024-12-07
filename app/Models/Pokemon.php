<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'type',
        'description',
        'location',
        'rarity',
        'base_points',
        'health_points',
        'attack',
        'defense'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
