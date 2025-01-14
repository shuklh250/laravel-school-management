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


                        <form action="{{route('fee-structure.update',$fee->id)}}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4 ">
                                        <label>Select Class</label>
                                        <select name="class_id" class="form-control">
                                            <option value="" disabled selected>Select Class</option>
                                            @foreach($classes as $class)
                                                <option value="{{$class->id}}" {{$fee->class_id == $class->id ? 'selected' : ''}}> {{$class->name}} </option>
                                            @endforeach
                                        </select>

                                        @error ('class_id')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Select Acadamic year</label>
                                        <select name="acadamic_year_id" class="form-control">
                                            <option value="" disabled selected>Select Acadamic year </option>
                                            @foreach($acadamic_years as $acadamic)
                                                <option value="{{$acadamic->id}}" {{$fee->acadamic_year_id == $acadamic->id ? 'selected' : ''}}> {{$acadamic->name}} </option>
                                            @endforeach
                                        </select>
                                        @error('acadamic_year_id')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <div class="form-group col-md-4">

                                        <label>Select Fee Head</label>
                                        <select name="fee_head_id" class="form-control">
                                            <option value="" selected disabled> Select Fee Head </option>
                                            @foreach ($fee_heads as $fee_head)
                                                <option value="{{$fee_head->id}}" {{$fee->fee_head_id == $fee_head->id ? 'selected' : ''}}>
                                                    {{$fee_head->name}}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('fee_head_id')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">April</label>
                                        <input type="text" class="form-control" value="{{old('April',$fee->April) }}" name="April" id="April"
                                            placeholder="Enter April fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">May</label>
                                        <input type="text" class="form-control" value="{{old('May',$fee->May)}}" name="May" id="May"
                                            placeholder="Enter may fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">June</label>
                                        <input type="text" class="form-control" value="{{ old('June',$fee->June) }}" name="june" id="name"
                                            placeholder="Enter june fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">July</label>
                                        <input type="text" class="form-control" value="{{old ('july',$fee->July) }}" name="july" id="july"
                                            placeholder="Enter july fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">August</label>
                                        <input type="text" class="form-control" value="{{old('August',$fee->August) }}" name="august" id="august"
                                            placeholder="Enter August fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">September</label>
                                        <input type="text" class="form-control" value="{{ old('september',$fee->september)}}" name="september" id="september"
                                            placeholder="Enter september fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">October</label>
                                        <input type="text" class="form-control" value="{{old('October',$fee->october)}}" name="october" id="october"
                                            placeholder="Enter october fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">November</label>
                                        <input type="text" class="form-control" value="{{old('November',$fee->November)}}" name="november" id="november"
                                            placeholder="Enter november fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">December</label>
                                        <input type="text" class="form-control"  value="{{old('December',$fee->December) }}"  name="december" id="december"
                                            placeholder="Enter december fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Januery</label>
                                        <input type="text" class="form-control" value="{{old('Januery',$fee->Januery) }}" name="Januery" id="Januery"
                                            placeholder="Enter januery fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Freabury</label>
                                        <input type="text" class="form-control" value="{{old('Februeary', $fee->Februeary) }}" name="Februeary" id="Februeary"
                                            placeholder="Enter freabury fee">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">March</label>
                                        <input type="text" class="form-control" value="{{old('March',$fee->March) }}"  name="March" id="March"
                                            placeholder="Enter March fee">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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