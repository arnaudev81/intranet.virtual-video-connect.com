<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referentials', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('item_type', ['resseller', 'user','customer','agency','sale_person','listing','picture']);
            $table->timestamps();
            $table->json('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referentials');
    }
}
