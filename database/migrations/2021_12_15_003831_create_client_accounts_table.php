<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('account_id')->constrained('client_banks');
            $table->decimal('debt',10,2);
            $table->decimal('credit',10,2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_accounts');
    }
}
