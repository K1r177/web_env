<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): BelongsToMany
    {
        //return $this->belongsToMany(Tag::class);
        //return $this->belongsToMany(Tag::class)->withPivot(['created_at', 'updated_at']);
        return $this->belongsToMany(Tag::class)->as('ts')->withTimestamps();
    }

}
