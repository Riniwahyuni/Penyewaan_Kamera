<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kamera extends Model
{
     protected $table = 'tbl_kamera';
    protected $fillable = ['nik','nama','alamat','nama_kamera','harga'];
}
