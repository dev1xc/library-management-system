<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLanguage extends Model
{
  public $table = "book-language";
  use HasFactory;
  protected $fillable = [
    "name","description",
  ];
}
