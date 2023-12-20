<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone_no',
        'age',
        'problem_des',
        'doctor_department_id',
        'doctor_id',
        'doctor_name',
        'doctor_department_name',
        'doctor_designation',

    ];
    public function doctor()
    {
        return $this->belongsTo(Doctors::class, 'doctor_id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'doctor_department_id');
    }
}
