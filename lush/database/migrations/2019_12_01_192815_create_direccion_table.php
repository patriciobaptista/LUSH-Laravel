<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('direccion', function (Blueprint $table) {
           $table->increments('id');
           $table->string('street');
           $table->integer('apartment');
           $table->integer('user_id')->unsigned();
           $table->foreign('user_id')->references('id')->on('users');
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
     Schema::table("direccion",function(Blueprint $table) {
       $table->dropForeign('direccion_user_id_foreign');
     });
       Schema::dropIfExists('direccion');
   }
}
