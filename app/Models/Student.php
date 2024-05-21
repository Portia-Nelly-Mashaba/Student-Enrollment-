<?php

namespace App\Models;

use App\Models\StudentDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function studentDetail()
    {
        return $this->hasOne(StudentDetail::class, 'student_id', 'id');
    }
}
