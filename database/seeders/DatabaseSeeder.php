<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \Eloquent::unguard();
        $this->call(UserTypeSeedTable::class);
        $this->call(UserSeeder::class);
        $this->call(ClinicSeeder::class);
    }
}
