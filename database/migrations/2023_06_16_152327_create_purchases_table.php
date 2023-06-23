<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("ammount");
            $table->integer("storages_id")->unsigned();
            $table->foreign("storages_id")->references("id")->on("storages")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("item_id")->unsigned();
            $table->foreign("item_id")->references("id")->on("items")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("manager_id")->unsigned();
            $table->foreign("manager_id")->references("id")->on("users")->onDelete("cascade")->onUpdate("cascade");
            $table->integer("clients_id")->unsigned();
            $table->foreign("clients_id")->references("id")->on("clients")->onDelete("cascade")->onUpdate("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}
