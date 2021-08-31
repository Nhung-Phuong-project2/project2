<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarian', function(Blueprint $table){
            $table -> id();
            $table -> string('name',30);
            $table -> tinyInteger('gender');
            $table -> string('phone',15) ->unique();
            $table -> string('email',50) -> unique();
            $table -> date('dob');
            $table -> string('address',255);
            $table -> string('avatar',255);
            $table -> string('password',32);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librarian');
    }
}
