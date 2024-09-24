<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Imagine a bitcoin project. 
     * On one project has many users and users can have referrals.
     * So, this project has users and referrals who are from it's users.
     * 
     * But it only related referrals through it's users why it is called One To ManyThrough.
     * 
     */
    public function clients(): HasMany
    {
        return $this->hasMany(Client::class);
    }

    /**
     * This project related referrals through users
     */
    public function clientReferrals(): HasManyThrough
    {
        return $this->hasManyThrough(Referral::class, Client::class);
        // return $this->hasManyThrough(Referral::class, Client::class, 'project_id', 'client_id'); <= format
    }

    /**
     * If HasOneThrough , it is easy
     */
    public function clientReferral(): HasOneThrough
    {
        return $this->hasOneThrough(Referral::class, Client::class);
        // return $this->hasManyThrough(Referral::class, Client::class, 'project_id', 'client_id'); <= format
    }
}
