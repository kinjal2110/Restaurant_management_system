
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
                    <h1>Admin Chef </h1>
                    <br>
                    <table>
                        <form action="{{url('/uploadchef')}}" enctype="multipart/form-data" method="post">
                        @csrf
                            <tr>
                                <td><label for="">name</label></td>
                                <td><input type="text" placeholder="Write a Name" required name="name"></td>
                            </tr>
                            <tr>
                                <td> <label for="">speciality</label></td>
                                <td> <input type="text" placeholder="speciality" name="speciality" required></td>
                            </tr>
                            <tr>
                                <td> <label for="">Image</label></td>
                                <td> <input type="file" name="image" required></td>
                            </tr>
                           
                            <tr>
                                <td colspan="2"> <input type="submit" value="Save" class="btn btn-primary"></td>
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