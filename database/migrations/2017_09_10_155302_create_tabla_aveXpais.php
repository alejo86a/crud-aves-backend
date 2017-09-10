<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaAveXpais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tont_aves_paises', function(Blueprint $table){
           $table->increments('id');
           $table->string('CDPAIS', 3);
           $table->string('CDAVE', 5);
           $table->timestamps();
           //foreign keys
           $table->foreign('CDPAIS')->references('CDPAIS')->on('tont_paises');
           $table->foreign('CDAVE')->references('CDAVE')->on('tont_aves');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tont_aves_paises');
    }
}
