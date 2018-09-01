<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    //
   protected $table='LoaiTin';
   
     public function theloai(){

    	return $this->belongsTo('App\TheLoai','idTheLoai','id');
    }

    //1 tin tức có nhiều tin
     public function tintuc(){

    	return $this->hasMany('App\TinTuc','idLoaiTin','id');
    }
}
