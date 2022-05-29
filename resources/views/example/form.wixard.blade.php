                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-3"> Basic Wizard</h4>

                                        <form>
                                            <div id="basicwizard">
                                                <ul class="nav nav-pills bg-secondary nav-justified form-wizard-header mb-4">
                                                    <li class="nav-item">
                                                        <a href="#basictab1" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
                                                            <i class="mdi mdi-account-circle mr-1"></i>
                                                            <span class="d-none d-sm-inline">Account</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab2" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-face-profile mr-1"></i>
                                                            <span class="d-none d-sm-inline">Profile</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#basictab3" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                            <span class="d-none d-sm-inline">Finish</span>
                                                        </a>
                                                    </li>
                                                </ul>

                                                <div class="tab-content b-0 mb-0">
                                                    <div class="tab-pane" id="basictab1">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="userName">User name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" id="userName" name="userName" value="Coderthemes">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="password"> Password</label>
                                                                    <div class="col-md-9">
                                                                        <input type="password" id="password" name="password" class="form-control" value="123456789">
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="confirm">Re Password</label>
                                                                    <div class="col-md-9">
                                                                        <input type="password" id="confirm" name="confirm" class="form-control" value="123456789">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="basictab2">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="name"> First name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id="name" name="name" class="form-control" value="Francis">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="surname"> Last name</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" id="surname" name="surname" class="form-control" value="Brinkman">
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group row mb-3">
                                                                    <label class="col-md-3 col-form-label" for="email">Email</label>
                                                                    <div class="col-md-9">
                                                                        <input type="email" id="email" name="email" class="form-control" value="cory1979@hotmail.com">
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <div class="tab-pane" id="basictab3">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="text-center">
                                                                    <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                                    <h3 class="mt-0">Thank you !</h3>

                                                                    <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                                        mattis dictum aliquet.</p>

                                                                    <div class="mb-3">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                            <label class="custom-control-label" for="customCheck1">I agree with the Terms and Conditions</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row -->
                                                    </div>

                                                    <ul class="list-inline wizard mb-0">
                                                        <li class="previous list-inline-item">
                                                            <a href="javascript: void(0);" class="btn btn-secondary">Previous</a>
                                                        </li>
                                                        <li class="next list-inline-item float-right">
                                                            <a href="javascript: void(0);" class="btn btn-secondary">Next</a>
                                                        </li>
                                                    </ul>

                                                </div> <!-- tab-content -->
                                            </div> <!-- end #basicwizard-->
                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title mb-3"> Button Wizard</h4>

                                        <div id="btnwizard">
                                            <ul class="nav nav-pills bg-secondary nav-justified form-wizard-header mb-4">
                                                <li class="nav-item">
                                                    <a href="#tab12" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-account-circle mr-1"></i>
                                                        <span class="d-none d-sm-inline">Account</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab22" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-face-profile mr-1"></i>
                                                        <span class="d-none d-sm-inline">Profile</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#tab32" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                                        <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                                        <span class="d-none d-sm-inline">Finish</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="tab-content mb-0 b-0">

                                                <div class="tab-pane fade" id="tab12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="userName2">User name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="userName2" name="userName2" value="Coderthemes">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="password2"> Password</label>
                                                                <div class="col-md-9">
                                                                    <input type="password" id="password2" name="password2" class="form-control" value="123456789">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="confirm2">Re Password</label>
                                                                <div class="col-md-9">
                                                                    <input type="password" id="confirm2" name="confirm2" class="form-control" value="123456789">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>

                                                <div class="tab-pane fade" id="tab22">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="name2"> First name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="name2" name="name2" class="form-control" value="Francis">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="surname2"> Last name</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" id="surname2" name="surname2" class="form-control" value="Brinkman">
                                                                </div>
                                                            </div>
                                    
                                                            <div class="form-group row mb-3">
                                                                <label class="col-md-3 col-form-label" for="email2">Email</label>
                                                                <div class="col-md-9">
                                                                    <input type="email" id="email2" name="email2" class="form-control" value="cory1979@hotmail.com">
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>

                                                <div class="tab-pane" id="tab32">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="text-center">
                                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                                <h3 class="mt-0">Thank you !</h3>

                                                                <p class="w-75 mb-2 mx-auto">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam
                                                                    mattis dictum aliquet.</p>

                                                                <div class="mb-3">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                        <label class="custom-control-label" for="customCheck2">I agree with the Terms and Conditions</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- end col -->
                                                    </div> <!-- end row -->
                                                </div>
                                            
                                                <div class="float-right">
                                                    <input type='button' class='btn btn-secondary button-next' name='next' value='Next' />
                                                    <input type='button' class='btn btn-secondary button-last' name='last' value='Last' />
                                                </div>
                                                <div class="float-left">
                                                    <input type='button' class='btn btn-secondary button-first' name='first' value='First' />
                                                    <input type='button' class='btn btn-secondary button-previous' name='previous' value='Previous' />
                                                </div>

                                                <div class="clearfix"></div>

                                            </div> <!-- tab-content -->
                                        </div> <!-- end #btnwizard-->

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> 
