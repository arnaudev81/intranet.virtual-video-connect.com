<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateListingBoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_listing_bools', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->boolean('furnished');
            $table->boolean('brand_new');
            $table->boolean('separate_restroom');
            $table->boolean('balcony');
            $table->boolean('elevator');
            $table->boolean('cellar');
            $table->boolean('digicod');
            $table->boolean('intercom');
            $table->boolean('keeper');
            $table->boolean('terrace');
            $table->boolean('alarm');
            $table->boolean('air_conditioning');
            $table->boolean('swimming_pool');
            $table->boolean('exclusiveness');
            $table->boolean('heart_stroke');
            $table->boolean('recent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_listing_bools');
    }
}
