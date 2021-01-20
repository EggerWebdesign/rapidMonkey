<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // blog table
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->longText('body');
            $table->string('nav_title');
            $table->string('subtitle');
            $table->string('slug')->unique();
            $table->string('status')->default('published'); // published, unpublished, draft or deleted
            $table->date('starttime')->nullable(); // On the day the page / post is published
            $table->date('endtime')->nullable(); // On the day the page / post becomes unpublished
            $table->string('type'); // Post or Page
            $table->boolean('comment_status')->default(1); // 1 = comment on, 0 = comment off
            $table->longText('abstract');
            $table->string('meta_title');
            $table->string('author_name')->nullable(); // Author Name for the Meta
            $table->string('author_email')->nullable(); //Author E-Mail for the Meta
            $table->text('keywords');
            $table->text('description');
            $table->boolean('noindex')->default(0);
            $table->boolean('nofollow')->default(0);
            $table->string('og_title');
            $table->text('og_description');
            $table->string('twitter_card')->default('summary'); // summary, summary_large_image, app or player
            $table->string('twitter_title');
            $table->text('twitter_description');
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
        // drop blog table
        Schema::drop('posts');

    }
}
