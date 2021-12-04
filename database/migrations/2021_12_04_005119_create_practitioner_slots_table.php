<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractitionerSlotsTable extends Migration
{
    public function up()
    {
        Schema::create('practitioner_slots', function (Blueprint $table) {
            $table->id();
            $table->date('date')->nullable();
            $table->string('day');
            $table->string('time');
            $table->foreignId('practitioner_id')->constrained('practitioners');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('practitioner_slots');
    }
}
