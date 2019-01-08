<?php

namespace App;
use App\kontak;
use DataTables;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
  protected $table = 'kontak';
  protected $fillable = ['id','alamat','no_tlp','email'];
}
