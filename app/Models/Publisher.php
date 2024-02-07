<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
  public $table = 'publishers';
  use HasFactory;
  protected $fillable = [
    'name', 'description'
  ];
}
