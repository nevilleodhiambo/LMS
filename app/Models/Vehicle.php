<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable  = [
        'regno',
        'capacity',
        'employee_id',
        'conductor_id'
    ];
    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
