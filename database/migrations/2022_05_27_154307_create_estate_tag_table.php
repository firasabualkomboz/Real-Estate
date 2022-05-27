<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstateTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estate_tag', function (Blueprint $table) {
            $table->foreignId('tag_id')->constrained('tags', 'id')->cascadeOnDelete();
            $table->foreignId('estate_id')->constrained('estates', 'id')->cascadeOnDelete();
            $table->primary(['tag_id', 'estate_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estate_tag');
    }
}
