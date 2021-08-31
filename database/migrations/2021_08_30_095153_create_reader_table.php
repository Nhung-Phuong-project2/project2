<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reader',function(Blueprint $table){
            $table -> id();
            $table -> string('name',20);
            $table -> string('phone',15);
            $table -> string('email',50);
            $table -> string('address',255);
            $table -> unsignedBigInteger('id_borrow_ticket');
            $table -> foreign('id_borrow_ticket') -> references('id') -> on('borrow_ticket');
        }); 
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reader');
    }
}
