<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripIncludesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('tripincludes', function (Blueprint $table) {
           $table->increments('id');
           $table->string('includes');
           $table->integer('id_product')->unsigned();
           $table->foreign('id_product')->references('id')->on('products');
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
     Schema::table("tripincludes",function(Blueprint $table) {
       $table->dropForeign('tripincludes_id_product_foreign');
     });
       Schema::dropIfExists('tripincludes');
   }
}
