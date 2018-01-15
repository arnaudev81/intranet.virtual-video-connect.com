<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealEstateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_estate_listings', function (Blueprint $table) {
            $table->unsignedInteger('listing_id');
            $table->string('reference');
            $table->string('mandate_number');
            $table->date('mandate_date');
            $table->unsignedTinyInteger('real_estate_type_id');
            $table->unsignedTinyInteger('real_estate_transaction_type_id');
            $table->unsignedTinyInteger('area');
            $table->string('area_unit');
            $table->unsignedTinyInteger('land_area');
            $table->string('land_area_unit');
            $table->date('availability_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_estate_listings');
    }
}
