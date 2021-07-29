<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

                @foreach($data as $data)
                <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card '>
                            <div class="price">
                                <h6>{{$data->price}}</h6>
                            </div>
                            <div class='info'>
                                <h1 class='title'>{{$data->title}}</h1>
                                <p class='description'>{{$data->description}}</p>
                                <div class="main-text-button">
                                    <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="number" name="quantity" maxlength="4" max="100" min="1" value="1">
                            </div>
                            <div class="col-md-6">
                                <input type="submit" name="add_cart" value="add cart" class="btn btn-secondary">
                            </div>
                        </div>

                    </div>
                </form>
                @endforeach


            </div>
        </div>
</section>
<!-- ***** Menu Area Ends ***** -->