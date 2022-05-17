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
                                            <li class="breadcrumb-item"><a href="#">Leave</a></li>
                                            <li class="breadcrumb-item"><a href="#">Leave Applicatoin</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" id="font-size">Leave Applicatoin</h4>
                                </div>
                            </div>
                        </div> <!-- end page title -->
                        

                        <div class="row">
                            <div class="col-md-11  m-auto">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title text-center mb-2" style="font-size:19px; color:#afa6fd">Leave Applicatoin</h4><hr>

                                        <form action="{{route('employees.store')}}" method="post">
                                            @csrf
                                        
                                                 <!---------basic info------------->
                                               
                                                        <div class="form-group row">
                                                        
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity" class="col-form-label">Employee Name</label>
                                                                <input type="text" class="form-control" name="txtName" id="txtSalary" placeholder="Enter Name">
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="input"  class="col-form-label">Leave Type</label>
                                                                <select id="input" name="cmbLeaveType" class="form-control">
                                                                    <option>Leave type</option>                                           
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Application Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Adate">
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Approved Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Pdate">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Approved Start Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Sdate">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Approved End Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Edate">
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="form-group row mt-0">
                                                        
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity" class="col-form-label">Total Approved days</label>
                                                                <input type="text" class="form-control" name="txtSalary" id="txtSalary" placeholder="Total Days">
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="input"  class="col-form-label">Approved By</label>
                                                                <select id="input" name="cmbApprovedBy" class="form-control">
                                                                    <option>Approved by</option>                                           
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity" class="col-form-label">Reason</label>
                                                                <input type="text" class="form-control" name="txtReason" id="txtSalary" placeholder="Right your leave reason">
                                                            </div>

                                                        </div>
                                                        
                                                

                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="previous list-inline-item float-right ml-1">
                                                                <button type="reset" class="btn btn-secondary waves-effect float-right  mr-2" >Reset</button>
                                                            </li>
                                                            <li class="next list-inline-item float-right">                                                          
                                                                <input type="submit" class="btn btn-primary" name="btnCreate" value="Submit" />
                                                            </li>
                                                        </ul>
                                                  
                                               
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> 
                        <!-- end row -->
            </div>
        </div>
@endsection