<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculeListingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicule_listing_details', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->string('category');
            $table->string('type');
            $table->string('energy');
            $table->string('gear_case');
            $table->string('facilities');
            $table->string('first_owner');
            $table->string('guarantee');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicule_listing_details');
    }
}
