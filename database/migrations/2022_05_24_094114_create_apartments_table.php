<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('features');
            $table->integer('space');
            $table->integer('rooms');
            $table->integer('bathroom');
            $table->integer('on_floor');
            $table->string('image');
            $table->string('photos');
            $table->integer('rent');
            $table->integer('commission');
            $table->foreignId('estate_id')->constrained('estates')->cascadeOnDelete();
            $table->enum('status', ['available', 'rent', 'unavailable'])->default('unavailable');
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
        Schema::dropIfExists('apartments');
    }
}
