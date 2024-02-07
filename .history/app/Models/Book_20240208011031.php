<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $table = 'categories';
    use HasFactory;
    protected $fillable = [
      'name','description','author','price','inventory','id_category','language','page','book_cover','size','id_publisher','image',
    ];
}
