<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Constraint\Constraint;

class CreateProject2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //LIBRARIAN
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

        // BOOK
        Schema::create('author', function (Blueprint $table) {
            $table->id();
            $table -> string('name',50);
            $table -> string('address',255);
            $table -> string('details',255);
        });

        Schema::create('book_type',function(Blueprint $table){
            $table -> id();
            $table -> string('name',20);
        });

        Schema::create('nxb',function(Blueprint $table){
            $table -> id();
            $table -> string('name',20);
            $table -> date('ngay_xuat_ban');
        });

        Schema::create('book',function(Blueprint $table){
            $table -> id();
            $table -> string('name',100);
            $table -> string('avatar',255);
            $table -> string('details',255);
            $table -> unsignedBigInteger('id_author');
            $table -> unsignedBigInteger('id_type');
            $table -> unsignedBigInteger('id_nxb');
            $table -> foreign('id_author') -> references('id') -> on('author');
            $table -> foreign('id_type') -> references('id') -> on('book_type');
            $table -> foreign('id_nxb') -> references('id') ->on('nxb');
        });

        Schema::create('book_infor', function(Blueprint $table){
            $table -> primary(['maTG','ma_sach']);
            $table -> foreignId('maTG') -> constrained('author');
            $table -> foreignId('ma_sach') -> constrained('book');
        });

        Schema::create('borrow_ticket',function(Blueprint $table){
            $table -> id();
            $table -> date('ngay_muon_tra');
            $table -> date('ngay_het_han');
        });


        //READER
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
      Schema::dropIfExists('librarian');
        Schema::dropIfExists('author');
        Schema::dropIfExists('book_type');
        Schema::dropIfExists('nxb');
        Schema::dropIfExists('book');
        Schema::dropIfExists('borrow_ticket');
        Schema::dropIfExists('reader'); 
        Schema::dropIfExists('book_infor');
    }
}
