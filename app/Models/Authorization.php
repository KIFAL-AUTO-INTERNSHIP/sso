<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authorization extends Model
{
    use HasFactory;
    protected $table = 'authorization';
    protected $primaryKey = 'authorization_id';
    public $timestamps = false;

    protected $fillable = [
        'authorization_user',
        'authorization_app',
    ];

    protected $casts = [
        'authorization_app' => 'array',
    ];
}
