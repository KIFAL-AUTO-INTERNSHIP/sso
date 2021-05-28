<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    public $timestamps = false;

    protected $fillable = [
        'user_firstname',
        'user_lastname',
        'user_password',
        'user_email',
        'user_phone',
        'user_token'
    ];

    protected $hidden = [
        'user_password',
        // 'remember_token',
    ];

}


