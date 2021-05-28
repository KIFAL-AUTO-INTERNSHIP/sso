<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class LoginLog extends Model
{
    use HasFactory;
    protected $table = "login_log";
    protected $primaryKey = "log_id";
    public $timestamps = false;
    protected $fillable = [
        "log_user",
        "log_date",
        "log_status",
        "log_password",
        "log_ip",
        "log_agent"
    ];
}

