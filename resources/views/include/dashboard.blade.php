@extends("include.home")

@section('body')

<!------------content wrapper---------------->
<div class="content">
                <div class="container-fluid">
                        
                        <!----- Start page title--=----->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="form-inline">
                                        <div class="form-group">
                                                <div class="input-group input-group-sm">
                                                    <input type="text" class="form-control flatpickr-input" id="txtDATE" value="mm / dd / yyyy">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text bg-blue border-blue text-white">
                                                            <i class="mdi mdi-calendar-range font-13"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="javascript: void(0);" onClick="history.go(0)" type="button" class="btn btn-blue btn-sm ml-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                           
                                        </form>
                                    </div>
                                    <h2 class="page-title" style="font-size:25px">Dashboard</h2>
                                </div>
                            </div>
                        </div>     
                        
                        <!------Total Employ card---------->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fas fa-user-tie font-22 avatar-title text-primary"></i>

                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Office Staff</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">30</span></h3>                                               
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                         </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                            <i class="fas fa-user-tie  font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Total Employee</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">130</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                            <i class="fas fa-user-check font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Total Presents</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">127</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                            <i class="fas fa-user-times font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Total Absents</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">3</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fas fa-male font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="text-right">
                                            <p class="text-muted mb-1 text-truncate">Male Employee</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">80</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                            <i class="fas fa-female font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Female Employee</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">50</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                <i class="fas fa-user-minus font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Today Leave</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">4</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                <i class="fe-eye font-22 avatar-title text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <p class="text-muted mb-1 text-truncate">Late</p>
                                                <h3 class="mt-1"><span data-plugin="counterup">3</span></h3>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <!------Absent Employ table----------->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">  
                                    <h4 class="card-title mb-3">Absent Employees</h4>                                
                                    
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th >Employ-ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>                                                                                         
                                                        <th>Location</th>                                        
                                                        <th>Total Absent</th>                                       
                                                        <th>Total Late(hrs)</th>                                                                         
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#03</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Rakib Mahmud</a>
                                                        </td>                                    
                                                        <td>Web Developer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>2</td>                                    
                                                        <td>1</td>                                    
                                                                                       
                                                    </tr>
                                                    <tr>
                                                        <td>#15</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-3.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Sakib Mahmud</a>
                                                        </td>                                    
                                                        <td>Web Design</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>1</td>                                    
                                                        <td>3</td>                                    
                                                                                        
                                                    </tr>
                                                    <tr>
                                                        <td>#122</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-4.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Siam Khan</a>
                                                        </td>                                    
                                                        <td>Graphics Design</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>1</td>                                    
                                                        <td>0.5</td>                                    
                                                                                          
                                                    </tr>
                                                    <tr>
                                                        <td>#037</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-2.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Angilina Joly</a>
                                                        </td>                                    
                                                        <td>Digital Marketing</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>1</td>                                    
                                                        <td>0.20</td>                                    
                                                                                        
                                                    </tr>
                                                                                                                                                            
                                                </tbody>
                                         </table>
                                        </div>
                                </div>
                            </div>
                        </div>

                        <!-------Leave Employ table------------>
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">  
                                    <h4 class="card-title mb-3">Leave Employees</h4>                                
                                    
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th >Employ-ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>                                                                                         
                                                        <th>Location</th>                                        
                                                        <th>Total Absent</th>                                       
                                                        <th>Total Late(hrs)</th>                                                                                
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#05</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-8.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Selena Saba</a>
                                                        </td>                                    
                                                        <td>Programmer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>0</td>                                    
                                                        <td>1</td>                                    
                                                    </tr>
                                                    <tr>
                                                        <td>#15</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-6.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Rahman Siddik</a>
                                                        </td>                                    
                                                        <td>Web Developer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>1</td>                                    
                                                        <td>2</td>                                    
                                                    </tr>
                                                    <tr>
                                                        <td>#50</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-7.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Labib Mahmud</a>
                                                        </td>                                    
                                                        <td>Web Designer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>0</td>                                    
                                                        <td>0</td>                                    
                                                    </tr>
                                                                                                                                                                                                                
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>

                         <!-------Late Employ table------------>
                         <div class="row">
                            <div class="col-12">
                                <div class="card-box">  
                                    <h4 class="card-title mb-3">Late Employees</h4>                                
                                    
                                        <div class="table-responsive">
                                            <table class="table table-centered table-striped" id="products-datatable">
                                                <thead>
                                                    <tr>
                                                        <th >Employ-ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>                                                                                         
                                                        <th>Location</th>                                        
                                                        <th>Total Absent</th>                                       
                                                        <th>Total Late(hrs)</th>                                                                                
                                                    </tr>                                    
                                                                                        
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>#12</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-6.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Sakib Mia</a>
                                                        </td>                                    
                                                        <td>Programmer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>0</td>                                    
                                                        <td>1</td>                                    
                                                    </tr>
                                                    <tr>
                                                        <td>#052</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-5.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Rabbbi Islam</a>
                                                        </td>                                    
                                                        <td>Web Developer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>1</td>                                    
                                                        <td>2</td>                                    
                                                    </tr>
                                                    <tr>
                                                        <td>#053</td>                                                                                   
                                                        <td class="table-user">
                                                            <img src="assets/images/users/user-7.jpg" alt="table-user" class="mr-2 rounded-circle">
                                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Tamim Islam</a>
                                                        </td>                                    
                                                        <td>Web Designer</td>                                    
                                                        <td>rakib@gmail.com</td>                                    
                                                        <td>+8801765842665</td>                                    
                                                        <td>Dhaka</td>                                    
                                                        <td>0</td>                                    
                                                        <td>1</td>                                    
                                                    </tr>
                                                                                                                                                                                                                
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>


                <div> <!---end container----->
            </div> <!---end content------> 
            
<!---end content----->


<script>
  $( "#txtDATE" ).datepicker();
</script>

@endsection

    


    