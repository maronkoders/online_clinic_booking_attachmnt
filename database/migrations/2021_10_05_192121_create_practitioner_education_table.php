<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitionerEducationTable extends Migration
{
    public function up()
    {
        Schema::create('practitioner_education', function (Blueprint $table) {
            $table->id();
            $table->string('degree');
            $table->string('college');
            $table->year('completion_year');
            $table->foreignId('practitioner_id')->constrained('practitioners');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practitioner_education');
    }
}
