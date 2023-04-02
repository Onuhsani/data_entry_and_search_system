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
        Schema::create('study_data', function (Blueprint $table) {
            $table->id();
            $table->string('gft1');
            $table->string('gat1');
            $table->string('gft2');
            $table->string('gat2');
            $table->string('score1');
            $table->string('score2');
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
        Schema::dropIfExists('study_data');
    }
};
