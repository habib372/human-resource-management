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
                                            <li class="breadcrumb-item"><a href="#">Employee</a></li>
                                            <li class="breadcrumb-item"><a href="#">Add Employee</a></li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title" id="font-size">Employee</h4>
                                </div>
                            </div>
                        </div> <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-md-11  m-auto">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title text-center mb-2" style="font-size:19px; color:#afa6fd">Employee Information</h4>

                                        <form action="{{route('employees.store')}}" method="POST" enctype="multipart/form-data">
                                             @csrf
                                            <div id="basicwizard">
                                                <!---------button wizard------------->
                                                <ul class="nav nav-pills bg-secondary nav-justified form-wizard-header mb-2">
                                                    <li class="nav-item">
                                                        <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                                            <i class="mdi mdi-account-circle mr-1"></i>
                                                            <span class="d-none d-sm-inline">Basic Information</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-face-profile mr-1"></i>
                                                            <span class="d-none d-sm-inline">Positional Information</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                            <span class="d-none d-sm-inline">Bio-Graphical Information</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                   
                                                 <!---------basic info------------->
                                                <div class="tab-content b-0 mb-0">
                                                    <div class="tab-pane" id="basictab1">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <label for="inputEmail4" class="col-form-label">Full Name*</label>
                                                                <input type="text" class="form-control" name="txtFName" id="inputEmail4" placeholder="Full Name">
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="inputGender" class="col-form-label">Gender</label>
                                                                <select id="inputGender"  name="cmbGender"  class="form-control">
                                                                    <option value="Male">Male</option>
                                                                    <option value="Female">Female</option>
                                                                </select>
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="inputPassword4" class="col-form-label">Religion</label>
                                                                <input type="text" class="form-control" name="txtReligion" id="inputPassword4" placeholder="Religion">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputEmail4" class="col-form-label">Email Address*</label>
                                                                <input type="email" class="form-control" name="txtEmail" id="inputEmail4" placeholder="Email Address">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputPassword4" class="col-form-label">Phone No*</label>
                                                                <input type="text" class="form-control" name="txtPhone" id="inputPassword4" placeholder="Phone No">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputAddress" class="col-form-label">Alternative Phone</label>
                                                                <input type="text" class="form-control" name="txtAlterPhone" id="inputAddress" placeholder="Alternative Phone">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCountry" class="col-form-label">Country*</label>
                                                                <input type="text" class="form-control" name="txtCountry" id="inputEmail4" placeholder="Country">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity" class="col-form-label">City*</label>
                                                                <input type="text" class="form-control" name="txtCity" id="inputPassword4" placeholder="City">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputZipCode" class="col-form-label">Zip Code*</label>
                                                                <input type="text" class="form-control" name="txtZipCode" id="inputAddress" placeholder="Zip Code">
                                                            </div>
                                                        </div>
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="previous list-inline-item">
                                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                            </li>
                                                            <li class="next list-inline-item float-right">
                                                                <a href="javascript: void(0);" class="btn btn-primary">Next</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!---------positional info------------->
                                                    <div class="tab-pane" id="basictab2">
                                                        <div class="form-group row">
                                                            <div class=" col-md-4">
                                                                <label for="input" class="col-form-label">Position</label>
                                                                <select id="input"  name="cmbPosition"  class="form-control">                                                     
                                                                    <option value="Web Application Developer">Web Application Developer</option>
                                                                    <option value="Web Designer">Web Designer</option>
                                                                    <option value="Programmer">Programmer</option>
                                                                    <option value="Graphics Designer">Graphics Designer</option>
                                                                    <option value="Accountant">Accountant</option>
                                                                    <option value="Recruiting Officer">Recruiting Officer</option>                                                         
                                                                </select>
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="input"  class="col-form-label">Department</label>
                                                                <select id="input" name="cmbDepartment" class="form-control">
                                                                @foreach($departs as $depart)
                                                                    <option value="{{$depart->department_name}}">{{$depart->department_name}}</option>
                                                                @endforeach                                                                          
                                                                </select>
                                                            </div>
                                                            <div class=" col-md-4">
                                                                <label for="input"  class="col-form-label">Division</label>
                                                                <select id="input" name="cmbDivision" class="form-control">
                                                                @foreach($divis as $divi)
                                                                    <option value="{{$divi->division_name}}">{{$divi->division_name}}</option>
                                                                @endforeach 
                                                                </select>
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Hireing Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Hdate">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="example-date" class="col-form-label">Joining Date</label>
                                                                <input class="form-control" id="example-date" type="date" name="Jdate">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputAddress" class="col-form-label">Duty Type</label>
                                                                <select id="input" name="cmbDutyType" class="form-control">
                                                                    <option value="Full Time">Full Time</option>
                                                                    <option value="Part Time">Part Time</option>
                                                                    <option value="Internship">Internship</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mt-0">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCountry" >Rate Type</label>
                                                                <select id="input" name="cmbRateType" class="form-control">
                                                                    <option value="Salary">Salary</option>
                                                                    <option value="Hourly">Hourly</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputCity">Salary</label>
                                                                <input type="text" class="form-control" name="txtSalary" id="txtSalary" placeholder="Salary">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="inputPayFrequency" >Pay Frequency</label>
                                                                <select id="input" name="cmbPayFreq" class="form-control">
                                                                    <option value="Monthly">Monthly</option>
                                                                    <option value="Weekly">Weekly</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="previous list-inline-item">
                                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                            </li>
                                                            <li class="next list-inline-item float-right">
                                                                <a href="javascript: void(0);" class="btn btn-primary">Next</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <!---------Bio-graphical info------------->
                                                    <div class="tab-pane" id="basictab3">
                                                        <div class="tab-pane" id="basictab1">
                                                            <div class="form-group row">
                                                                <div class="form-group col-md-4">
                                                                    <label for="example-date" class="col-form-label">Date-of-Birth</label>
                                                                    <input class="form-control" id="example-date" type="date" name="Bdate">
                                                                </div>
                                                                <div class=" col-md-4">
                                                                    <label for="inputGender" name="cmbStatus" class="col-form-label">Marital Status</label>
                                                                    <select id="inputGender" class="form-control">
                                                                        <option value="Married">Married</option>
                                                                        <option value="Unmarried">Unmarried</option>
                                                                    </select>
                                                                </div>
                                                                <div class=" col-md-4">
                                                                    <label for="inputGender" name="cmbBlood" class="col-form-label">Blood Group</label>
                                                                    <select id="inputGender" class="form-control">
                                                                        <option value="O+">O+</option>
                                                                        <option value="A+">A+</option>
                                                                        <option value="B+">B+</option>
                                                                        <option value="AB+">AB+</option>
                                                                        <option value="O-">O-</option>
                                                                        <option value="O-">A-</option>
                                                                        <option value="B-">B-</option>
                                                                        <option value="AB-">AB-</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputEmail4" class="col-form-label">Present Address</label>
                                                                    <input type="text" class="form-control" name="txtPreAddress" id="inputPassword4" placeholder="Enter your present address">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="inputPassword4" class="col-form-label">Permanent Address</label>
                                                                    <input type="text" class="form-control" name="txtPerAddress" id="inputPassword4" placeholder="Enter your permanent address">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-md-5"></div>
                                                                <div class="form-group col-md-4">
                                                                    <div class="form-group mb-2">
                                                                        <label for="example-fileinput">Upload Image</label>
                                                                        <input type="file" id="example-fileinput" name="file" class="form-control-file">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3"></div>
                                                            </div>

                                                        </div>

                                                        <ul class="list-inline wizard mb-0">
                                                            <li class="previous list-inline-item">
                                                                <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                            </li>
                                                            <li class="next list-inline-item float-right">                                                          
                                                                <input type="submit" class="btn btn-primary" name="btnCreate" value="Submit" />
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #basicwizard-->
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div> 
                        <!-- end row -->
            </div>
        </div>
@endsection
