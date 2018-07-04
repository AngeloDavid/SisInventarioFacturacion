<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cod',15)->unique();
            $table->string('cod2',15)->nullable();
            $table->string('name',100);            
            $table->string('photo')->nullable();    
            $table->decimal('pvb', 8, 2);   
            $table->decimal('cost', 8, 2);  
            $table->enum('type',['Servicio','Bien']);
            $table->enum('display',['UNI']);
            $table->string('notes',255)->nullable();  
            $table->boolean('enableSell');     
            $table->integer('cantMin')->nullable();  
           // $table->integer('cantIni')->nullable(); 
            $table->boolean('status'); 
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
        Schema::dropIfExists('products');
    }
}
