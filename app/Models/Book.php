<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Type;
use App\Models\NXB;

use Illuminate\Database\Connection;


class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    public $timestamps = false;
    protected $fillable =[
        'id',
        'name',
        'avatar',
        'details',
        'id_author',
        'id_type',
        'id_nxb',
    ];
    //Mối liên hệ 1 sách thuộc 1 tác giả
    public function author(){
        return $this->belongsTo(Author::class,'id_author','id');
    }
    //Mối liên hệ 1 sách thuộc 1 NXB
    public function nxb(){
        return $this->belongsTo(NXB::class,'id_nxb','id');
    }
    //Mối liên hệ 1 sách thuộc 1 loại
    public function type(){
        return $this->belongsTo(Type::class,'id_type','id');
    }
} 


