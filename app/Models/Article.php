<?php

namespace App\Models;

use App\Helpers\HasTags;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Article extends Model
{
    use HasFactory;
    use HasTags; // Self helper 

    // polymorphic one to many
    public function comments(): MorphMany
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    // // polymorphic (many to many)
    // public function tags(): MorphToMany
    // {
    //     return $this->morphToMany(Tag::class, 'taggable');
    // }


}
