<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeListingNumericsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_listing_numerics', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->unsignedTinyInteger('fiscal_power');
            $table->unsignedInteger('real_power');
            $table->unsignedInteger('cylinder');
            $table->unsignedTinyInteger('place_number');
            $table->unsignedTinyInteger('door_number');
            $table->unsignedMediumInteger('mileage');
            $table->string('mileage_unit');
            $table->unsignedInteger('weight');
            $table->unsignedInteger('ptac');
            $table->unsignedInteger('ptra');
            $table->unsignedInteger('payload');
            $table->unsignedInteger('length');
            $table->unsignedInteger('width');
            $table->unsignedInteger('wheelbase');
            $table->unsignedInteger('height');
            $table->unsignedInteger('useful_volume');
            $table->unsignedInteger('gear_ratio_number');
            $table->unsignedInteger('co2_emission');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule_listing_numerics');
    }
}
