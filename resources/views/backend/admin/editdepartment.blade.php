@extends('backend.layouts.includes.master')

{{-- backend hover , khubbeshi css Edit korar dorkar nai --}}

@section('page_title')
    Edit-department
@endsection
@section('content')

<style>
    #edit_cateogry{
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
        <form action="{{ route('updatedepartment') }}" method="POST" id="edit_cateogry">
            @csrf
            <input type="hidden"  value="{{ $department_info->id }}" name="department_id">
            <div class="row mb-3">
                <label for="exampleInputName" class="col-sm-2 col-form-label custom-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="department_name" id="exampleInputName"
                        value="{{ $department_info->department_name }}">
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit">Edit department</button>

            </div>
        </form>

        <br>
    </div>

@endsection
