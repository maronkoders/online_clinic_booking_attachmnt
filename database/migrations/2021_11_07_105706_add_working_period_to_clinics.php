<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWorkingPeriodToClinics extends Migration
{
    public function up()
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->string('working_hours');
            $table->string('working_days');
        });
    }

    public function down()
    {
        Schema::table('clinics', function (Blueprint $table) {
            $table->dropColumn(['working_hours']);
            $table->dropColumn(['working_days']);
        });
    }
}
