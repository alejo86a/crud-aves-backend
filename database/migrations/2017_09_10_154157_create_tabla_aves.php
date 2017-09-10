<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablaAves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tont_aves', function(Blueprint $table){
            $table->string('CDAVE',5)->primary();
            $table->string('DSNOMBRE_COMUN',100)->nullable();
            $table->string('DSNOMBRE_CIENTIFICO',200)->nullable();
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
        Schema::drop('tont_aves');
    }
}
