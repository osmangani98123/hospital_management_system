@extends('backend.layouts.includes.master')

{{-- backend hover , khubbeshi css add korar dorkar nai --}}
@section('content')

@if (session()->has('message'))
<div class="alert alert-success" id="alertMessage">
    <strong>{{ session()->get('message')}}</strong>

</div>

@endif

<table class="table caption-top">
    <caption><h3>page/allcategories</h3></caption>
    <thead>
        <th>ID</th>
        <th>department Name</th>
        <th>doctors</th>
        <th>Slug</th>
        <th>actions</th>

    </thead>

    <tbody>
       @php
        $serial=1;
       @endphp

        @foreach ($departments as $department )



      <tr>

        <td>{{$serial++}}</td>
        <td>{{$department->department_name}}</td>
        <td>{{$department->doctor_count}}</td>
        <td>{{$department->slug}}</td>
        <td>
            <a href="{{ route('editdepartment',$department->id)}}" class="btn btn-warning btn-sm">Edit </a>
          <a href="{{ route('deletedepartment', $department->id) }}" class="btn btn-danger btn-sm"
   onclick="return confirm('Are you sure you want to delete this department?')">Delete</a>
        </td>

      </tr>
      @endforeach

    </tbody>
  </table>





@endsection

