<?php

namespace Database\Seeders;

use App\Models\Clinic;
use Illuminate\Database\Seeder;

class ClinicSeeder extends Seeder
{
    public function run()
    {
        Clinic::create([
            'name' => 'Premier Service Medical Investments',
            'address' => '45 Baines Ave',
            'city' =>'Harare',
            'phone'=>'04 250 011',
            'consultation_fee' => '30',
            'email' => 'admin@psmi.co.zw',
            'working_hours' =>'08:00-16:00',
            'working_days' => 'Monday-Friday'
        ]);
    }
}
