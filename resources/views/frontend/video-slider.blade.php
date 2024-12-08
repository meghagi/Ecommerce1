
    <!-- header end -->

    @extends('frontend.layout.main')
    @section('main-container')  
    <!-- Home slider -->
    <section class="p-0 ">
        <div class="slide-1 home-slider">
            <div>
                <div class="home  p-center  text-center">
                    <div class="slider-contain" id="block" style="width: 100%; "
                        data-vide-bg="../assets/video/video.mp4" data-vide-options="position: 0% 50%">
                    </div>
                </div>
            </div>
            <div>
                <a href="category-page.html" class="home">
                    <img src="../assets/images/video-slider/full-banner/1.png" alt="" class="bg-img blur-up lazyload">
                </a>
            </div>
        </div>
    </section>
    <!-- Home slider end -->


    <!-- banner section start -->
    <section class="banner-padding banner-furniture absolute_banner ratio3_2">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <a href="category-page.html">
                        <div class="collection-banner p-left text-start">
                            <img src="../assets/images/video-slider/banner/1.png" alt=""
                                class="img-fluid blur-up lazyload bg-img">
                            <div class="absolute-contain">
                                <h3>casual collection</h3>
                                <h4>festive sale</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html">
                        <div class="collection-banner p-left text-start">
                            <img src="../assets/images/video-slider/banner/2.png" alt=""
                                class="img-fluid blur-up lazyload bg-img">
                            <div class="absolute-contain">
                                <h3>going out collection</h3>
                                <h4>upto 80% off</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="category-page.html">
                        <div class="collection-banner p-left text-start">
                            <img src="../assets/images/video-slider/banner/3.png" alt=""
                                class="img-fluid blur-up lazyload bg-img">
                            <div class="absolute-contain">
                                <h3>shoes & sandle</h3>
                                <h4>new collection</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->


    <!-- Product tab slider -->
    <div class="title4  section-t-space">
        <h4>special offer</h4>
        <h2 class="title-inner4">top collection</h2>
        <div class="line">
            <span></span>
        </div>
    </div>
    <section class="section-b-space pt-0 absolute-product ratio_asos">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="theme-tab">
                        <ul class="tabs tab-title">
                            <li class="current"><a href="tab-4.html">DRESSES</a></li>
                            <li><a href="tab-5.html">WINTER WEAR</a></li>
                        </ul>
                        <div class="tab-content-cls">
                            <div id="tab-4" class="tab-content active default">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/fashion-1/product/5.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Couture Edge
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Purple Mini Dress</h6>
                                                        <h4 class="price">$ 4.34<del> $5.00 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/6.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Chic Mini Dress</h6>
                                                        <h4 class="price">$ 3.40 </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/7.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Urban Chic
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6> Stripped Bodycon Dress</h6>
                                                        <h4 class="price">$ 2.10</h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/8.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Tie and Dye Chiffon Top</h6>
                                                        <h4 class="price">$ 2.79<del> $3.00 </del><span
                                                                class="discounted-price"> 7% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-5" class="tab-content">
                                <div class="g-3 g-md-4 row row-cols-2 row-cols-md-3 row-cols-xl-4">
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html">
                                                        <img src="../assets/images/fashion-1/product/9.jpg"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                    <div class="rating-label"><i
                                                            class="ri-star-fill"></i><span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Urban Chic
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Cami Tank Top</h6>
                                                        <h4 class="price">$ 1.80<del> $2.60 </del><span
                                                                class="discounted-price"> 4% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/10.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Glamour Gaze
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Scarlet Stunner</h6>
                                                        <h4 class="price">$ 1.50 </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/11.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                VogueVista
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Chic Crop Top</h6>
                                                        <h4 class="price">$ 5.60<del> $6.80 </del><span
                                                                class="discounted-price"> 5% Off
                                                            </span>
                                                        </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="basic-product theme-product-1">
                                            <div class="overflow-hidden">
                                                <div class="img-wrapper">
                                                    <a href="product-page(accordian).html"><img
                                                            src="../assets/images/fashion-1/product/12.jpg"
                                                            class="img-fluid blur-up lazyload" alt=""></a>
                                                    <div class="rating-label"><i class="fa fa-star"></i>
                                                        <span>4.5</span>
                                                    </div>
                                                    <div class="cart-info">
                                                        <a href="#!" title="Add to Wishlist" class="wishlist-icon"><i
                                                                class="ri-heart-line"></i></a>
                                                        <button data-bs-toggle="modal" data-bs-target="#addtocart"
                                                            title="Add to cart"><i
                                                                class="ri-shopping-cart-line"></i></button> <a href="#!"
                                                            data-bs-toggle="modal" data-bs-target="#quickView"
                                                            title="Quick View"><i class="ri-eye-line"></i></a> <a
                                                            href="compare.html" title="Compare"><i
                                                                class="ri-loop-left-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-detail">
                                                    <div>
                                                        <div class="brand-w-color">
                                                            <a class="product-title"
                                                                href="product-page(accordian).html">
                                                                Urban Chic
                                                            </a>
                                                            <div class="color-panel">
                                                                <ul>
                                                                    <li style="background-color: papayawhip;"></li>
                                                                    <li style="background-color: burlywood;"></li>
                                                                    <li style="background-color: gainsboro;"></li>
                                                                </ul>
                                                                <span>+2</span>
                                                            </div>
                                                        </div>
                                                        <h6>Backless Crop Top</h6>
                                                        <h4 class="price">$ 3.27 </h4>
                                                    </div>
                                                    <ul class="offer-panel">
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                        <li><span class="offer-icon"><i
                                                                    class="ri-discount-percent-fill"></i></span>
                                                            Limited Time Offer: 5% off</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product slider end -->


    <!-- full banner section start -->
    <section class="p-0 advertise-section">
        <div class="full-banner parallax text-center p-center">
            <img src="../assets/images/video-slider/full-banner/2.png" alt="" class="bg-img blur-up lazyload">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="banner-contain">
                            <h2>kids</h2>
                            <h3>fashion trends</h3>
                            <h4>special offer</h4>
                            <a href="category-page.html" class="btn btn-solid">shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- full banner section end -->


    <!-- product section start -->
    <section class="section-b-space box-product">
        <div class="full-box">
            <div class="container">
                <div class="title4">
                    <h2 class="title-inner4">special products</h2>
                    <div class="line">
                        <span></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="theme-card">
                            <div class="offer-slider">
                                <div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/1.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Gym Coords Set</h6>
                                                </a>
                                                <h4>$17.40</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/2.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6> Grey Sport Set</h6>
                                                </a>
                                                <h4>$24.50</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="theme-card">
                            <div class="offer-slider">
                                <div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/3.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Stripped Bodycon Dress</h6>
                                                </a>
                                                <h4>$24.50</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/4.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Fitted Coords Set</h6>
                                                </a>
                                                <h4>$16.20</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="theme-card">
                            <div class="offer-slider">
                                <div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/5.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6>Black Sleek Fit</h6>
                                                </a>
                                                <h4>$18.90</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/6.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6> Athleisure Set</h6>
                                                </a>
                                                <h4>$19.50</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-sm-12">
                        <div class="theme-card ">
                            <div class="offer-slider">
                                <div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/7.jpg"
                                                        class="img-fluid blur-up lazyload" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6> Blue Coords Set</h6>
                                                </a>
                                                <h4>$20.50</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-box2 product-box">
                                        <div class="media img-wrapper">
                                            <div class="front">
                                                <a href="product-page(accordian).html"><img
                                                        src="../assets/images/video-slider/product-sm/8.jpg"
                                                        class="img-fluid blur-up lazyload ps-3" alt=""></a>
                                            </div>

                                            <div class="media-body align-self-center">
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <a href="product-page(accordian).html">
                                                    <h6> Grey Gym Suit</h6>
                                                </a>
                                                <h4>$20.00</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->


    <!-- service layout -->
    <div class="container">
        <section class="service section-b-space  border-section">
            <div class="row partition4 ">
                <div class="col-lg-3 col-md-6 service-block1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -117 679.99892 679">
                        <path
                            d="m12.347656 378.382812h37.390625c4.371094 37.714844 36.316407 66.164063 74.277344 66.164063 37.96875 0 69.90625-28.449219 74.28125-66.164063h241.789063c4.382812 37.714844 36.316406 66.164063 74.277343 66.164063 37.96875 0 69.902344-28.449219 74.285157-66.164063h78.890624c6.882813 0 12.460938-5.578124 12.460938-12.460937v-352.957031c0-6.882813-5.578125-12.464844-12.460938-12.464844h-432.476562c-6.875 0-12.457031 5.582031-12.457031 12.464844v69.914062h-105.570313c-4.074218.011719-7.890625 2.007813-10.21875 5.363282l-68.171875 97.582031-26.667969 37.390625-9.722656 13.835937c-1.457031 2.082031-2.2421872 4.558594-2.24999975 7.101563v121.398437c-.09765625 3.34375 1.15624975 6.589844 3.47656275 9.003907 2.320312 2.417968 5.519531 3.796874 8.867187 3.828124zm111.417969 37.386719c-27.527344 0-49.851563-22.320312-49.851563-49.847656 0-27.535156 22.324219-49.855469 49.851563-49.855469 27.535156 0 49.855469 22.320313 49.855469 49.855469 0 27.632813-22.21875 50.132813-49.855469 50.472656zm390.347656 0c-27.53125 0-49.855469-22.320312-49.855469-49.847656 0-27.535156 22.324219-49.855469 49.855469-49.855469 27.539063 0 49.855469 22.320313 49.855469 49.855469.003906 27.632813-22.21875 50.132813-49.855469 50.472656zm140.710938-390.34375v223.34375h-338.375c-6.882813 0-12.464844 5.578125-12.464844 12.460938 0 6.882812 5.582031 12.464843 12.464844 12.464843h338.375v79.761719h-66.421875c-4.382813-37.710937-36.320313-66.15625-74.289063-66.15625-37.960937 0-69.898437 28.445313-74.277343 66.15625h-192.308594v-271.324219h89.980468c6.882813 0 12.464844-5.582031 12.464844-12.464843 0-6.882813-5.582031-12.464844-12.464844-12.464844h-89.980468v-31.777344zm-531.304688 82.382813h99.703125v245.648437h-24.925781c-4.375-37.710937-36.3125-66.15625-74.28125-66.15625-37.960937 0-69.90625 28.445313-74.277344 66.15625h-24.929687v-105.316406l3.738281-5.359375h152.054687c6.882813 0 12.460938-5.574219 12.460938-12.457031v-92.226563c0-6.882812-5.578125-12.464844-12.460938-12.464844h-69.796874zm-30.160156 43h74.777344v67.296875h-122.265625zm0 0" />
                    </svg>
                    <h4>free shipping</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Capa_1" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background:new 0 0 480 480;"
                        xml:space="preserve" width="512px" height="512px">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M472,432h-24V280c-0.003-4.418-3.588-7.997-8.006-7.994c-2.607,0.002-5.05,1.274-6.546,3.41l-112,160     c-2.532,3.621-1.649,8.609,1.972,11.14c1.343,0.939,2.941,1.443,4.58,1.444h104v24c0,4.418,3.582,8,8,8s8-3.582,8-8v-24h24     c4.418,0,8-3.582,8-8S476.418,432,472,432z M432,432h-88.64L432,305.376V432z" />
                                    <path
                                        d="M328,464h-94.712l88.056-103.688c0.2-0.238,0.387-0.486,0.56-0.744c16.566-24.518,11.048-57.713-12.56-75.552     c-28.705-20.625-68.695-14.074-89.319,14.631C212.204,309.532,207.998,322.597,208,336c0,4.418,3.582,8,8,8s8-3.582,8-8     c-0.003-26.51,21.486-48.002,47.995-48.005c10.048-0.001,19.843,3.151,28.005,9.013c16.537,12.671,20.388,36.007,8.8,53.32     l-98.896,116.496c-2.859,3.369-2.445,8.417,0.924,11.276c1.445,1.226,3.277,1.899,5.172,1.9h112c4.418,0,8-3.582,8-8     S332.418,464,328,464z" />
                                    <path
                                        d="M216.176,424.152c0.167-4.415-3.278-8.129-7.693-8.296c-0.001,0-0.002,0-0.003,0     C104.11,411.982,20.341,328.363,16.28,224H48c4.418,0,8-3.582,8-8s-3.582-8-8-8H16.28C20.283,103.821,103.82,20.287,208,16.288     V40c0,4.418,3.582,8,8,8s8-3.582,8-8V16.288c102.754,3.974,185.686,85.34,191.616,188l-31.2-31.2     c-3.178-3.07-8.242-2.982-11.312,0.196c-2.994,3.1-2.994,8.015,0,11.116l44.656,44.656c0.841,1.018,1.925,1.807,3.152,2.296     c0.313,0.094,0.631,0.172,0.952,0.232c0.549,0.198,1.117,0.335,1.696,0.408c0.08,0,0.152,0,0.232,0c0.08,0,0.152,0,0.224,0     c0.609-0.046,1.211-0.164,1.792-0.352c0.329-0.04,0.655-0.101,0.976-0.184c1.083-0.385,2.069-1.002,2.888-1.808l45.264-45.248     c3.069-3.178,2.982-8.242-0.196-11.312c-3.1-2.994-8.015-2.994-11.116,0l-31.976,31.952     C425.933,90.37,331.38,0.281,216.568,0.112C216.368,0.104,216.2,0,216,0s-0.368,0.104-0.568,0.112     C96.582,0.275,0.275,96.582,0.112,215.432C0.112,215.632,0,215.8,0,216s0.104,0.368,0.112,0.568     c0.199,115.917,91.939,210.97,207.776,215.28h0.296C212.483,431.847,216.013,428.448,216.176,424.152z" />
                                    <path
                                        d="M323.48,108.52c-3.124-3.123-8.188-3.123-11.312,0L226.2,194.48c-6.495-2.896-13.914-2.896-20.408,0l-40.704-40.704     c-3.178-3.069-8.243-2.981-11.312,0.197c-2.994,3.1-2.994,8.015,0,11.115l40.624,40.624c-5.704,11.94-0.648,26.244,11.293,31.947     c9.165,4.378,20.095,2.501,27.275-4.683c7.219-7.158,9.078-18.118,4.624-27.256l85.888-85.888     C326.603,116.708,326.603,111.644,323.48,108.52z M221.658,221.654c-0.001,0.001-0.001,0.001-0.002,0.002     c-3.164,3.025-8.148,3.025-11.312,0c-3.125-3.124-3.125-8.189-0.002-11.314c3.124-3.125,8.189-3.125,11.314-0.002     C224.781,213.464,224.781,218.53,221.658,221.654z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h4>24 X 7 service</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -14 512.00001 512">
                        <path
                            d="m136.964844 308.234375c4.78125-2.757813 6.417968-8.878906 3.660156-13.660156-2.761719-4.777344-8.878906-6.417969-13.660156-3.660157-4.78125 2.761719-6.421875 8.882813-3.660156 13.660157 2.757812 4.78125 8.878906 6.421875 13.660156 3.660156zm0 0" />
                        <path
                            d="m95.984375 377.253906 50.359375 87.230469c10.867188 18.84375 35.3125 25.820313 54.644531 14.644531 19.128907-11.054687 25.703125-35.496094 14.636719-54.640625l-30-51.96875 25.980469-15c4.78125-2.765625 6.421875-8.878906 3.660156-13.660156l-13.003906-22.523437c1.550781-.300782 11.746093-2.300782 191.539062-37.570313 22.226563-1.207031 35.542969-25.515625 24.316407-44.949219l-33.234376-57.5625 21.238282-32.167968c2.085937-3.164063 2.210937-7.230469.316406-10.511719l-20-34.640625c-1.894531-3.28125-5.492188-5.203125-9.261719-4.980469l-38.472656 2.308594-36.894531-63.90625c-5.34375-9.257813-14.917969-14.863281-25.605469-14.996094-.128906-.003906-.253906-.003906-.382813-.003906-10.328124 0-19.703124 5.140625-25.257812 13.832031l-130.632812 166.414062-84.925782 49.03125c-33.402344 19.277344-44.972656 62.128907-25.621094 95.621094 17.679688 30.625 54.953126 42.671875 86.601563 30zm102.324219 57.238282c5.523437 9.554687 2.253906 21.78125-7.328125 27.316406-9.613281 5.558594-21.855469 2.144531-27.316407-7.320313l-50-86.613281 34.640626-20c57.867187 100.242188 49.074218 85.011719 50.003906 86.617188zm-22.683594-79.296876-10-17.320312 17.320312-10 10 17.320312zm196.582031-235.910156 13.820313 23.9375-12.324219 18.664063-23.820313-41.261719zm-104.917969-72.132812c2.683594-4.390625 6.941407-4.84375 8.667969-4.796875 1.707031.019531 5.960938.550781 8.527344 4.996093l116.3125 201.464844c3.789063 6.558594-.816406 14.804688-8.414063 14.992188-1.363281.03125-1.992187.277344-5.484374.929687l-123.035157-213.105469c2.582031-3.320312 2.914063-3.640624 3.425781-4.480468zm-16.734374 21.433594 115.597656 200.222656-174.460938 34.21875-53.046875-91.878906zm-223.851563 268.667968c-4.390625-7.597656-6.710937-16.222656-6.710937-24.949218 0-17.835938 9.585937-34.445313 25.011718-43.351563l77.941406-45 50 86.601563-77.941406 45.003906c-23.878906 13.78125-54.515625 5.570312-68.300781-18.304688zm0 0" />
                        <path
                            d="m105.984375 314.574219c-2.761719-4.78125-8.878906-6.421875-13.660156-3.660157l-17.320313 10c-4.773437 2.757813-10.902344 1.113282-13.660156-3.660156-2.761719-4.78125-8.878906-6.421875-13.660156-3.660156s-6.421875 8.878906-3.660156 13.660156c8.230468 14.257813 26.589843 19.285156 40.980468 10.980469l17.320313-10c4.78125-2.761719 6.421875-8.875 3.660156-13.660156zm0 0" />
                        <path
                            d="m497.136719 43.746094-55.722657 31.007812c-4.824218 2.6875-6.5625 8.777344-3.875 13.601563 2.679688 4.820312 8.765626 6.566406 13.601563 3.875l55.71875-31.007813c4.828125-2.6875 6.5625-8.777344 3.875-13.601562-2.683594-4.828125-8.773437-6.5625-13.597656-3.875zm0 0" />
                        <path
                            d="m491.292969 147.316406-38.636719-10.351562c-5.335938-1.429688-10.820312 1.734375-12.25 7.070312-1.429688 5.335938 1.738281 10.816406 7.074219 12.246094l38.640625 10.351562c5.367187 1.441407 10.824218-1.773437 12.246094-7.070312 1.429687-5.335938-1.738282-10.820312-7.074219-12.246094zm0 0" />
                        <path
                            d="m394.199219 7.414062-10.363281 38.640626c-1.429688 5.335937 1.734374 10.816406 7.070312 12.25 5.332031 1.425781 10.816406-1.730469 12.25-7.070313l10.359375-38.640625c1.429687-5.335938-1.734375-10.820312-7.070313-12.25-5.332031-1.429688-10.816406 1.734375-12.246093 7.070312zm0 0" />
                    </svg>
                    <h4>festival offer</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
                <div class="col-lg-3 col-md-6 service-block1">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                        id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                        xml:space="preserve" width="512px" height="512px">
                        <g>
                            <g>
                                <g>
                                    <path
                                        d="M498.409,175.706L336.283,13.582c-8.752-8.751-20.423-13.571-32.865-13.571c-12.441,0-24.113,4.818-32.865,13.569     L13.571,270.563C4.82,279.315,0,290.985,0,303.427c0,12.442,4.82,24.114,13.571,32.864l19.992,19.992     c0.002,0.001,0.003,0.003,0.005,0.005c0.002,0.002,0.004,0.004,0.006,0.006l134.36,134.36H149.33     c-5.89,0-10.666,4.775-10.666,10.666c0,5.89,4.776,10.666,10.666,10.666h59.189c0.014,0,0.027,0.001,0.041,0.001     s0.027-0.001,0.041-0.001l154.053,0.002c5.89,0,10.666-4.776,10.666-10.666c0-5.891-4.776-10.666-10.666-10.666l-113.464-0.002     L498.41,241.434C516.53,223.312,516.53,193.826,498.409,175.706z M483.325,226.35L226.341,483.334     c-4.713,4.712-11.013,7.31-17.742,7.32h-0.081c-6.727-0.011-13.025-2.608-17.736-7.32L56.195,348.746L302.99,101.949     c4.165-4.165,4.165-10.919,0-15.084c-4.166-4.165-10.918-4.165-15.085,0.001L41.11,333.663l-12.456-12.456     c-4.721-4.721-7.321-11.035-7.321-17.779c0-6.744,2.6-13.059,7.322-17.781L285.637,28.665c4.722-4.721,11.037-7.321,17.781-7.321     c6.744,0,13.059,2.6,17.781,7.322l57.703,57.702l-246.798,246.8c-4.165,4.164-4.165,10.918,0,15.085     c2.083,2.082,4.813,3.123,7.542,3.123c2.729,0,5.459-1.042,7.542-3.124l246.798-246.799l89.339,89.336     C493.128,200.593,493.127,216.546,483.325,226.35z" />
                                    <path
                                        d="M262.801,308.064c-4.165-4.165-10.917-4.164-15.085,0l-83.934,83.933c-4.165,4.165-4.165,10.918,0,15.085     c2.083,2.083,4.813,3.124,7.542,3.124c2.729,0,5.459-1.042,7.542-3.124l83.934-83.933     C266.966,318.982,266.966,312.229,262.801,308.064z" />
                                    <path
                                        d="M228.375,387.741l-34.425,34.425c-4.165,4.165-4.165,10.919,0,15.085c2.083,2.082,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l34.425-34.425c4.165-4.165,4.165-10.919,0-15.085     C239.294,383.575,232.543,383.575,228.375,387.741z" />
                                    <path
                                        d="M260.054,356.065l-4.525,4.524c-4.166,4.165-4.166,10.918-0.001,15.085c2.082,2.083,4.813,3.125,7.542,3.125     c2.729,0,5.459-1.042,7.541-3.125l4.525-4.524c4.166-4.165,4.166-10.918,0.001-15.084     C270.974,351.901,264.219,351.9,260.054,356.065z" />
                                    <path
                                        d="M407.073,163.793c-2-2-4.713-3.124-7.542-3.124c-2.829,0-5.541,1.124-7.542,3.124l-45.255,45.254     c-2,2.001-3.124,4.713-3.124,7.542s1.124,5.542,3.124,7.542l30.17,30.167c2.083,2.083,4.813,3.124,7.542,3.124     c2.731,0,5.459-1.042,7.542-3.124l45.253-45.252c4.165-4.165,4.165-10.919,0-15.084L407.073,163.793z M384.445,231.673     l-15.085-15.084l30.17-30.169l15.084,15.085L384.445,231.673z" />
                                    <path
                                        d="M320.339,80.186c2.731,0,5.461-1.042,7.543-3.126l4.525-4.527c4.164-4.166,4.163-10.92-0.003-15.084     c-4.165-4.164-10.92-4.163-15.084,0.003l-4.525,4.527c-4.164,4.166-4.163,10.92,0.003,15.084     C314.881,79.146,317.609,80.186,320.339,80.186z" />
                                    <path
                                        d="M107.215,358.057l-4.525,4.525c-4.165,4.164-4.165,10.918,0,15.085c2.083,2.082,4.813,3.123,7.542,3.123     s5.459-1.041,7.542-3.123l4.525-4.525c4.165-4.166,4.165-10.92,0-15.085C118.133,353.891,111.381,353.891,107.215,358.057z" />
                                </g>
                            </g>
                        </g>
                    </svg>
                    <h4>online payment</h4>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
                </div>
            </div>
        </section>
    </div>
    <!-- service layout end-->


    <!-- blog section -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title4  section-t-space">
                    <h4>Recent Story</h4>
                    <h2 class="title-inner4">from the blog</h2>
                    <div class="line">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="blog pt-0 blog-left ratio2_3 slick-default-margin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-3 no-arrow">
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img src="../assets/images/fashion-1/blog/1.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <h6>by: John Dio , 2 Comment</h6>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,Lorem ipsum dolor sit
                                        consectetur adipiscing elit, </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img src="../assets/images/fashion-1/blog/2.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <h6>by: John Dio , 2 Comment</h6>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,Lorem ipsum dolor sit
                                        consectetur adipiscing elit, </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img src="../assets/images/fashion-1/blog/3.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <h6>by: John Dio , 2 Comment</h6>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,Lorem ipsum dolor sit
                                        consectetur adipiscing elit, </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a href="#!">
                                <div class="classic-effect">
                                    <div>
                                        <img src="../assets/images/fashion-1/blog/1.png"
                                            class="img-fluid blur-up lazyload" alt="">
                                    </div>
                                    <span></span>
                                </div>
                            </a>
                            <div class="blog-details">
                                <h4>25 January 2018</h4>
                                <h6>by: John Dio , 2 Comment</h6>
                                <a href="#!">
                                    <p>Lorem ipsum dolor sit consectetur adipiscing elit,Lorem ipsum dolor sit
                                        consectetur adipiscing elit, </p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog section end -->


    <!-- instagram section -->
    <section class="instagram ratio_square">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="insta-title">
                        <h4>follow us <span>#multikart</span></h4>
                    </div>
                    <div class="slide-5 no-arrow slick-instagram">
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/1.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/2.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/3.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/4.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/5.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/1.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/2.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/3.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#!">
                                <div class="instagram-box">
                                    <img src="../assets/images/video-slider/instagram/4.png" alt="Avatar" class="bg-img"
                                        style="width:100%">
                                    <div class="overlay">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram section end -->


    <!--  logo section -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slide-6 no-arrow">
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/9.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/10.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/11.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/12.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/13.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/14.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/15.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div>
                            <div class="logo-block">
                                <a href="#!">
                                    <img src="../assets/images/logos/16.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  logo section end-->
@endsection

    <!-- footer start -->
    