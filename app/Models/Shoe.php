<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Shoe extends Model
{
    use HasFactory;

    /**
     * 2. One to Many Relationship
     * multpile shoes are owned by each User.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
