@extends("include.home")

@section('body')
    <div class="content">
        <div class="container-fluid">
        
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                       <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('home')}}">HSHRM</a></li>
                                <li class="breadcrumb-item"><a href="#">Setting</a></li>
                                <li class="breadcrumb-item active"><a href="#">User List</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title" id="font-size">Add User</h4>
                    </div>
                </div>
            </div> <!-- end page title --> 

           <div class="row mt-1">
                <div class="col-lg-8">
                    <div class="card-box">
                        <h4 class="header-title mb-3 m-t-0">Create New User</h4>
                               
                            <form action="{{route('users.store')}}" method="post" class="parsley-examples">
                                @csrf
                                <div class="form-group row">
                                    <label for="userName" class="col-4 col-form-label" >User Name<span class="text-danger">*</span></label>
                                    <div class="col-7">
                                        <input type="text" name="txtUsername" parsley-trigger="change" required placeholder="Enter user name" class="form-control" id="userName">
                                    </div>
                                </div>
                                        
                                <div class="form-group row">
                                    <label for="pass1" class="col-4 col-form-label">Password<span class="text-danger">*</span></label>
                                    <div class="col-7">
                                        <input id="pass1" type="password" name="pwdPassword" placeholder="Password" required class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passWord2" class="col-4 col-form-label">Confirm Password <span class="text-danger">*</span></label>
                                    <div class="col-7">
                                        <input data-parsley-equalto="#pass1" type="password" name="pwdRePassword" required placeholder="Password" class="form-control" id="passWord2">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label  class="col-4 col-form-label">Role Type </label>
                                    <div class="col-7">
                                        <select  type="dropdown" class="form-control"  id="dropdown">
                                            <option>Admin</option>
                                            <option>Editor</option>
                                            <option>Member</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-8 offset-4">
                                        <div class="checkbox checkbox-purple">
                                            <input id="checkbox6" type="checkbox">
                                            <label for="checkbox6">
                                                Active
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row ">
                                    <div class="col-4"></div>
                                        <div class="col-7 text-right">
                                            <input type="submit"  class="btn btn-primary waves-effect waves-light" value="submit" />
                                            <button type="reset" class="btn btn-secondary waves-effect ml-1">Cancel</button>
                                        </div>
                                    </div>
                            </form>
                    </div> <!-- end card-box -->

                </div> <!-- end col -->
           </div>
        </div>
    </div>
@endsection