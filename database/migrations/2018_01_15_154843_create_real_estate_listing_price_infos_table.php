<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateListingPriceInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_listing_price_infos', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('listings')->onDelete('cascade');
            $table->string('currency',3);
            $table->unsignedInteger('price');
            $table->unsignedInteger('hidden_price');
            $table->float('rental_cc');
            $table->float('rental_ht');
            $table->string('rental_periodicity');
            $table->float('charge');
            $table->string('charge_type');
            $table->float('security_deposit');
            $table->unsignedInteger('bouquet');
            $table->float('rent');
            $table->unsignedTinyInteger('man_age');
            $table->unsignedTinyInteger('woman_age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_listing_price_infos');
    }
}
