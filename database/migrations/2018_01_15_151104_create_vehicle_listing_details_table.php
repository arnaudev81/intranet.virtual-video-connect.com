<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleListingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_listing_details', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('listings')->onDelete('cascade');
            $table->string('category',60);
            $table->string('type');
            $table->string('energy',40);
            $table->string('gear_case',40);
            $table->json('option');
            $table->boolean('first_owner');
            $table->string('guarantee',70);
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
