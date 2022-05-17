@extends("include.home")

@section("body")

<div class="content">
        <div class="container-fluid" >

            <div class="row"  >
                <div class="col-12">
                    <div class="page-title-box">
                       <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('home')}}">HSHRM</a></li>
                                <li class="breadcrumb-item"><a href="#">Attendance</a></li>
                                <li class="breadcrumb-item"><a href="#">Attendance Form</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title" id="font-size">Attendance</h4>
                    </div>
                </div>
            </div> <!-- end page title -->

            <div class="col-md-8 m-auto">
                                <div class="card mt-2">
                                    <div class="card-body px-5">

                                        <h4 class="mb-3 header-title text-center">Add Attendance</h4>

                                        <form class="form-horizontal " action="{{route('attendances.store')}}" method="post">
                                            @csrf

                                            <div class="form-group row mb-3">
                                                    <label for="division" class="col-3 col-form-label">Employee Id :</label>
                                                <div class="col-9">
                                                    <input type="text" class="form-control" name="txtID" id="inputEmail3" placeholder="Enter your ID">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                    <label for="division" class="col-3 col-form-label">Employee Name :</label>
                                                <div class="col-9">
                                                    <!-- <input type="text" class="form-control" id="inputEmail3" placeholder="Division"> -->
                                                    <select type="dropdown" name="cmb_employee" class="form-control">
                                                        <option selected="selected">Select name</option>
                                                        @foreach($names as $name)
                                                        <option value="{{$name->name}}">{{$name->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                    <label for="example-time" class="col-3 col-form-label">In Time :</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-time" type="time" name="Intime">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                    <label for="example-time" class="col-3 col-form-label">Out Time :</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-time" type="time" name="Outtime">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                <label for="example-date" class="col-3 col-form-label">Date :</label>
                                                <div class="col-9">
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
                                            </div>

                                           

                                            <div class="form-group row ">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <input type="submit" class="btn btn-primary waves-effect float-right" value="Save">
                                                    <button type="reset" class="btn btn-secondary waves-effect float-right  mr-2" >Reset</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>

            
        </div>
</div>
@endsection