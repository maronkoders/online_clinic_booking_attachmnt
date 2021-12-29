<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicPatientsTable extends Migration
{

    public function up()
    {
        Schema::create('clinic_patients', function (Blueprint $table) {
            $table->id();
            $table->string('client_number');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('gender',['male','female']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('clinic_patients');
    }
}
