<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function Departments()
    {
        $departments = Department::latest()->get();
        return view('backend.admin.department',compact('departments'));

    }
    public function AddDepartment()
    {
        return view('backend.admin.adddepartment');

    }
    public function StoreDepartment(Request $request)
    {
        $request->validate([
            'department_name' => 'required|unique:departments'
        ]);
        department::insert([
            'department_name' => $request->department_name,
            'slug' => strtolower(str_replace(' ','-', $request->department_name))
        ]);
        return redirect()->route('departments')->with('message','department Added Successfully!');
    }
    public function EditDepartment($id)
    {
        /* department info id wise */
        $department_info = department::findOrFail($id);
        return view('backend.admin.editdepartment',compact('department_info'));

    }
    public function UpdateDepartment(Request $request)
    {
        $department_id = $request->department_id;
        $request->validate([
            'department_name' => 'required|unique:departments'
        ]);
        department::findOrFail($department_id)->update([
            'department_name' => $request->department_name,
            'slug' => strtolower(str_replace(' ','-', $request->department_name))
        ]);
        return redirect()->route('departments')->with('message','department updated Successfully!');
    }
    public function DeleteDepartment($id)
    {
        /* department info id wise */
        Department::findOrFail($id)->delete();
        return redirect()->route('departments')->with('message','department Deleted Successfully!');

    }
}
