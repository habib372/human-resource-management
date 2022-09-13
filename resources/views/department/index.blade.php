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
                            </ol>
                        </div>
                        <h4 class="page-title" id="font-size">Department</h4>
                    </div>
                </div>
            </div> <!-- end page title -->

                                 <!----------Create modal----------->
                                <form action="{{route('departments.store')}}" method="post">
                                    @csrf
                                    <div id="add_department" class="modal fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add New Department</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="field-3" class="control-label text-white">Department Name</label>
                                                                <input type="text" name="txtDepartment" class="form-control" id="field-3" placeholder="Department">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Save">
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                </form>

                              
            <div class="row pt-1">
                <div class="col-11  m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-2 float-left">Department list</h4>
                             <div class="float-right">
                                    <div class="row">
                                        <div class="col-12 text-sm-center form-inline">
                                            <!-- <div class="form-group ">
                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" style="background-color:#293b52;" autocomplete="on">
                                            </div> -->
                                            <div>
                                                <button type="button" class="btn btn-primary waves-effect waves-light float-right " data-toggle="modal" data-target="#add_department">Add department</button>
                                            </div>
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
                            <div class="table-responsive ">
                            <table id="demo-foo-filtering" class="table table-bordered  mb-3" data-page-size="5">
                                    <thead>
                                        <tr style="font-size:16px">
                                            <th >Serial No</th>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($departments as $department)
                                        <tr>
                                            <td>{{$department->id}}</td>
                                            <td>{{$department->department_name}}</td>
                                            <td>

                                                <a href="{{route('departments.edit',$department->id)}}" type='button' style="border:1px solid gray" class='btn btn-secondary btn-sm float-left mr-1 ed'  value='edit'><i class='far fa-edit eb'></i></a>
                                                <form action="{{route('departments.destroy',$department->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method("DELETE") 
                                                    <button type='submit' style="border:1px solid gray" class='btn btn-secondary btn-sm btn-delete de' name='btnDel' value='delete'><i class='far fa-trash-alt tb' ></i></button>
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
