<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent;

class DatabaseSeeder extends Seeder
{   
    public function run()
    {
        \Eloquent::unguard();

        $this->call(UserTypeSeedTable::class);
        $this->call(UserSeeder::class);
    }
}
