<?php

namespace App\Models;

use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Specify that the primary key is 'id' and it's of type 'string'
    protected $keyType = 'string';

    // Indicate that the primary key is not auto-incrementing
    public $incrementing = false;

    protected $attributes = [
        'id' => '',
    ];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['id'] = (string) Str::uuid();
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function review_Detail()
    {
        return $this->hasOne(Review::class);
    }
}
