@extends('backend.layouts.includes.master')

@section('page_title')
    Add Doctors
@endsection

@section('content')
<div class="card">
    <div class="container mt-5">
        <h3 class="text-center mb-4">Add Doctor</h3>

        <form action="{{ route('storedoctors') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="doctordepartment">Doctor Department:</label>
                <select class="form-control" id="doctor_department_id" name="doctor_department_id" required>
                    <option value="">Select a department</option>
                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                    @endforeach
                </select>
            </div><br>

            <div class="form-group">
                <label for="doctorImage">Doctor Image:</label>
                <input type="file" class="form-control-file" id="doctor_img" name="doctor_img" accept="image/*" required>
            </div><br>

            <div class="form-group">
                <label for="doctorName">Doctor Name:</label>
                <input type="text" class="form-control" id="doctor_name" name="doctor_name" required>
            </div><br>
            <div class="form-group">
                <label for="doctorDesignation">Doctor Designation:</label>
                <input type="text" class="form-control" id="doctor_designation" name="doctor_designation">
            </div><br>
            <div class="form-group">
                <label for="doctorDescription">Doctor Short Description:</label>
                <textarea class="form-control" id="doctor_short_des" name="doctor_short_des" required></textarea>
            </div><br>

            <div class="form-group">
                <label for="doctorLongDescription">Doctor Long Description:</label>
                <textarea class="form-control" id="doctor_long_des" name="doctor_long_des"  required></textarea>
            </div><br>


            <div class="form-group">
                <label for="doctor_visit_Price">Doctor Visit Price:</label>
                <input type="number" class="form-control" id="doctor_visit_price" name="doctor_visit_price"  required>
            </div><br>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">Add Doctor</button>
            </div>
        </form>
    </div>
</div>
@endsection
