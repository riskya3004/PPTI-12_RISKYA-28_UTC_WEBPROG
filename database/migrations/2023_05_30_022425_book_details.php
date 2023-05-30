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
        Schema::create('book_details', function (Blueprint $table) {
            $table->id();
            // $table->string('books_details_id');
            $table->string('categories_id');
            $table->string('author');
            $table->string('post_title');
            $table->string('post_description');
            $table->string('image');
            $table->string('date');
            $table->string('reading_time');
            $table->string('body_description');
            $table->string('link_social_media');
            $table->string('link_video');
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
        Schema::dropIfExists('book_details');
    }
};
