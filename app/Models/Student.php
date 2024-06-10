<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\teacherp;
class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'StudentsName',
        'age',
        'image',
        'Subject',
    ];
        // public function getActiveStatus()
    // {
    //     return $this->active ? 'Yes' : 'No';
    // }

}
