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
                                                <li class="breadcrumb-item"><a href="#">Position</a></li>
                                            </ol>
                                        </div>
                                        <h4 class="page-title" id="font-size">Position</h4>
                                    </div>
                                </div>
                            </div> <!-- end page title -->

                            <div class="col-md-10 m-auto">
                                <div class="card mt-2">
                                    <div class="card-body px-5">

                                        <h4 class="mb-3 header-title text-center">Update Position</h4>

                                        <form class="form-horizontal " action="{{route('positions.update',$position[0]->id)}}" method="post">
                                            @csrf
                                            @method("PUT")
                                            <div class="form-group row mb-3">
                                                    <label for="division" class="col-3 col-form-label">Position</label>
                                                <div class="col-9">
                                                    <input type="text" name="txtPosition" value="{{$position[0]->position_name}}" class="form-control" id="inputEmail3">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-3">
                                                    <label for="division" class="col-3 col-form-label">Position Details</label>
                                                <div class="col-9">
                                                    <input type="text" name="txtPDetails" value="{{$position[0]->position_details}}"  class="form-control" id="inputEmail3">
                                                </div>
                                            </div>

                                            <div class="form-group row ">
                                                <div class="col-3"></div>
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
