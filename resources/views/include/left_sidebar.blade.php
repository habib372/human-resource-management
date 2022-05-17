<!------------ Left Sidebar Start --------------->

<style>
        ul li ul li{
            border-left:1px solid rgba(59, 70, 72, 0.5);
            position:relative;
        }

        ul li ul li::before{
        left: 0;
        top: 18px;
        width: 13px;
        content: ' ';
        position: absolute;
        display: inline-block;
        border: 1px solid rgba(59, 70, 72, 0.5);
        }


        .treeview{
            background:LightGrey;         
        }
        /* .text{
            color:white;
        }
         */

    /* ul li ul ul {
        padding-left:20px;
    }

     ul ul li ul::before {
        padding-left: 11px;
    } */

</style>


<div class="left-side-menu">

                <div class="slimscroll-menu">
                    <!---------Sidemenu --------->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">
                            <!------Dashboard ------------->
                            <li>
                                <a href="{{url('home')}}">
                                <i class="material-icons">dashboard</i>
                                    <span> Dashboard</span>
                                </a>
                            </li>
                             <!-----------Department------------------->
                             <li>
                                <a href="#">
                                    <i class="fa fa-university"></i>
                                    <span> Department </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="{{route('departments.index')}}">Department</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fe-pocket" style="color: #00acc1">&nbsp;</i>
                                            <span> Division</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{route('divisions.create')}}">Add Division</a>
                                            </li>
                                            <li>
                                                <a href="{{route('divisions.index')}}">Manage Division</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                             <!-----------Position------------------->
                             <li>
                                <a href="#">
                                <i class="fas fa-briefcase"></i>
                                    <span> Position </span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>                            
                                        <a  href="{{route('positions.index')}}">Position</a>
                                    </li>     
                                </ul>
                            </li>

                            <!----Employee------->
                            <li >
                                <a href="#">                                  
                                    <i class="fas fa-user-tie"></i>
                                    <span> Employee</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview " id="li" aria-expanded="false">                                  
                                    <li>
                                        <a href="#">
                                        <i class="fe-pocket" style="color: #00acc1">&nbsp;</i>
                                            <span> Employee</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul class="nav-second-level " aria-expanded="false">
                                            <li>
                                                 <a href="{{route('employees.create')}}">Add Employee</a>
                                            </li>
                                            <li>
                                                <a href="{{route('employees.index')}}">Manage Employee</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- <li>
                                        <a href="employee-performance">Employee Performance</a>
                                    </li> -->

                                </ul>
                            </li>
                            <!-----------attendance------------------->
                            <li>
                                <a href="#">
                                    <i class='fas fa-user-check'></i>
                                    <span> Attendance </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="{{route('attendances.create')}}">Attendance Form</a>
                                    </li>
                                    <li>
                                        <a href="{{route('attendances.index')}}">Attendance Table</a>
                                    </li>
                                    <li>
                                        <a href="{{url('monthly')}}">Monthly Attendance</a>
                                    </li>
                                    <li>
                                        <a href="missing attendance">Missing Attendance</a>
                                    </li>
                                    <li>
                                        <a href="attendance-log">Attendance Log</a>
                                    </li>
                                </ul>
                            </li>
                            <!-----------Award------------------->
                            <!-- <li>
                                <a href="#">
                                    <i class="fa fa-trophy" style="font-size:20px;"></i>
                                    <span class="badge badge-pink float-right">New</span>
                                    <span> Award </span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="new-award">New Award</a>
                                    </li>
                                </ul>
                            </li> -->
                            <!-----------Leave------------------->
                            <li>
                                <a href="#">
                                    <i class="fa fa-plane" style="font-size:22px; padding-left:0px;"></i>
                                    <span> Leave </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <!-- <li>
                                        <a href="weekly-holiday">Weekly Holiday</a>
                                    </li> -->
                                    <li>
                                        <a href="holiday"> Holiday</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fe-pocket">&nbsp; Leave Application</i>
                                            <span>  </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{route('leavetypes.index')}}">Add Leave Type</a>
                                            </li>
                                            <li>
                                                <a href="{{route('leaves.create')}}">Leave Application</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                             <!-----------Payroll------------------->
                            <li>
                                <a href="#">
                                <i class='fas fa-money-check-alt'></i>
                                    <span> Payroll </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="salary-type-setup">Salary Type Setup</a>
                                    </li>
                                    <li>
                                        <a href="salary-setup"> Salary Satup</a>
                                    </li>
                                    <li>
                                        <a href="salary-generate"> Salary Generate</a>
                                    </li>
                                    <li>
                                        <a href="manage-employee-salary"> Manage Employee Salary</a>
                                    </li>

                                </ul>
                            </li>
                            <!-----------Recruitment------------------->
                            <li>
                                <a href="#">
                                <i class="fa fa-newspaper-o"></i>
                                    <span> Recruitment </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="candidate-information">Candidte Information</a>
                                    </li>
                                    <li>
                                        <a href="candidate-shortlist"> Candidte Shortlist</a>
                                    </li>
                                    <li>
                                        <a href="interview"> Interview</a>
                                    </li>
                                    <li>
                                        <a href="candidate-selection"> Candidte Selection</a>
                                    </li>

                                </ul>
                            </li>
                             <!-----------Notic Board------------------->
                             <li>
                                <a href="#">
                                <i class="material-icons" style="font-size:25px; padding-left:0px;">notifications</i>
                                    <span> Notic Board </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="create-notic">Create Notic</a>
                                    </li>
                                </ul>
                            </li>
                            <!-----------Reports------------------->
                            <li>
                                <a href="#">
                                <i class='fas fa-chart-pie'></i>
                                    <span> Reports </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="attendance-report">Attendance Report</a>
                                    </li>
                                    <li>
                                        <a href="leave-report"> Leave Report</a>
                                    </li>
                                    <li>
                                        <a href="employee-report"> Employee Report</a>
                                    </li>
                                    <li>
                                        <a href="adhoc-report"> Adhoc Report</a>
                                    </li>
                                </ul>
                            </li>
                            <!-----------Setting------------------->
                            <li>
                                <a href="#">
                                <i class="material-icons">settings</i>
                                    <span> Setting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level treeview" aria-expanded="false">
                                    <li>
                                        <a href="#">
                                            <i class="fe-pocket">&nbsp; User</i>
                                            <span>  </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="{{route('users.create')}}">Add User</a>
                                            </li>
                                            <li>
                                                <a href="{{route('users.index')}}">User List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="role-permission"> Role Permission</a>
                                    </li>
                                    <li>
                                        <a href="application-setting"> Application Setting</a>
                                    </li>
                                    <!-- <li>
                                        <a href="mobile-app-setting"> Mobile App Setting</a>
                                    </li> -->
                                    <li>
                                        <a href="tax"> Tax</a>
                                    </li>
                                    <li>
                                        <a href="backup-and-download"> Bacup and Download</a>
                                    </li>
                                </ul>
                            </li>


                        </ul>

                    </div>
                    <!--------- End Sidebar ----------->



                </div>
                <!-- Sidebar -left -->

</div>


