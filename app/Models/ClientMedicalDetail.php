<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientMedicalDetail extends Model
{
    use HasFactory;
    protected $fillable =['heartRate','bodyTemperature','glucoseLevel','bloodPressure','user_id'];
}
