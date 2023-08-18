<?php

namespace App\Models;

use App\Models\kidato;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'religion',
        'date',
        'upi',
        'filename',
        'national',
        'mname',
        'memail',
        'mnumber',
        'fname',
        'femail',
        'fnumber',
        'gname',
        'gemail',
        'gnumber',
        'raddress',
        'paddress',
        'adm',
        'class_id',
        'stream_id',
    ];

    public function stream(){
        return $this->belongsTo(Stream::class);
    }

    public function kidato(){
        return $this->belongsTo(kidato::class, 'class_id');
    }
}
