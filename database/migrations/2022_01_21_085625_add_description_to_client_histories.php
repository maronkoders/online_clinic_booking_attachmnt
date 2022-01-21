<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDescriptionToClientHistories extends Migration
{
    public function up()
    {
        Schema::table('client_histories', function (Blueprint $table) {
            $table->string('description');
        });
    }

    public function down()
    {
        Schema::table('client_histories', function (Blueprint $table) {
            $table->dropColumn(['description']);
        });
    }
}
