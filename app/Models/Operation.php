<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    //Relacion un a muchos inversa con Users
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relacion muchos a muchos con Products
    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
