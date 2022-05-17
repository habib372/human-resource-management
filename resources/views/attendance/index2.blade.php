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
                                            <li class="breadcrumb-item"><a href="#">Attendance Table</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" id="font-size">Attendance</h4>
                                </div>
                            </div>
                        </div> <!-- end page title -->
                        
                      
                        <div class="row ">
                            <div class="col-11  m-auto">
                                <div class="card-box mb-0">  
                                    <h4 class="card-title mb-3">Attendance List</h4>                                
                                    
                                        <div class="table-responsive">
                                            <table class="table table-centered table-dark table-bordered" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th >Emp-ID</th>
                                                        <th>Name</th>
                                                        <th>In Time</th>
                                                        <th>Out Time</th>
                                                        <th>Date</th>                                                                                    
                                                        <th>Action</th>                                                                                
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                  @foreach($attens as $atten)                                                 <tr>
                                                        <td>{{$atten->emp_id}} </td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{$atten->emp_name}}</a>
                                                        </td>                                
                                                        <td>{{$atten->in_time}}</td>                                    
                                                        <td>{{$atten->out_time}}</td>                                    
                                                        <td>{{$atten->date}}</td>                                                                                                                                        
                                                        <td> 
                                                            <div class="btn btn-group">                       
                                                            <a href="#" type='button' style="border:1px solid gray" class='btn  btn-primary btn-sm float-left mr-1'  value='view'><i class="fas fa-user-circle"></i> view</a>
                                                            </div>
                                                        </td>                                                                      
                                                    </tr>
                                                  @endforeach                                                                                                                                                          
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
             </div>
        </div>
@endsection