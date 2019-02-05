<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test extends Model
{
  protected $fillable = ['project', 'beschrijving'];
  public $timestamps = false; 
}
