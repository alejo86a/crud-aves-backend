<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaDePaises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tont_paises', function (Blueprint $table){
            $table->string('CDPAIS',3)->primary();
            $table->string('DSNOMBRE',100)->nullable();
            $table->string('CDZONA',3)->nullable();
            
            //foreign keys
            $table->foreign('CDZONA')->references('CDZONA')->on('tont_zonas');
            
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
        Schema::drop('tont_paises');
    }
}
