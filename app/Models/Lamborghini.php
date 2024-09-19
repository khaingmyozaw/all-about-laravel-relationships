<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lamborghini extends Model
{
    use HasFactory;
    /**
     * 1. One to One Relationship
     * This Lamborghini car belongs to a User 
     * 
     * The owner is just onlyone
     * 
     * => view in migration file
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
