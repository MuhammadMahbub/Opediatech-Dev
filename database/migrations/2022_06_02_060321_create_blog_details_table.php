<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_category_id');
            $table->text("main_title");
            $table->text("main_title_desc");
            $table->text("blog_title");
            $table->text("blog__title_desc");
            $table->text("quote_title");
            $table->text("quote_desc");
            $table->text("details_title");
            $table->text("details_desc");
            $table->text("image");
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
        Schema::dropIfExists('blog_details');
    }
}
