<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateListingNumericsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_listing_numerics', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('listings')->onDelete('cascade');
            $table->unsignedTinyInteger('room');
            $table->unsignedTinyInteger('bedroom');
            $table->unsignedTinyInteger('bathroom');
            $table->unsignedTinyInteger('half_bathroom');
            $table->unsignedTinyInteger('restroom');
            $table->unsignedTinyInteger('balcony');
            $table->unsignedTinyInteger('park_lot');
            $table->unsignedTinyInteger('closed_park_lot');
            $table->unsignedTinyInteger('floor');
            $table->unsignedTinyInteger('floor_number');
            $table->date('year_build');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_listing_numerics');
    }
}
