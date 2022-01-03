<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('description');
            $table->foreignId('practitioner_id')->constrained('practitioners');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
}
