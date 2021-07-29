<x-app-layout>
    <!-- <h6>Restaurant Management System</h6> -->
</x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>

<base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="row ">
                <div class="col-xl-3">
                    @include('admin.navbar')</div>
                <div class="col-xl-9">
                    <h1>Update Food Order</h1>
                    <br>
                    <table>
                        <form action="{{url('/update1',$data2->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <tr>
                                <td><label for="">Name</label></td>
                                <td><input type="text" placeholder="Write a name"  name="name" value="{{$data2->name}}" required></td>
                            </tr>
                            <tr>
                                <td> <label for="">Speciality</label></td>
                                <td> <input type="text" placeholder="Speciality" name="speciality" value="{{$data2->speciality}}" required></td>
                            </tr>
                            <tr>
                                <td><label for="">Old Image</label></td>
                                <td><img src="/chefimage/{{$data2->image}}" alt="" style=" width:100px; height:100px; border-radius:3px;"></td>
                            </tr>
                            <tr>
                                <td> <label for="">New Image</label></td>
                                <td> <input type="file" name="image" required></td>
                            </tr>
                        
                            <tr>
                                <td > <input type="submit" value="Update" class="btn-sm btn-primary"></td>
                                <td><input type="button" name="" value="cancel" id="" class="btn-sm btn-danger"></td>
                            </tr>
                        </form>
                    </table>

                   
                    
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscript')

</body>

</html>