<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name',];

    // Car model is common child of other models (Customer, Employee, User)
    // naming means car + able = carable
    public function carable(): MorphTo
    {
        return $this->morphTo();
    }
}
