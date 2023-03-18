<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->string('thambnail_image');
            $table->text('portfolio_title');
            $table->text('portfolio_desc')->nullable();
            $table->text('portfolio_slug');
            $table->string('project_name');
            $table->string('project_client')->nullable();
            $table->string('project_mode')->nullable();
            $table->string('location')->nullable();
            $table->string('fbLink')->nullable();
            $table->string('twLink')->nullable();
            $table->string('inLink')->nullable();
            $table->string('insLink')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
