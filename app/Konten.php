<?php

namespace App;
use App\konten;
use DataTables;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
  protected $table = 'konten';
  protected $fillable = ['konten','isi_konten','id_kategori'];

  //relasi tabel
  public function kategori(){
    return $this->belongsTo('App\kategori', 'id_kategori');
  }
}
