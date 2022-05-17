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
                        <h4 class="page-title" id="font-size">User List</h4>
                    </div>
                </div>
            </div> <!-- end page title -->

            <div class="row">
                <div class="col-12 mt-1">
                    <div class="card-box">
                        <h4 class="card-title mb-3">All Users List</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-striped " id="products-datatable">
                                    <thead>
                                        <tr style="font-size:16px">
                                            <th >User-ID</th>
                                            <th>User Name</th>
                                            <th>Password</th>
                                            <th>Role Id</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                        </tr>

                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td># {{$user->id}}</td>
                                            <td class="table-user ">
                                                <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                                <span class="text-body font-weight-bold">{{$user->username}}</span>
                                            </td>
                                            <td>{{$user->password}}</td>
                                            <td>{{$user->role_id}}</td>
                                            <td>
                                                @if($user->inactive==0)
                                                    active
                                                @else
                                                    disable

                                                @endif

                                            </td>

                                            <td>
                                                <a type='button' style="border:1px solid gray" class='btn btn-primary btn-sm btn-edit float-left mr-1' value='view'>view</a>
                                                <a type='submit' style="border:1px solid gray" class='btn btn-secondary btn-sm float-left mr-1 ed' value='edit'><i class='far fa-edit'></i></a>
                                                <form action="#" method="post" onsubmit="return confirm('Are you sure?')">
                                                    <button type='submit' style="border:1px solid gray" class='btn btn-secondary btn-sm btn-delete de' name='btnDel' value='delete'><i class='far fa-trash-alt'></i></button>
                                                </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
