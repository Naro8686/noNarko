<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('slug')->unique()->nullable();

            $table->string('title')->nullable();
            $table->mediumText('desc')->nullable();
            $table->text('body')->nullable();
            $table->string('image')->nullable();

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
        Cache::forget('pages');
        Schema::dropIfExists('pages');
    }
}
