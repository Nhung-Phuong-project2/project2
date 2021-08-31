<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookInforTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_infor', function(Blueprint $table){
            $table -> primary(['maTG','ma_sach']);
            $table -> foreignId('maTG') -> constrained('author');
            $table -> foreignId('ma_sach') -> constrained('book');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_infor');
    }
}
