<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title',200)->nullable()->unique();
            $table->string('description',200)->nullable();
            $table->text('content')->nullable();
            $table->unsignedBigInteger('festival_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('festival_id')->on('festivals')->references('id')->onDelete('cascade');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade');
            $table->string('date_fa')->nullable();
            $table->string('time_fa')->nullable();
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
        Schema::dropIfExists('news');
    }
}
