<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            //The increments method creates an auto-incrementing UNSIGNED INTEGER 
            //equivalent column as a primary key:
            $table->increments('id');
            //The string method creates a VARCHAR equivalent column of the given length:
            $table->string('name',50);
            $table->string('email',200);
            $table->string('subject',200);
            //The text method creates a TEXT equivalent column
            $table->text('message');
            //The enum method creates a ENUM equivalent column with the given valid values
            $table->enum('status',['solved', 'unsolved'])->default('unsolved');
            $table->string('ip', 100);
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
        Schema::dropIfExists('feedbacks');
    }
}
