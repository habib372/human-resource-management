@extends('include.home')

@section('body')
            <div class="content">
                <div class="container-fluid" >

                    <div class="row"  >
                        <div class="col-12">
                            <div class="page-title-box">
                            <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{url('home')}}">HSHRM</a></li>
                                        <li class="breadcrumb-item"><a href="#">Attendance</a></li>
                                </div>
                                <h4 class="page-title" id="font-size">Attendance</h4>
                            </div>
                        </div>
                    </div> <!-- end page title -->
                  

                        <div class="row my-2">
                            <div class="col-11  m-auto">
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title  float-left">Attendance List</h4> 
                                 
                                    <div class="float-right">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group ">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" style="background-color:#293b52;" autocomplete="on">
                                                </div>
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
                                                    <tr>
                                                        <th >SN</th>
                                                        <th >Emp-ID</th>
                                                        <th>Name</th>
                                                        <th>In Time</th>
                                                        <th>Out Time</th>
                                                        <th>Date</th>                                                                                    
                                                        <th>Action</th>                                                                                
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                  @foreach($attens as $atten)                                               
                                                        <td>{{$atten->id}} </td>                                                                                   
                                                        <td>{{$atten->emp_id}} </td>                                                                                   
                                                        <td class="table-user">
                                                            <!-- <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold"> </a> -->
                                                            {{$atten->emp_name}}
                                                        </td>                                
                                                        <td>{{$atten->in_time}}</td>                                    
                                                        <td>{{$atten->out_time}}</td>                                    
                                                        <td>{{$atten->date}}</td>                                                                                                                                        
                                                        <td> 
                                                            <div class="btn btn-group">                       
                                                                <!-- <a href="#" type='button' style="border:1px solid gray" class='btn  btn-primary btn-sm float-left mr-1'  value='view'><i class="fas fa-user-circle"></i> view</a> -->
                                                                <form action="{{route('attendances.destroy',$atten->id)}}" method="post" onsubmit="return confirm('Are you sure?')">
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