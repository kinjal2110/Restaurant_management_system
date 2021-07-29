<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>


    @include('admin.admincss')
</head>

<body>
    <div>
        <div class="container-fluid page-body-wrapper">

            <div class="main-panel">

                <div class="row ">
                    <div class="col-xl-3">
                        @include('admin.navbar')</div>
                    <div class="col-xl-9">
                        <h1>User</h1>
                        <div>
                            <table class="table table-bordered">
                                <thead class=" thead-dark">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <!-- <th>Password</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- $password = Hash::make('password'); -->
                                <tbody>
                                    @foreach($data as $data)
                                    <tr>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->email}}</td>
                                        <!-- <td>{{$data->password}}</td> -->

                                        @if($data->usertype=='0')
                                        <td>
                                            <a class="btn btn-danger" onclick="return confirm('You want to delete this user?')" href="{{url('/deleteuser',$data->id)}}"> delete &nbsp;<i class="fa fa-trash"></i> </a>
                                        </td>
                                        @else
                                        <td><a>Not Allowed</a> </td>
                                        @endif
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.adminscript')



</body>

</html>