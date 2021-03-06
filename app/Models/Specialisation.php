<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialisation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function practitioner()
    {
        return $this->hasMany(Practitioner::class,'id','specialisation_id');
    }
}
