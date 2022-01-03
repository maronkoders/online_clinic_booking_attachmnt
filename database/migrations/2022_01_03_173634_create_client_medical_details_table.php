<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientMedicalDetailsTable extends Migration
{
    public function up()
    {
        Schema::create('client_medical_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('heartRate');
            $table->string('bodyTemperature');
            $table->string('glucoseLevel');
            $table->string('bloodPressure');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_medical_details');
    }
}
