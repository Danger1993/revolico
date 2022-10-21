<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'type',
        'description',
    ];

    //Relacion uno a muchos con Images
    public function images(){
        return $this->hasMany(Image::class);
    }

    //Relacion uno a uno con Videos
    public function video(){
        return $this->hasOne(Video::class);
    }

    //Relacion muchos a muchos con Operations
    public function operations(){
        return $this->belongsToMany(Operation::class);
    }
}
