<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <base href="/public">
    <title>Klassy Cafe - Restaurant HTML Template</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>

                            <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>
                            <li class="scroll-to-section">

                                @auth

                                <a href="{{url('/showcart',Auth::user()->id)}}">
                                    Cart{{$count}}
                                    @endauth

                                    @guest
                                    cart[0]
                                    @endguest
                                </a>
                            </li>
                            <li class="scroll-to-section">
                                @if (Route::has('login'))

                                @auth
                            <li>
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                            @else
                            <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                            </li>
                            @if (Route::has('register'))
                            <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            </li> @endif
                            @endauth
                            @endif
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div class="container" id="top">
        <table class="table table-striped">
            <tr>
                <th>Food Name</th>
                <th>Price</th>
                <th>quantity </th>
                <th>Action</th>
            </tr>
            <form action="{{url('orderconfirm')}}" method="post">
                @csrf
            @foreach($data as $data)
            <tr>
                <td><input type="text" name="foodname[]" value="  {{$data->title}}" id="" hidden>
                {{$data->title}}
                  </td>

                <td><input type="text" name="price[]" value="  {{$data->price}}" id="" hidden>
                    {{$data->price}}</td>
                <td><input type="text" name="quantity[]" value="   {{$data->quantity}}" id="" hidden>
                    {{$data->quantity}}</td>

                @endforeach


                @foreach($data2 as $data2)

                <td><a href="{{url('/remove',$data2->id)}}" class="btn btn-warning" onclick="return confirm('Are you sure you want to remove this item from the cart?')">Delete</a></td>

            </tr>
            @endforeach
        </table>
    </div>

    <div class="d-flex justify-content-center">
        <button class="btn btn-primary " id="order" type="button">Order Now</button>
    </div>
<br>
<div class="row d-flex justify-content-center">
    <div class="col-md-7">
    <table class="table table-bordered" id="appear" style="display: none;">
        <tr>
            <td> <label for="">Name</label></td>
            <td> <input type="text" name="name" placeholder="Name"></td>
        </tr>
        <tr>
           
            <td> <label for="">Phone</label></td>
            <td> <input type="number" name="phone" placeholder="Phone number" id=""></td>
        </tr>
        <tr>
            <td> <label for="">Address</label></td>
            <td>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td><button class="btn btn-success">Order Confirm</button></td>

            <td><button class="btn btn-danger" type="button" id="close">Close</button></td>
        </tr>
        
    </table>
    </div>
</div>
</form>
<script type="text/javascript">
$('#order').click(
    function()
    {
        $('#appear').show();
    }
);
$('#close').click(
    function()
    {
        $('#appear').hide();
    }
);
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);

            });
        });
    </script>
</body>

</html>
