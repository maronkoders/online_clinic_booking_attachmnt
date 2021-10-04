<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClinicsTable extends Migration
{

    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("address");
            $table->string("city");
            $table->string("phone")->unique();
            $table->string("email")->umique();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('clinics');
    }
}
