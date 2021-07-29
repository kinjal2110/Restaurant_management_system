
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
                    <h1>Display Chef</h1>
                    <br>
                    <div >
                        <table class="table table-bordered">
                            
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Speciality</th>
                                    <th>Image</th>
                                    <td>Action</td>
                                    <td>Action2</td>
                                    </tr>
                                </thead>
                          <tbody>
                              @foreach($data2 as $data2)
                            <tr>
                                <td>{{$data2->name}}</td>
                                <td>{{$data2->speciality}}</td>
                                 <td><img src="/chefimage/{{$data2->image}}" style="min-height: 100px; min-width: 100px;  border-radius:3px;"></td>
                                 <td>
                                <a class="btn-sm btn-danger" onclick="return confirm('You want to remove this food?')" href="{{url('/deletechef',$data2->id)}}"> delete &nbsp;<i class="fa fa-trash"></i> </a>
                            </td>
                            <td>
                                <a href="{{url('/updatechef',$data2->id)}}" class="btn-sm btn-primary">Update &nbsp;<i class="fa fa-edit"></i> </a>
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
    @include('admin.adminscript')

</body>

</html>