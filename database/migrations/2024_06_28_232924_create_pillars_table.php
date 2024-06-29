<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePillarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pillars', function (Blueprint $table) {
            $table->id();
            $table->string('fname',100)->nullable();
            $table->string('lname',100)->nullable();
            $table->string('position',200)->nullable();
            $table->text('biography')->nullable();
            $table->string('image',200)->default('no-image.png');
            $table->unsignedBigInteger('insert_user_id')->nullable();
            $table->foreign('insert_user_id')->on('users')->references('id')->onDelete('cascade');
            $table->unsignedBigInteger('festival_id')->nullable();
            $table->foreign('festival_id')->on('festivals')->references('id')->onDelete('cascade');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('pillars');
    }
}
