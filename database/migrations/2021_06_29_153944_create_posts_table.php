<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('seoTitle')->nullable();
            $table->mediumText('seoDescription')->nullable();
            $table->mediumText('seoKeywords')->nullable();
            $table->string('seoText')->nullable();
            $table->mediumText('seoBody')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
