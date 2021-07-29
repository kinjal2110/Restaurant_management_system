
<x-app-layout>
    <!-- <h6>Restaurant Management System</h6> -->
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>


    @include('admin.admincss')
</head>

<body>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="row ">
                <div class="col-xl-3">
                    @include('admin.navbar')</div>
                <div class="col-lg-9">
                    <h1>Display Reservation Details</h1>
                    <br>
                    <div >
                        <table class="table table-bordered">
                            
                                <thead class="table-dark">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Guest</th>
                                    <td>Date</td>
                                    <td>Time</td>
                                    <td>Message</td>
                                    </tr>
                                </thead>
                          <tbody>
                              @foreach($data as $data)
                            <tr>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->guest}}</td>
                                <td>{{$data->date}}</td>
                                <td>{{$data->time}}</td>
                                <td>{{$data->message}}</td>
                                
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