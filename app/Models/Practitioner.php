<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practitioner extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','specialisation_id','gender','file_name'];

    public function specialisation()
    {
        return $this->belongsTo(Specialisation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
