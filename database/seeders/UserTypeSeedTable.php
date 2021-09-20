<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeedTable extends Seeder
{
    protected $userTypes = ['Admin','Customer','Practitioner'];

    public function run()
    {
        foreach($this->userTypes as $type)
        {
            UserType::create(['name'=>$type]);
        }
    }
}
