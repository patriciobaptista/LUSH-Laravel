<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('carddetails', function (Blueprint $table) {
           $table->increments('id');
           $table->string('number');
           $table->string('bank');
           $table->string('owner');
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
     Schema::table("carddetails",function(Blueprint $table) {
       $table->dropForeign('carddetails_user_id_foreign');
     });
       Schema::dropIfExists('carddetails');
   }
}
