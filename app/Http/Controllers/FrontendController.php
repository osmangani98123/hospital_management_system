<?php

namespace App\Http\Controllers;
use App\Models\Appointments;
use App\Http\Controllers\AppointmentsController;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Department;
use App\Doctors;
use App\Appointments;



class FrontendController extends Controller
{
    public function FrontendIndex()
    {
        return view('frontend.index');
    }
   
}
