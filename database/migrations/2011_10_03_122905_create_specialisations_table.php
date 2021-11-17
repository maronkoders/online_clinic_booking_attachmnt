<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialisationsTable extends Migration
{

    public function up()
    {
        Schema::create('specialisations', function (Blueprint $table) {
            $table->id();
            $table->string('specialisation_name')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('specialisations');
    }
}
