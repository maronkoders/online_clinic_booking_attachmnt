<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;

    protected $fillable =['description' ,'practitioner_id','user_id'];
    public function practitioner()
    {
        return $this->belongsTo(Practitioner::class);
    }
}
