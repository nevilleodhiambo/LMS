<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'idno',
        'gender',
        'religion',
        'dob',
        'photo',
        'signature',
        'department_id',
        'designation',
        'qualification',
        'subject_id',
        'jsd',
        'jobno',
        'salary',
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
}
