<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_listings', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->string('reference');
            $table->string('police_number');
            $table->string('brand');
            $table->string('model');
            $table->string('version');
            $table->string('mine_type');
            $table->string('color');
            $table->date('model_year');
            $table->date('first_run');
            $table->string('currency');
            $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule_listings');
    }
}
