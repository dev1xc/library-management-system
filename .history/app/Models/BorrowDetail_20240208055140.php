<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorrowDetail extends Model
{
    public $table = "borrow_details";
    use HasFactory;
    protected $fillable = [];
}
