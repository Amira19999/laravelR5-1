<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'StudentsName',
        'age',
        'image',
    ];
        // public function getActiveStatus()
    // {
    //     return $this->active ? 'Yes' : 'No';
    // }

}
