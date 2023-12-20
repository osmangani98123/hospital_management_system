<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class DoctorsController extends Controller
{
    public function DoctorsIndex()
    {
        $doctors = Doctors::latest()->get();
        return view('backend.admin.alldoctors', compact('doctors'));

    }
    public function Adddoctors()
    {
        $departments = Department::latest()->get();

        return view('backend.admin.adddoctors', compact('departments'));

    }

    public function StoreDoctors(Request $request)
    {
        try {
            $request->validate([
                'doctor_name' => 'required|unique:doctors',
                'doctor_visit_price' => 'required',
                'doctor_short_des' => 'required',
                'doctor_long_des' => 'required',
                'doctor_img' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:4048',
                'doctor_department_id' => 'required',
                'doctor_designation' => 'required',
            ]);

            $image = $request->file('doctor_img');
            $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $img_name);
            $img_url = 'upload/' . $img_name;

            $doctor_department_id = $request->doctor_department_id;
            $doctor_department_name = Department::where('id', $doctor_department_id)->value('department_name');
            $doctor_designation = $request->doctor_designation; // Retrieve the doctor_designation from the request
            Doctors::insert([
                'doctor_name' => $request->doctor_name,
                'doctor_short_des' => $request->doctor_short_des,
                'doctor_long_des' => $request->doctor_long_des,
                'doctor_visit_price' => $request->doctor_visit_price,
                'doctor_department_name' => $doctor_department_name,
                'doctor_department_id' => $doctor_department_id,
                'doctor_designation' => $doctor_designation,
                'doctor_img' => $img_url,
                'slug' => strtolower(str_replace(' ', '-', $request->doctor_name)),
            ]);

            Department::where('id', $doctor_department_id)->increment('doctor_count', 1);

            return redirect()->route('alldoctors')->with('message', 'Doctor Added Successfully!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }

    public function EditDoctors($id)
    {
        $doctorsinfo = Doctors::findOrFail($id);
        return view('backend.admin.editdoctors', compact('doctorsinfo'));

    }
    public function UpdateDoctors(Request $request)
    {
        $doctorid = $request->id;
        $request->validate([
            'doctor_name' => 'required|unique:doctors',
            'doctor_visit_price' => 'required',
            'doctor_quantity' => 'required',
            'doctor_short_des' => 'required',
            'doctor_long_des' => 'required',
        ]);
        Doctors::findOrFail($doctorid)->update([

            'doctor_name' => $request->doctor_name,
            'doctor_short_des' => $request->doctor_short_des,
            'doctor_long_des' => $request->doctor_long_des,
            'doctor_visit_price' => $request->doctor_visit_price,
            'doctor_quantity' => $request->doctor_quantity,

            'slug' => strtolower(str_replace(' ', '-', $request->doctor_name)),

        ]);
        return redirect()->route('alldoctors')->with('message', 'doctor Updated Successfully!');

    }
    public function DeleteDoctors($id)
    {

        $department_id = Doctors::where('id', $id)->value('doctor_department_id');
        Doctors::findOrFail($id)->delete();
        department::where('id', $department_id)->decrement('doctor_count', 1);

        return redirect()->route('alldoctors')->with('message', 'doctor Deleted Successfully!');



    }
    public function EditDoctorsImg($id)
    {
        $doctorinfo = Doctors::findOrFail($id);

        return view('backend.admin.editdoctorsimg', compact('doctorinfo'));

    }


    public function UpdateDoctorsImg(Request $request)
    {


        $request->validate([

            'doctor_img' => 'required|image|mimes:webp,jpeg,png,jpg,gif,svg|max:4048',

        ]);

        $id = $request->id;
        $image = $request->file('doctor_img');
        $img_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $request->doctor_img->move(public_path('upload'), $img_name);
        $img_url = 'upload/' . $img_name;


        Doctors::findOrFail($id)->update([
            'doctor_img' => $img_url,
        ]);

        return redirect()->route('alldoctors')->with('message', 'Image Updated Successfully!');

    }

    public function Viewdoctors($id)
    {
        $doctorsinfo = Doctors::findOrFail($id);
        return view('backend.admin.viewdoctors', compact('doctorsinfo'));

    }



}

