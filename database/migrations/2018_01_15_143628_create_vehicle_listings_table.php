<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_listings', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('listings')->onDelete('cascade');
            $table->string('reference',50);
            $table->string('police_number',30);
            $table->string('brand',20);
            $table->string('model',70);
            $table->string('version',150);
            $table->string('mine_type',20);
            $table->string('color',60);
            $table->date('model_year');
            $table->date('first_run');
            $table->string('currency',3);
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
