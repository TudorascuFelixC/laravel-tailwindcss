<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vepost_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('vepost_addr');
            $table->string('password');
            $table->string('displayname')->nullable();
            $table->string('controlstring')->default('00000000000000000000');
            $table->decimal('balance', 10, 2)->default(0); // Added scale of 2 for decimal.
            $table->string('vepost_counter')->default('10');
            $table->string('status')->default('0');
            $table->string('free_send_left')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vepost_user');
    }
};
