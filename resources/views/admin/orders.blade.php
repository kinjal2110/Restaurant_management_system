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
                <table class="table ">
<tr>
    <thead class="thead-dark">
    <th>Name</th>
    <th>Phone</th>
    <th>Address</th>
    <th>FoodName</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total Price</th>
    </thead>
</tr>
@foreach($data as $data)
<tr>
    <tbody>
    <td>{{$data->name}}</td>
    <td>{{$data->phone}}</td>
    <td>{{$data->address}}</td>
    <td>{{$data->foodname}}</td>
    <td>{{$data->price}}</td>
    <td>{{$data->quantity}}</td>
    <td>{{$data->price * $data->quantity}}</td>
    </tbody>
</tr>
@endforeach
                </table>
                    
                </div>
            </div>
        </div>
    </div>
    @include('admin.adminscript')

</body>

</html>