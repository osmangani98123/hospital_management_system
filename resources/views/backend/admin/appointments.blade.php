@extends('backend.layouts.includes.master')

@section('page_title')
    appointments
@endsection

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" id="alertMessage" style="transition: opacity 0.5s">
            <strong>{{ session()->get('message') }}</strong>
        </div>
    @endif

    <table class="table caption-top">
        <caption>
            <h3>Page/All appointments</h3>
        </caption>
        <thead>
            <th>ID</th>
            <th>Patient Name</th>

            <th>Phone no</th>
            <th>Age</th>
            <th>doctor name</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>Action</th>
        </thead>
        <tbody>
            @php
                $serial = 1;
                /*     $appointments = $appointments->reverse(); */
            @endphp
            @foreach ($appointments as $appointment)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>{{ $appointment->patient_name }}</td>

                    <td>{{ $appointment->patient_phone_no }}</td>

                    <td>{{$appointment->age}}</td>
                    <td>{{ $appointment->doctor_name }}</td>

                    <td>{{$appointment->created_at}}</td>
                    <td>{{ $appointment->updated_at }}</td>


                    <td>
                        <a href="" class="btn btn-info btn-sm">View</a>
                        <a href="" type="button" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('deleteappointments', $appointment->id) }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to remove this appointment?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
