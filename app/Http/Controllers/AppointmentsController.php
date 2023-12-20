<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Department;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AppointmentsController extends Controller
{
    public function AddAppointments()
    {
        return view('frontend.addapointment');
    }

    public function StoreAppointments(Request $request)
    {
        try {

            $appointment = new Appointments([
                'patient_name' => $request->patient_name,
                'patient_email' => $request->patient_email,
                'patient_phone_no' => $request->patient_phone_no,
                'age' => $request->age,
                'problem_des' => $request->problem_des,
                'doctor_id' => $request->doctor_id,
                'doctor_designation' => $request->doctor_designation,
                'doctor_department_name'=> $request->doctor_department_name,
                'doctor_name'=> $request->doctor_name,


            ]);

            // Load related data for doctor and department
            $appointment->load(['doctor', 'department']);

            // Conditional check for the presence of a doctor
            if ($appointment && $appointment->doctor) {
                $doctorName = $appointment->doctor->doctor_name;
            } else {
                $doctorName = "No Doctor Assigned";
            }

            // Save the appointment to the database
            $appointment->save();

            return redirect()->route('frontendindex')->with('message', 'Appointment Submitted Successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
    public function AppointmentsIndex()
    {  $appointments = Appointments::latest()->get();
        return view('backend.admin.appointments',compact('appointments'));

    }


}
