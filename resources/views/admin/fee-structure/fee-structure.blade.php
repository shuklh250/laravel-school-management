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
          <li class="breadcrumb-item active">Fee-Structure</li>
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
            <h3 class="card-title">Fee Structure</h3>
          </div>


          <form action="{{route('fee-structure.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4 ">
                            <label>Select Class</label>
                            <select name="class_id" class="form-control">
                                <option>Select Class</option>
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}"> {{$class->name}}  </option>
                                @endforeach
                            </select>
                    </div> 
                </div>
                <div class="row">  
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">April</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter April fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">May</label>
                <input type="text" class="form-control" name="may" id="may" placeholder="Enter may fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">June</label>
                <input type="text" class="form-control" name="june" id="name" placeholder="Enter june fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">July</label>
                <input type="text" class="form-control" name="july" id="july" placeholder="Enter july fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">August</label>
                <input type="text" class="form-control" name="august" id="august" placeholder="Enter August fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">September</label>
                <input type="text" class="form-control" name="september" id="september" placeholder="Enter september fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">October</label>
                <input type="text" class="form-control" name="october" id="october" placeholder="Enter october fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">November</label>
                <input type="text" class="form-control" name="november" id="november" placeholder="Enter november fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">December</label>
                <input type="text" class="form-control" name="december" id="december" placeholder="Enter december fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Januery</label>
                <input type="text" class="form-control" name="januery" id="januery" placeholder="Enter januery fee" >
              </div>
              <div class="form-group col-md-4">
                <label for="exampleInputEmail1">Freabury</label>
                <input type="text" class="form-control" name="freabury" id="freabury" placeholder="Enter freabury fee" >
              </div><div class="form-group col-md-4">
                <label for="exampleInputEmail1">March</label>
                <input type="text" class="form-control" name="March" id="March" placeholder="Enter March fee" >
              </div>
                </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
