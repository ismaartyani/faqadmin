<?php

namespace App;
use App\Kategori;
use DataTables;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
  protected $table = 'kategori';
  protected $fillable = ['nama','judul'];

 //relasi tabel
    public function konten(){
    return $this->hasMany('App\konten' , 'id_kategori');
 }
}
