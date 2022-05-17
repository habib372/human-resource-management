@extends('include.home')
@section('body')

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                        <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">HSHRM</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employee</a></li>
                                        <!-- <li class="breadcrumb-item active">Attendance Report</li> -->
                                    </ol>
                            </div>
                            <h4 class="page-title" id="font-size">Profile View</h4>
                        </div>
                    </div>
                </div> <!-- end page title -->
                    
                    <div class="card-group row ml-4">
                         <div class="col-md-5 mt-2 ">
                                    <div class="card-box text-center">
                                        <img src="{{asset('public/uploads/'.$employee[0]->img_name)}}" style="height:100px; width:100px" class="rounded-circle avatar-lg img-thumbnail"
                                            alt="profile-image">

                                        <h4 class="mb-0" style="font-size:21px">{{$employee[0]->name}}</h4>
                                        <p class="text-muted"><span>@</span> {{$employee[0]->position}}</p><hr>


                                            <div class="table-responsive text-left  pt-2">
                                                 <h4 class="card-title text-muted text-center">Basic Information</h4> 
                                                <table class="table table-sm table-centered table-striped ">
                                                    <tr>
                                                        <td >Name :</td>
                                                        <td>{{$employee[0]->name}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td >Phone :</td>
                                                        <td>{{$employee[0]->phone}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Email :</td>
                                                        <td>{{$employee[0]->email}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Alternative phone :</td>
                                                        <td>{{$employee[0]->Alter_Phone}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Country :</td>
                                                        <td>{{$employee[0]->country}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td>City :</td>
                                                        <td>{{$employee[0]->city}}</td>
                                                    <tr>
                                                    <tr>
                                                        <td>Zip Code:</td>
                                                        <td>{{$employee[0]->zip_code}}</td>
                                                    <tr>
                                                   
                                                </table>                                                
                                            </div>                                     
                                    </div>
                        </div>


                        <div class=" card-box col-md-6 mt-2  ">
                            <div class="table-responsive pt-2">
                              <h4 class="card-title text-center text-muted ">Positional Information</h4> 
                                <table class="table  table-centered ">
                                    <tr>
                                        <td>Position :</td>
                                        <td>{{$employee[0]->position}}</td>
                                    </tr>
                                    <tr>
                                        <td>Department :</td>
                                        <td>{{$employee[0]->department}}</td>
                                    </tr>
                                    <tr>
                                        <td>Division :</td>
                                        <td>{{$employee[0]->division}}</td>
                                    <tr>
                                    <tr>
                                        <td>Hireing Date :</td>
                                        <td>{{$employee[0]->hireing_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Joining Date :</td>
                                        <td>{{$employee[0]->joining_date}}</td>
                                    </tr>
                                    <tr>
                                        <td>Duty Type :</td>
                                        <td>{{$employee[0]->duty_type}}</td>
                                    </tr>
                                    <tr>
                                        <td>Rate Type :</td>
                                        <td>{{$employee[0]->rate_type}}</td>
                                    </tr>
                                    <tr>
                                        <td>Salary :</td>
                                        <td>{{$employee[0]->salary}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pay Frequency :</td>
                                        <td>{{$employee[0]->pay_frequency}}</td>
                                    </tr>
                                 
                                 </table> 
                                 
                            </div>
                        </div>
                    </div>

                    <div class="card-group row my-3">
                        <div class="col-md-11 ml-4">
                            <div class="card-box ">
                                <div class="table-responsive pt-2 pl-5 pr-5">
                                    <h4 class="card-title text-center text-muted ">Bio-Logical Information</h4> 
                                    <table class="table   table-centered ">
                                        <tr>
                                            <td >Date-of-Birth :</td>
                                            <td>{{$employee[0]->date_of_birth}}</td>
                                        <tr>
                                        <tr>
                                            <td>Religion :</td>
                                            <td>{{$employee[0]->religion}}</td>
                                        <tr>
                                        <tr>
                                            <td>Gender :</td>
                                            <td>{{$employee[0]->gender}}</td>
                                        <tr>
                                        <tr>
                                            <td>Marital Status:</td>
                                            <td>{{$employee[0]->marital_status}}</td>
                                        <tr>
                                        <tr>
                                            <td>Blood Group :</td>
                                            <td>{{$employee[0]->blood_group}}</td>
                                        <tr>
                                        <tr>
                                            <td>Present Address :</td>
                                            <td>{{$employee[0]->present_address}}</td>
                                        <tr>
                                        <tr>
                                            <td>Permanent Address :</td>
                                            <td>{{$employee[0]->permanent_address}}</td>
                                        <tr>

                                    </table> 
                                    
                                </div> 
                            </div>
                        </div>
                    </div>

            </div>
        </div>
@endsection
