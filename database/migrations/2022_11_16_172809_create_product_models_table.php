<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $tbl) {
            $tbl->increments("id");
            $tbl->string("pname");
            $tbl->string("pdes")->nullable();
            $tbl->integer("barcode");
            $tbl->integer("status")->comment("1 for Active 2 for Inactive");
            $tbl->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
};
