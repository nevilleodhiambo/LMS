<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'class_id',
        'name',
        'price',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function kidato(){
        return $this->belongsTo(kidato::class, 'class_id');
    }
    public function bcount(){
        return $this->hasMany(Bcount::class);
    }
}
