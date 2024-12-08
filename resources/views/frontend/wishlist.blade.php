
    <!-- header end -->
    @extends('frontend.layout.main')
    @section('main-container')  

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <h2>Wishlist</h2>
            <nav class="theme-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Wishlist</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="wishlist-section section-b-space">
        <div class="container">
            <div class="table-responsive">
                <table class="table cart-table yajra_datatable">
                    <thead>
                        <tr class="table-head">
                            <th>image</th>
                            <th>productid</th>
                            <th>Description</th>
                            <th>price</th>
                            <th>Quantity</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($wishlist as $wishlists)
                        <tr>
                            <td>
                            <img src="{{ asset('uploads/' . $wishlists->image) }}" width="50px">
                                <!-- <a href="product-page(accordian).html">
                                    <img src="../assets/images/fashion-1/product/17.jpg" alt="">
                                </a> -->
                            </td>
                            <td> {{$wishlists->productid}}
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$9.96</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="#!" class="icon me-1">
                                                <i class="ri-close-line"></i>
                                            </a>
                                            <a href="#!" class="cart">
                                                <i class="ri-shopping-cart-line"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{$wishlists->description}}
                            </td>
                            <td>
                                <h2>{{$wishlists->price}}</h2>
                            </td>
                            <td>
                            {{$wishlists->quantity}}
                            </td>
                            <td>
                                <div class="icon-box d-flex gap-2 justify-content-center">
                                    <a href="#!" class="icon me-1">
                                        <i class="ri-close-line"></i>
                                    </a>
                                    <a href="#!" class="cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                       {{--<tr>
                            <td>
                                <a href="product-page(accordian).html">
                                    <img src="../assets/images/fashion-1/product/18.jpg" class="img-fluid" alt="">
                                </a>
                            </td>
                            <td><a href="product-page(accordian).html">Tan Cargo Shorts</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$12.00</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color"><a href="product-page(accordian).html" class="icon me-1"><i
                                                    class="ri-close-line"></i>
                                            </a><a href="#!" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$12.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <div class="icon-box d-flex gap-2 justify-content-center">
                                    <a href="#!" class="icon me-1">
                                        <i class="ri-close-line"></i>
                                    </a>
                                    <a href="#!" class="cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="product-page(accordian).html">
                                    <img src="../assets/images/product-details/product/17.jpg" alt="" class="img-fluid">
                                </a>
                            </td>
                            <td><a href="product-page(accordian).html">Gym Coords Set (Brown)</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <p>in stock</p>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">$20.36</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color"><a href="#!" class="icon me-1"><i
                                                    class="ri-close-line"></i>
                                            </a><a href="#!" class="cart"><i class="ri-shopping-cart-line"></i></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$20.36</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <div class="icon-box d-flex gap-2 justify-content-center">
                                    <a href="#!" class="icon me-1">
                                        <i class="ri-close-line"></i>
                                    </a>
                                    <a href="#!" class="cart">
                                        <i class="ri-shopping-cart-line"></i>
                                    </a>
                                </div>
                            </td>--}} 
                            @endforeach
                        </tr>
                       
                    </tbody>
                </table>
            </div>
            <div class="wishlist-buttons">
                <a href="{{url('/addwishlist')}}" class="btn btn-solid">continue shopping</a>
                <a href="{{url('/checkout')}}" class="btn btn-solid">check out</a>
            </div>
        </div>
    </section>
    <!--section end-->
@endsection

    <!-- Footer Section Start -->
   





























