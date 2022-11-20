<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public const GAL_BENCE = 'galbence';
    public const KISS_ZSOFIA = 'kisszsofia';
    public const MULLER_JULIA = 'mullerjulia';
    public const VANDA_TIMEA = 'vandatimea';

    protected $fillable = [
        'user_name',
        'first_name',
        'last_name',
        'newsletter',
        'amount',
        'email',
        'role_id',
        'email_verified_at',
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'newsletter' => 'boolean',
    ];

    public function history()
    {
        return $this->hasMany(History::class);
    }

    public function getfullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }
}
