<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractitionerEducation extends Model
{
    use HasFactory;
    protected $fillable = ['degree','college','completion_year','practitioner_id'];
}
