<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
  protected $table = "user";
  protected $primaryKey = 'id_user';
  public $incrementing = false;
  public $timestamps = false;
  protected $fillable = [
    "nama_user",	
    "username",
    "password",
    "level",
    "inisial",
    "status"
  ];
}
