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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('nickname')->unique();
            $table->string('name');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('country_id');
            $table->integer('age');
            $table->string('status');

            $table->foreign('team_id')->references('id')
                ->on('teams');
            $table->foreign('country_id')->references('id')
                ->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
};
