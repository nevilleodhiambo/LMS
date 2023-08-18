<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcount extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_id',
        'number',
        'date'
    ];

    public function book(){
        return $this->belongsTo(Book::class, 'name_id');
    }
}
