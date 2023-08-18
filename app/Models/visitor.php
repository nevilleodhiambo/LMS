<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'purpose_id',
        'email',
        'phone',
        'vdate',
        'add',
        'fdate'
    ];

    public function purpose(){
        return $this->belongsTo(Purpose::class, 'purpose_id');
    }
}
