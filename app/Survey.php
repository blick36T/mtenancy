<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $fillable = ['email','name', 'color', 'pet'];
  protected $guarded = ['id', 'created_at', 'updated_at'];
}
