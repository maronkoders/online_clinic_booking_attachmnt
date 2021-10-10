<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractitionerExperience extends Model
{
    use HasFactory;
    protected $fillable =['hospital_name','designation','from','to','practitioner_id'];
}
