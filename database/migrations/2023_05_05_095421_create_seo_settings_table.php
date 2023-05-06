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
        Schema::create('seo_settings', function (Blueprint $table) {
            $table->id();
            
            $table->string('home_page_seo_title')->nullable();
            $table->text('home_page_seo_description')->nullable();
            $table->string('home_page_seo_keywords')->nullable();

            $table->string('work_page_seo_title')->nullable();
            $table->text('work_page_seo_description')->nullable();
            $table->string('work_page_seo_keywords')->nullable();

            $table->string('agency_page_seo_title')->nullable();
            $table->text('agency_page_seo_description')->nullable();
            $table->string('agency_page_seo_keywords')->nullable();
            
            $table->string('blog_page_seo_title')->nullable();
            $table->text('blog_page_seo_description')->nullable();
            $table->string('blog_page_seo_keywords')->nullable();

            $table->string('service_page_seo_title')->nullable();
            $table->text('service_page_seo_description')->nullable();
            $table->string('service_page_seo_keywords')->nullable();

            $table->string('gallery_page_seo_title')->nullable();
            $table->text('gallery_page_seo_description')->nullable();
            $table->string('gallery_page_seo_keywords')->nullable();

            $table->string('career_page_seo_title')->nullable();
            $table->text('career_page_seo_description')->nullable();
            $table->string('career_page_seo_keywords')->nullable();

            $table->string('contact_page_seo_title')->nullable();
            $table->text('contact_page_seo_description')->nullable();
            $table->string('contact_page_seo_keywords')->nullable();

            $table->string('team_page_seo_title')->nullable();
            $table->text('team_page_seo_description')->nullable();
            $table->string('team_page_seo_keywords')->nullable();

            $table->string('training_page_seo_title')->nullable();
            $table->text('training_page_seo_description')->nullable();
            $table->string('training_page_seo_keywords')->nullable();

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
        Schema::dropIfExists('seo_settings');
    }
};
