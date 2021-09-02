<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustodiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custodians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('register_id')->constrained()->nullable();
            $table->string('name')->nullable();
            $table->string('nik')->nullable();
            $table->string('homeroom')->nullable(); //Hubungan dengan wali
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('education')->nullable();
            $table->string('work')->nullable();
            $table->integer('income')->nullable();
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
        Schema::dropIfExists('custodians');
    }
}
