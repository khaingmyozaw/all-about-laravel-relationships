<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // This model also relates to car model
    /**
     * morphOne(Model, 'method');
     */
    public function car(): MorphOne
    {
        return $this->morphOne(Car::class, 'carable');
    }
}
