<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = [
        'name',
        'email',
        'content'

    ];

    public function posts(): HasMany
    {
        return $this->hasMany(related:Post::class, foreignKey:'author_id');
    }
}
