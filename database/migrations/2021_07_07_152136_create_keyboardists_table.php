<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeyboardistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keyboardists', function (Blueprint $table) {
            $table->increments('KeyboardistID')->startingValue(736);
            $table->string('Firstname');
            $table->string('Middlename');
            $table->string('Lastname');
            $table->string('Altar');
            $table->string('Gender')->default('Male');
            $table->integer('ContactNo')->nullable();
            $table->string('WPastor');
            $table->integer('PastorNo')->nullable();
            $table->string('Region')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keyboardists');
    }
}
