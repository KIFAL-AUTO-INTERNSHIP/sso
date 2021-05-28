<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    use HasFactory;
    protected $table = "confirmation";
    protected $primaryKey = "confirmation_id";
    public $timestamps = false;
    protected $fillable = [
        "confirmation_user",
        "confirmation_success",
        "confirmation_sms",
        "confirmation_date",
        "confirmation_success_date",
        "confirmation_nbr_tentative"
    ];
}
