<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug'];

    public const ADMIN = 'admin';
    public const SUPER_ADMIN = 'super';
    public const USER = 'user';
    public const EMPLOYEE = 'employee';

    public const ROLES = [
        self::ADMIN,
        self::SUPER_ADMIN,
        self::USER,
        self::EMPLOYEE
    ];

}
