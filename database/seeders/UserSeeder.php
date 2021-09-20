<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userRole = UserType::where('name','Admin')->first();

        User::create([
            'name'=>'Admin' ,
            'email'=>'admin@gmail.com',
            'user_type_id'=> $userRole->id,
            'password'=>Hash::make('admin@gmail.com')
        ]);
    }
}
