<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreviousLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_levels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('register_id')->constrained();
            $table->string('name');
            $table->string('nisn');
            $table->string('year_graduation');
            $table->string('npsn');
            $table->string('address');
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
        Schema::dropIfExists('previous_levels');
    }
}
