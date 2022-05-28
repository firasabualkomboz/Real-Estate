<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates_tags', function (Blueprint $table) {

            $table->unsignedBigInteger('estate_id');
            $table->unsignedBigInteger('tag_id');

            $table->primary(['estate_id' , 'tag_id']);

            $table->foreign('estate_id')->references('id')->on('estates')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates_tags');
    }
}
