@extends('backend.layouts.includes.master')

{{-- backend hover , khubbeshi css add korar dorkar nai --}}

@section('page_title')
    add-department
@endsection
@section('content')

<style>
    #add_department{
     margin-left: 20px;
    margin-right: 10px;
    margin-bottom: 0px;
    margin-top: 10px;
    }
    </style>

  {{-- error display --}}

  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif


    <div class="card">

        <!-- Create Post Form -->
        <form action="{{ route('storedepartment') }}" method="POST" id="add_department">
            @csrf
            <div class="row mb-3">
                <label for="exampleInputName" class="col-sm-2 col-form-label custom-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="department_name" id="exampleInputName"
                        aria-describedby="nameHelp">
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">add department</button>

            </div>
        </form>

        <br>
    </div>

@endsection
