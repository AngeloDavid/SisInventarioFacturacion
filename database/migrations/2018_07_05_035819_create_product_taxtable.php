<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTaxtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_taxes', function(Blueprint $table)
        {
            $table->integer('id_product')->unsigned()->nullable();
            $table->foreign('id_product')->references('id')
                    ->on('products')->onDelete('cascade');

            $table->integer('id_tax')->unsigned()->nullable();
            $table->foreign('id_tax')->references('id')
                    ->on('taxes')->onDelete('cascade');

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
        Schema::dropIfExists('products_taxes');
    }
}
