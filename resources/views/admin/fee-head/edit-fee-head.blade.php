@extends('admin.layout')
@section('content')
<div class="content-wrapper">

<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>General Form</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href=>{{route('admin.dashboard')}}Home</a></li>
          <li class="breadcrumb-item active">Acadamic Fee</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content d-flex justify-content-center align-items-center">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12 ">

        <div class="card card-primary">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
        @endif
          <div class="card-header">
            <h3 class="card-title">Update acadamic fee</h3>
          </div>


          <form action="{{route('fee-head.update')}}" method="post">
            @csrf
            <div class="card-body">
                <input type="hidden" name="id" value="{{$fee->id}}"> 
              <div class="form-group">
                <label for="exampleInputEmail1">Fee-Head-Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{old('name',$fee->name)}}" placeholder="Enter Fee name">
              </div>
            </div>
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update Fee</button>
            </div>
          </form>
        </div>

      </div>


  </div>
</section>

</div>
@endsection
@section('costumJs')

<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
  
@endsection()
