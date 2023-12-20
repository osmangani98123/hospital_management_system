@extends('backend.layouts.includes.master')

@section('page_title')
    All Doctors
@endsection

@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" id="alertMessage" style="transition: opacity 0.5s">
            <strong>{{ session()->get('message') }}</strong>
        </div>
    @endif

    <table class="table caption-top">
        <caption>
            <h3>Page/All Doctors</h3>
        </caption>
        <thead>
            <th>ID</th>
            <th>Doctor Name</th>
            <th>IMG</th>
            <th>Visit</th>
            <th>Action</th>
        </thead>
        <tbody>
            @php
                $serial = 1;
                $doctors = $doctors->reverse();
            @endphp
            @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>{{ $doctor->doctor_name }}</td>
                    <td>
                        <img src="{{ asset($doctor->doctor_img) }}" alt="" style="width: 80px; height: 80px;">
                        <br>
                        <div class="container">
                            <a href="{{ route('editdoctorsimg', $doctor->id) }}"
                                class="btn btn-primary btn-sm mt-2">Update</a>
                        </div>
                    </td>
                    <td>{{ $doctor->doctor_visit_price }} /=</td>
                    <td>
                        <a href="" class="btn btn-info btn-sm">View</a>
                        <a href="" type="button"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{route('deletedoctors',$doctor->id)}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to remove this doctor?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
