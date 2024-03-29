<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'coursecode';

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherid', 'teacherid');
    }
}
