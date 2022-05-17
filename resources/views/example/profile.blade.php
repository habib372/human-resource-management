@extends("include.home")

@section('body')
<!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                       <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">HSHRM</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Department</a></li>
                                    <!-- <li class="breadcrumb-item active">Attendance Report</li> -->
                                </ol>
                        </div>
                        <h4 class="page-title" id="font-size">Department</h4>
                    </div>
                </div>
            </div> <!-- end page title -->

            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{asset('assets/images/users/demo.jpg')}}" class="rounded-circle avatar-lg img-thumbnail"
                                        alt="profile-image">

                                    <h4 class="mb-0">Md. Habibur Rahman</h4>
                                    <p class="text-muted">@Programmer</p>

                                    <div class="text-left mt-3">

                                        <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">Geneva
                                                D. McKnight</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Position :</strong><span class="ml-2">Programmer</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Email :</strong><span class="ml-2">habib@gmail.com</span></p>

                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong> <span class="ml-2 ">+8801767144758</span></p>

                                        <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">Dhaka</span></p>
                                    </div>
                                </div>
                </div>


@endsection




