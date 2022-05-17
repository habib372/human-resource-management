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
                                <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                <li class="breadcrumb-item"><a href="#">Position</a></li>
                        </div>
                        <h4 class="page-title" id="font-size">Position</h4>
                    </div>
                </div>
            </div> <!-- end page title -->


                                 <!----------Create modal----------->

                                <form action="{{route('positions.store')}}" method="post">
                                    @csrf
                                    <div id="add_position" class="modal fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Create New Position</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="form-group row">
                                                            <label for="field-3" class="col-4 col-form-label text-white">Position Name</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="txtPosition" class="form-control" id="field-3" placeholder="Position Name">
                                                            </div>                                                 
                                                    </div>
                                                    <div class="form-group row">
                                                            <label for="field-3" class="col-4 col-form-label text-white">Position Details</label>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control" name="txtPDetails" id="field-7" placeholder="Position details"></textarea>
                                                            </div>                                                 
                                                    </div>
                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.modal -->
                                </form>

                                
                        <div class="row my-2">
                            <div class="col-11  m-auto">
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title  float-left">Attendance List</h4> 
                                 
                                    <div class="float-right">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <!-- <div class="form-group ">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" style="background-color:#293b52;" autocomplete="on">
                                                </div> -->
                                                <div>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light float-right ml-1 " data-toggle="modal" data-target="#add_position">Add Position</button>
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
                                <div class="card-box mb-0"> 
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered  mb-3" data-page-size="5">                                 
                                            <thead>
                                                <tr style="font-size:16px">
                                                    <th >Serial No</th>
                                                    <th>Position</th>
                                                    <th>Position Details</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($positions as $position)
                                                <tr>
                                                    <td>{{$position->id}}</td>
                                                    <td>{{$position->position_name}}</td>
                                                    <td>{{$position->position_details}}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                        <a type='button' href="{{route('positions.edit',$position->id)}}" style="border:1px solid gray" title="edit" class='btn btn-success btn-sm float-left mr-1 ed'  value='edit' ><i class='far fa-edit ec'></i></a>
                                                            <form action="{{route('positions.destroy',[$position->id])}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                                @csrf
                                                                @method("DELETE")
                                                                <button type='submit' style="border:1px solid gray" class='btn btn-danger btn-sm btn-delete float-left de' name='btnDel' value='delete'><i class='far fa-trash-alt tc' ></i></button>
                                                            </form>
                                                        </div>
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
                                                                                  
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- end row -->        
           
        </div>
    </div>
@endsection
