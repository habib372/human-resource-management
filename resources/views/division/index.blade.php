@extends("include.home")

@section('body')
    <div class="content">
        <div class="container-fluid" >

            <div class="row"  >
                <div class="col-12">
                    <div class="page-title-box">
                       <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('home')}}">HSHRM</a></li>
                                <li class="breadcrumb-item"><a href="#">Department</a></li>
                                <li class="breadcrumb-item"><a href="#">Manage Division</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title" id="font-size">Division</h4>
                    </div>
                </div>
            </div> <!-- end page title -->



            <div class="row">
                <div class="col-11  m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title float-left">Division List</h4>
                            <div class="float-right">
                                    <div class="row">
                                        <div class="col-12 text-sm-center form-inline">
                                            <!-- <div class="form-group ">
                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" style="background-color:#293b52;" autocomplete="on">
                                            </div> -->
                                            <!-- <div>
                                                <button type="button" class="btn btn-primary waves-effect waves-light float-right " data-toggle="modal" data-target="#add_department">Add department</button>
                                            </div> -->
                                            <div class="form-group ml-1">
                                                <select id="demo-foo-filter-status" class="custom-select ">
                                                    <option value="">Show all</option>                                                      
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-box mb-0 p-4">
                            <div class="table-responsive">
                                <table id="demo-foo-filtering" class="table table-bordered  mb-3" data-page-size="5">
                                    <thead>
                                        <tr style="font-size:16px">
                                            <th >Serial No</th>
                                            <th>Division </th>
                                            <th>Department </th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($divisions as $division)
                                        <tr>
                                            <td>{{$division->id}}</td>
                                            <td>{{$division->division_name}}</td>
                                            <td>{{$division->department_name}}</td>
                                            <td>

                                                <a type='button' href="{{route('divisions.edit',$division->id)}}" style="border:1px solid gray" title="edit" class='btn btn-secondary btn-sm float-left mr-1 ed' value='edit'><i class='far fa-edit ec'></i></a>
                                                <form action="{{route('divisions.destroy',$division->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method("DELETE")
                                                    <button type='submit' style="border:1px solid gray" class='btn btn-secondary btn-sm btn-delete de' name='btnDel' value='delete'><i class='far fa-trash-alt tc' ></i></button>
                                                </form>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <tfoot>
                                    <tr class="active">
                                        <td colspan="5">
                                            <div class="text-right">
                                                <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
