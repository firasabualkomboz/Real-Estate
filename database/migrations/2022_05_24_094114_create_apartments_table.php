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
            $table->integer('year_built');
            $table->integer('space');
            $table->integer('rooms');
            $table->integer('bathroom');
            $table->integer('on_floor');
            $table->string('image');
            $table->string('photos');
            $table->foreignId('property_id')->constrained('estates')->cascadeOnDelete();
            $table->foreignId('estate_id')->constrained('estates')->cascadeOnDelete();

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
