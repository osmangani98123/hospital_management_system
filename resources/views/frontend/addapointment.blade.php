@extends('frontend.layouts.includes.master')
@php
    $departments = App\Models\Department::get();
    $doctors = App\Models\Doctors::latest()->get();
@endphp


@section('page_title')
    Add Appointment
@endsection

@section('content')
    <style>
        .card {
            color: #565656;
            font-weight: bold;

        }

        .para {
            color: rgb(131, 0, 120);
        }

        .form-control {
            color: rgb(131, 0, 120);
        }

        #warning {
            color: rgb(247, 58, 0);
        }

        /* Default button styles */

        /* Button hover styles */
        /* Button hover styles */
        .btn-success:hover {
            background-color: #dc3545;
            /* Change to your preferred warning color */
            transform: scale(1.25);
            transition: all 0.5s;
            /* Slightly increase the button size on hover */
        }
    </style>
    <div class="card">
        <div class="container mt-5">
            <h3 class="text-center mb-4"><strong>Add Appointment</strong></h3>

            <form action="{{ route('storeappointments') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="patientName">Patient Name:</label>
                    <input type="text" class="form-control" id="patient_name" name="patient_name" required>
                </div><br>

                <div class="form-group">
                    <label for="patientEmail">Patient Email:</label>
                    <input type="email" class="form-control" id="patient_email" name="patient_email" required>
                </div><br>

                <div class="form-group">
                    <label for="patientPhone">Patient Phone Number:</label>
                    <input type="text" class="form-control" id="patient_phone_no" name="patient_phone_no" required>
                </div><br>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" class="form-control" id="age" name="age" required>
                </div><br>

                <div class="form-group">
                    <label for="problemDescription">Problem Description:</label>
                    <textarea class="form-control" id="problem_des" name="problem_des" rows="4" required></textarea>
                </div><br>
                <hr>
                <div class="para">
                    <p id="warning"> You can avoid this section just your name and phone number is enough and our Cutomer
                        Service Manager will call you soon. </p>

                    <div class="form-group">
                        <label for="doctorDepartment">Doctor's Department:</label>
                        <select class="form-control" id="doctor_department_name" name="doctor_department_name">
                            <option value="">Select a department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->department_name }}">{{ $department->department_name }}
                                </option>
                            @endforeach
                        </select>
                    </div><br>


                    <div class="form-group">
                        <label for="doctorDepartment">Doctor's Name</label>
                        <select class="form-control para" id="doctor_name" name="doctor_name">
                            <option value="">Select a Doctor</option>
                            @foreach ($doctors as $doctor)
                                <option value="{{ $doctor->doctor_name }}">{{ $doctor->doctor_name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="doctorDesignation">Doctor Designation:</label>
                        <select class="form-control" id="doctor_designation" name="doctor_designation">
                            <option value="Professor">Professor</option>
                            <option value="Assistant Professor">Assistant Professor</option>
                            <option value="MBBS">MBBS</option>
                        </select>
                    </div><br>


                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-success" type="submit">Submit</button> <br>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
