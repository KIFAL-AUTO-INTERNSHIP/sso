<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = "user";
    protected $primaryKey = "user_id";
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "user_firstname",
        "user_lastname",
        "user_password",
        "user_email",
        "user_phone",
        "user_token"
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "user_password",
        // "remember_token",
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    // protected $casts = [
    //     "email_verified_at" => "datetime",
    // ];
}
