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

                                <form action="{{route('leavetypes.store')}}" method="post">
                                    @csrf
                                    <div id="add_position" class="modal fade" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Create New Leave</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body p-3">

                                                    <div class="form-group row">
                                                            <label for="field-3" class="col-4 col-form-label text-white">Leave Type</label>
                                                            <div class="col-md-8">
                                                                <input type="text" name="txtleave" class="form-control" id="field-3" placeholder="Leave Type">
                                                            </div>                                                 
                                                    </div>
                                                    <div class="form-group row">
                                                            <label for="field-3" class="col-4 col-form-label text-white"> Number of Leave Days*</label> 
                                                            <div class="col-md-8">
                                                                <input class="form-control" name="txtLeaven" id="field-7" placeholder="Number of Leave Days *">
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

                                
                        <div class="row my-2">
                            <div class="col-11  m-auto">
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title  float-left">Leave Type</h4> 
                                 
                                    <div class="float-right">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                               
                                                <div>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light float-right ml-1 " data-toggle="modal" data-target="#add_position">Add New Leave</button>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-box mb-0"> 
                                    <div class="table-responsive">
                                        <table class="table table-centered table-bordered" id="products-datatable">                                   
                                            <thead>
                                                <tr style="font-size:16px">
                                                    <th >Serial No</th>
                                                    <th>Type Name</th>
                                                    <th>Total Leave Days</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($leavetypes as $leavetype)
                                                <tr>
                                                    <td>{{$leavetype->id}}</td>
                                                    <td>{{$leavetype->leave_type}}</td>
                                                    <td>{{$leavetype->leave_day}}</td>
                                                    <td>
                                                            <div class="btn btn-group">                       
                                                                        <a href="#" type='button' style="border:1px solid gray" class='btn  btn-primary btn-sm float-left mr-1'  value='edit'><i class="fas fa-edit"></i> </a>
                                                                <form action="{{route('leavetypes.destroy',$leavetype->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
                                                                    @csrf
                                                                    @method("DELETE")
                                                                    <button type='submit' style="border:1px solid gray" class='btn btn-secondary btn-sm btn-delete de' name='btnDel' value='delete'><i class='far fa-trash-alt tc' ></i></button>
                                                                </form>
                                                            </div>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            </tbody>
                                                                                 
                                        </table>
                                                       
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                            </div>
                        </div>
                        <!-- end row -->        
           
        </div>
    </div>
@endsection
