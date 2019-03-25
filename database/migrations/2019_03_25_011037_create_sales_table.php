<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->Increments('id');
            $table->double('total');
            $table->integer('client_id')->unsigned();
            $table->integer('subsidiary_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('subsidiary_id')->references('id')->on('subsidiaries')->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
}
