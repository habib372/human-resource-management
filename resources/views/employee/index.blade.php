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
                                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                            <li class="breadcrumb-item"><a href="#">Manage Employee</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" id="font-size">Employee</h4>
                                </div>
                            </div>
                        </div> <!-- end page title -->
                        
                      
                        <div class="row my-3">
                            <div class="col-12 ">
                                <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title  float-left">Employee Table</h4> 
                                 
                                    <div class="float-right">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline">
                                                <div class="form-group ">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control " style="background-color:#293b52;" autocomplete="on">
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
                                                        <th >ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>                                                                                         
                                                        <th>Country</th>                                                                         
                                                        <th>Action</th>                                                                                
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                  @foreach($employees as $employee)
                                                  @method("DELETE")
                                                    <tr>
                                                        <td>{{$employee->id}} </td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="{{asset('public/uploads/'.$employee->img_name)}}" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">{{$employee->name}}</a>
                                                        </td>                                
                                                        <td>{{$employee->position}}</td>                                    
                                                        <td>{{$employee->email}}</td>                                    
                                                        <td>{{$employee->phone}}</td>                                    
                                                        <td>{{$employee->country}}</td>                                                                                                       
                                                        <td> 
                                                            <div class="btn btn-group">                       
                                                            <a href="{{route('employees.show',$employee->id)}}" type='button' style="border:1px solid gray" class='btn  btn-primary btn-sm float-left mr-1'  value='view'><i class="fas fa-user-circle"></i></a>
                                                            <a href="{{route('employees.edit',$employee->id)}}" type='button' style="border:1px solid gray" class='btn btn-success btn-sm float-left mr-1 ed' value='edit'><i class='far fa-edit '></i></a>
                                                            <form action="{{route('employees.destroy',$employee->id)}}" method="post" onsubmit="return confirm('Are you sure?')"> 
                                                                @csrf
                                                                @method("DELETE")
                                                                <button  type='submit'  style="border:1px solid gray" class='btn btn-danger btn-sm btn-delete de' name='btnDel' value='delete'><i class='far fa-trash-alt tb' ></i></button>
                                                            </form>
                                                            </div>
                                                        </td>                                                                      
                                                    </tr>
                                                  @endforeach                                                                                                                                                          
                                                </tbody>

                                            </table>
                                            <tfoot >
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
@endsection