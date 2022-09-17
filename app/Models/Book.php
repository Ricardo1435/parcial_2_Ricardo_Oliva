<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "book";
    protected $guarded = ['id'];
    protected $fillable = ['isbn','name','date', 'edition','description','created_at','updated_at'];
}
