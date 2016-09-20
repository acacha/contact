<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('contactable');
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            $table->string('address')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('city')->nullable();
            $table->smallInteger('phonenumber')->nullable();
            $table->smallInteger('mobile')->nullable();
            $table->string('email', 254)->nullable();
            $table->timestamp('dateofbirth')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('maritalstatus')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
