<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    public function getPost(): HasOne
    {
        return $this->hasOne(Post::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function latestActivePost(): HasOne
    {
        return $this->hasOne(Post::class)->ofMany([
                'id' => 'max'
            ], function(Builder $query){
                $query
                ->where('status', '=', 1)
                ->where('id', '<>', 6);
            });
    }

    public function latestPost(): HasOne
    {
        return $this->hasOne(Post::class)->latestOfMany();
    }

    public function oldestPost(): HasOne
    {
        return $this->hasOne(Post::class)->oldestOfMany();
    }

}
