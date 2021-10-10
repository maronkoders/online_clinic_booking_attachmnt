<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitionerExperiencesTable extends Migration
{

    public function up()
    {
        Schema::create('practitioner_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('hospital_name');
            $table->string('designation');
            $table->year('from');
            $table->year('to');
            $table->foreignId('practitioner_id')->constrained('practitioners');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practitioner_experiences');
    }
}
