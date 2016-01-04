<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
  protected $fillable = ['email','name', 'color', 'pet','nickname','shape','pet_count','opt_in','how_hear'];
  protected $guarded = ['id', 'created_at', 'updated_at'];
}
