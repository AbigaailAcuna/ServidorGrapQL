<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Post extends Model
{

    protected $fillable = ["author_id", "title", "content"];

    public function author(): BelongsTo
    {
        return $this->belongsTo(related:User::class);
    }

}
