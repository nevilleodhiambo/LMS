<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'class_id',
    ];

    public function kidato(){
        return $this->belongsTo(kidato::class, 'class_id');
    }
}
