<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeeksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weeks', function (Blueprint $table) {
            // creating columns for the weeks table
            $table->id();
            $table->integer('week'); //creates a column named week and has a type of integer
            $table->foreignId('user_id'); // creates a foreign key that reference a users id
            $table->timestamps(); // creates a way to keep track when things are created / updated
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weeks');
    }
}
