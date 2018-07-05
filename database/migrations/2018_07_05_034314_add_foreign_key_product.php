<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('id_brand')->unsigned()->after('cantMin');
            $table->foreign('id_brand')->references('id')->on('brands');
            $table->integer('id_category')->nullable()->unsigned()->after('cantMin');
            $table->foreign('id_category')->references('id')->on('categories');
            $table->integer('id_company')->nullable()->unsigned()->after('cantMin');
            $table->foreign('id_company')->references('id')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('id_role');
            $table->dropColumn('id_role');   
            $table->dropForeign('id_category'); 
            $table->dropColumn('id_category');    
            $table->dropForeign('id_company');     
            $table->dropColumn('id_company');            
        });
    }
}
