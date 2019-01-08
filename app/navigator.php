<?php

namespace App;
use App\navigator;
use DataTables;
use Illuminate\Database\Eloquent\Model;

class navigator extends Model
{
  protected $table = 'navigator';
  protected $fillable = ['nama','link'];
}
