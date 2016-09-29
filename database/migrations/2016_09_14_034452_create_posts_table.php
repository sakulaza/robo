<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('subtitle');
            $table->text('content_raw');
            $table->text('content_html');
            $table->string('page_image');
            $table->string('meta_description');
            $table->boolean('is_draft');
            $table->string('layout');
            $table->timestamps();
            $table->timestamp('published_at')->index()->nullable();
           // $table->string('subtitle')->after('title');
           //$table->renameColumn('content', 'content_raw');
            //$table->text('content_html')->after('content');
            //$table->string('page_image')->after('content_html');
            //$table->string('meta_description')->after('page_image');
            //$table->boolean('is_draft')->after('meta_description');
            //$table->string('layout')->after('is_draft')->default('blog.layouts.post');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
