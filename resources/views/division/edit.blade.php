@extends("include.home")


@section("body")
                    <div class="content">
                        <div class="container-fluid">

                            <div class="row "  >
                                <div class="col-12">
                                    <div class="page-title-box">
                                    <div class="page-title-right">
                                            <ol class="breadcrumb m-0">
                                                <li class="breadcrumb-item"><a href="{{url('home')}}">HSHRM</a></li>
                                                <li class="breadcrumb-item"><a href="#">Department</a></li>
                                                <li class="breadcrumb-item"><a href="#">Division</a></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title" id="font-size">Division</h4>
                                    </div>
                                </div>
                            </div> <!-- end page title -->

                            <div class="col-md-10 m-auto">
                                <div class="card mt-2">
                                    <div class="card-body px-5">

                                        <h4 class="mb-3 header-title text-center">Update Division</h4>

                                        <form class="form-horizontal " action="{{route('divisions.update',$division[0]->id)}}" method="post">
                                            @csrf
                                            @method("PUT")

                                            <div class="form-group row mb-3">
                                                    <label for="division" class="col-2 col-form-label">Division </label>
                                                <div class="col-9">
                                                    <input type="text" name="txtDivision" value="{{$division[0]->division_name}}" class="form-control" id="inputEmail3" placeholder="Division">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                    <label for="department" class="col-2 col-form-label">Department </label>
                                                <div class="col-9">
                                                    <select type="dropdown" name="cmb_department" class="form-control">
                                                        @foreach($division as $name)
                                                        <option value="{{$name->department_name}}">{{$name->department_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <div class="col-2"></div>
                                                <div class="col-9">
                                                    <input type="submit" class="btn btn-primary waves-effect float-right" value="Update">
                                                    <button type="Reset" class="btn btn-secondary waves-effect float-right  mr-2" >Reset</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>  <!-- end card-body -->
                                </div>  <!-- end card -->
                            </div>
                        </div>
                    </div>
@endsection
