<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoples', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('mothers_lastname',50);
            $table->string('nss',12);
            $table->string('curp',18);
            $table->string('rfc',18);

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('address');

            $table->integer('campus_id')->unsigned();
            $table->foreign('campus_id')->references('id')->on('campus');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->boolean('is_active')->default(1);

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
        Schema::dropIfExists('people');
    }
}
