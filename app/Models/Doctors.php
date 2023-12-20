<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_name',
        'patient_email',
        'patient_phone_no',
        'problem_des',
        'doctor_department_name',
        'doctor_name',
        'doctor_img',
        'doctor_designation',
    ];
    public function appointments()
    {
        return $this->hasMany(Appointments::class, 'doctor_id');
    }


}
