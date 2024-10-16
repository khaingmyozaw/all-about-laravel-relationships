<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * 1. One to One Relationship
     * This user has a Lamborghini car
     * 
     * Each user would have a Lamborghini.
     */
    public function lamborghini(): HasOne
    {
        return $this->hasOne(Lamborghini::class);
    }

    /**
     * 2. One to Many Relationship
     * This user has many shoes
     * 
     * Notice naming convention is pleural
     */
    public function shoes(): HasMany
    {
        return $this->hasMany(Shoe::class);
    }

    /**
     * 4. Many to Many Relationship
     * 
     * Users can have many groups
     * 
     * Notice: naming convention is pleural
     */
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class)
                    ->using(GroupUser::class)
                    ->withPivot('active')
                    ->withTimestamps();
    }

    // This model also relates to car model
    /**
     * morphOne(Model, 'method');
     */
    public function car(): MorphOne
    {
        return $this->morphOne(Car::class, 'carable');
    }
}
