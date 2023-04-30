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
        Schema::create('sub_galleries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('gallery_id');
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('description');
            $table->string('thumbnail_image');
            $table->string('multiple_image')->nullable();
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
        Schema::dropIfExists('sub_galleries');
    }
};
