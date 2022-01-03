<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PractitionerSlot extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class,'patient_id','id');
    }

    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class,'practitioner_id','id');
    }
}
