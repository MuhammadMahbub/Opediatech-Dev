<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_category_id');
            $table->string('service_title');
            $table->string('service_image');
            $table->longText('service_desc');
            $table->text('service_type');
            $table->text('platform_type');
            $table->text('operating_system');
            $table->text('project_complete');
            $table->string('work_experience');
            $table->string('total_clients');
            $table->string('color_code');
            $table->integer('status')->default(1)->comment('0=inactive, 1=active');
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
        Schema::dropIfExists('services');
    }
}
