<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampuModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->string('clave_sep')->nullable(false);
            $table->string('clave_plantel')->nullable(false);
            $table->string('phone_office',10)->nullable(false);
            $table->string('mobile_phone',10)->nullable(false);

            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')->references('id')->on('address');

            $table->integer('representative_id')->unsigned();
            $table->foreign('representative_id')->references('id')->on('representatives');

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
        Schema::dropIfExists('campus');
    }
}
