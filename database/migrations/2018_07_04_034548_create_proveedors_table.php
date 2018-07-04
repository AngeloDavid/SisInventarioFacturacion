<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ruc',15)->unique();
            $table->string('name',100);            
            $table->string('logo')->nullable();
            $table->string('email',100);
            $table->string('address',150)->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->enum('type',['Natural','Juridica']);
            $table->enum('origin',['Nacional','Extranjero']);
            $table->string('phone1',20);
            $table->string('phone2',20)->nullable();
            $table->string('contact')->nullable();
            $table->string('notes',255)->nullable(); 
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
        Schema::dropIfExists('proveedors');
    }
}
