<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('course_name');
            $table->string('duration')->nullable();
            $table->string('classes')->nullable();
            $table->string('pre_requirement')->nullable();
            $table->string('system_config')->nullable();
            $table->string('course_fee_online');
            $table->string('course_fee_offline');
            $table->string('youtube_link')->nullable();
            $table->string('Featured_img');
            $table->text('description')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('trainings');
    }
}
