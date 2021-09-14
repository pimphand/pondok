<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nik_kk');
            $table->string('fullname');
            $table->string('slug');
            $table->string('gender');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->integer('child_to');
            $table->integer('child_from');
            $table->string('status_family');
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('Ward');
            $table->string('address');
            $table->string('place_address');
            $table->string('student_address');
            $table->string('phone');
            $table->string('distance_to_school');
            $table->string('vehicle');
            $table->string('hobby');
            $table->integer('spp');
            $table->text('statement');
            $table->string('goals')->nullable();
            $table->string('school_from')->nullable();
            $table->string('school_address')->nullable();
            $table->string('semester_move')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
