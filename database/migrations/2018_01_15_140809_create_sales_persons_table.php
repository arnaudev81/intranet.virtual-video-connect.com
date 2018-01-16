<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_persons', function (Blueprint $table) {
            $table->foreign('id')->references('id')->on('referentials')->onDelete('cascade');
            $table->integer('customer_id');
            $table->integer('agency_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('legal_name');
   w     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_persons');
    }
}
