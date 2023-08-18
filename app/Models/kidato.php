<?php

namespace App\Models;
use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kidato extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function student(){
        return $this->hasMany(Student::class);
    }

    public function subject(){
        return $this->hasMany(Subject::class);
    }

    public function book(){
        return $this->hasMany(Book::class);
    }
    public function exam(){
        return $this->hasMany(Exam::class);
    }
}
