<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Relacion uno a muchos inversa con Products
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
