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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title" style="font-size:19px; color:#afa6fd">Basic Information</h4>

                                        <form action="#" method="post">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <label for="inputEmail4" class="col-form-label">Full Name*</label>
                                                    <input type="text" class="form-control" name="txtFullName" id="inputEmail4" placeholder="Full Name">
                                                </div>
                                                <div class=" col-md-4">
                                                    <label for="inputGender" name="cmbGender" class="col-form-label">Gender</label>
                                                    <select id="inputGender" class="form-control">
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
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

                                            <button type="submit" class="btn btn-primary waves-effect waves-light float-right">Submit</button>

                                        </form>

                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>


        </div>
</div>
@endsection
