<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function BookDetail () {

        return $this->belongsTo(BookDetail::class);
    }

    public function Category(){

        return $this->belongsTo(Category::class);
    }
}
