@extends('layouts.app2')

@section('contents')

 {{-- CTA --}}
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div id="slideshow" class="position-relative">
                <div class="slide active">
                    <div class="lightblue-box">
                        <div class="slide-text">
                        <img src="{{ asset('assets/images/img1.png')}}" alt="FIRST IMAGE" class="box1-image">
                    </div>
                    </div>
                </div>
                <div class="slide">
                    <div class="lightblue-box"><img src="{{ asset('assets/images/slide.png')}}" alt="SECOND IMAGE" class="box1-image"></div>
                </div>
                <div class="slide">
                    <div class="lightblue-box"><img src="{{ asset('assets/images/slide.png')}}" alt="THIRD IMAGE" class="box1-image"></div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)" style="position: absolute; left: 10px; top: 50%; color: white;">&#10094;</a>
                <a class="next" onclick="plusSlides(1)" style="position: absolute; right: 10px; top: 50%; color: white;">&#10095;</a>
                <div class="dot-container">
                    <div class="dot" onclick="currentSlide(1)"></div>
                    <div class="dot" onclick="currentSlide(2)"></div>
                    <div class="dot" onclick="currentSlide(3)"></div>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex"> <!-- Use flex for horizontal alignment -->
            <div class="d-flex flex-column"> <!-- Create a column for promo images -->
                <div class="lightblue-box1 mb-2"><img src="{{ asset('assets/images/img3.png')}}" alt="FIRST PROMO" class="box1-image"></div>
                <div class="lightblue-box2 mb-2"><img src="{{ asset('assets/images/img4.PNG')}}" alt="SECOND PROMO" class="box1-image"></div>
            </div>
        </div>
    </div>
</div>
{{-- End of CTA --}}

{{-- Welcome --}}
<div class="container text-center mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 box_2 p-4" style="background-color: #F7FBFD;">
            <div class="text-row-1">
                <h1 class="mb-3" style="font-family: 'Cantora One', cursive; font-size: 36px;">Welcome!</h1>
            </div>
            <div class="text-row-2 mb-3" style="color: #000; font-size: 20px; font-family: 'Cambay', sans-serif;">
                Explore our collection of unique, handcrafted gifts made with love. Find something special <br>
                today and make every moment unforgettable! Happy shopping!
            </div>
            <div class="button-row1">
                <a href="" class="btn btn-custom">Shop Now</a>
            </div>
        </div>
    </div>
</div>
{{-- End of Welcome --}}

<!-- banner section start -->
<section class="ratio2_1 banner-style-2">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/4.png" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">Buy <span>Now!</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">For Him</h2>
                            <span>Surprise him with a personalized treasure.
                            </span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/4.png" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">Buy <span>Now!</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">For Her</h2>
                            <span>Delight her with a one-of-a-kind creation.</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="collection-banner p-bottom p-center text-center">
                    <a href="shop-left-sidebar.html" class="banner-img">
                        <img src="assets/images/fashion/banner/5.jpg" class="bg-img blur-up lazyload" alt="">
                    </a>
                    <div class="banner-detail">
                        <a href="javacript:void(0)" class="heart-wishlist">
                            <i class="far fa-heart"></i>
                        </a>
                        <span class="font-dark-30">Buy <span>Now!</span></span>
                    </div>
                    <a href="shop-left-sidebar.html" class="contain-banner">
                        <div class="banner-content with-big">
                            <h2 class="mb-2">Special Occasions</h2>
                            <span>Get the perfect gift for any celebration.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner section end -->

{{-- Featured Products --}}
<section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Featured Products</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <!-- featured product -->
    </div>
</section>
{{-- End of Featured Products --}}
<!-- category section start -->
<section class="category-section ratio_40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="title title-2 text-center">
                    <h2>Our Category</h2>
                    <h5 class="text-color">Our collection</h5>
                </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-xxl-2 col-lg-3">
                <div class="category-wrap category-padding category-block theme-bg-color">
                    <div>
                        <h2 class="light-text">Top</h2>
                        <h2 class="top-spacing">Our Top</h2>
                        <span>Categories</span>
                    </div>
                </div>
            </div>
            <div class="col-xxl-10 col-lg-9">
                <div class="category-wrapper category-slider1 white-arrow category-arrow">
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="{{ asset('assets/images/fashion/category/1.jpg')}}" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">For Him</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="{{ asset('assets/images/fashion/category/2.jpg')}}" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">For Her</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Special Occasions</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/4.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">Customized</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                            <img src="assets/images/fashion/category/3.jpg" class="bg-img blur-up lazyload"
                                alt="category image">
                            <div class="category-content category-text-1">
                                <h3 class="theme-color">For Parents</h3>
                                <span class="text-dark">Fashion</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category section end -->

<!----- About ---->
<section id="billboard">
    <div class="container">
        <div class="main-slider pattern-overlay">
            <div class="slider-item flex">
                <!-- Background text -->
                <span class="background-text">Handcraft</span>

                <!-- Text Section on the Left -->
                <div class="banner-content md:w-1/2 flex flex-col justify-center">
                    <h2 class="banner-title">We are Gawang Gamat</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                        ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                        urna, a eu.</p>
                    <div class="btn-wrap">
                        <a href="about-us.html" class="btn btn-outline-warning">
                            Read More
                            <i class="bi bi-arrow-right"></i> <!-- Bootstrap icon -->
                        </a>

                    </div>
                </div>

                <!-- Image Section on the Right -->
                <div class="banner-image md:w-1/2 flex justify-center items-center">
                    <img src="assets/images/doll.png" alt="Life of the Wild" class="rounded-lg" style="width: 80%; height: auto; max-height: 350px;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-----End of about ---->

{{-- Best Seller --}}

<section class="ratio_asos overflow-hidden pb-5">
    <div class="px-0 container-fluid p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Best Selling Products</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
            <!-- featured product best seler -->
        </div>
    </div>
</section>

{{-- <section class="ratio_asos overflow-hidden">
    <div class="container p-sm-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="title-3 text-center">
                    <h2>Best Selling Products</h2>
                    <h5 class="theme-color">Our Collection</h5>
                </div>
            </div>
        </div>
        <div class="row g-sm-4 g-3">
            @foreach ($best_seller as $best)
            <div class="col-xl-2 col-lg-2 col-6">
                <div class="product-box">
                    <div class="img-wrapper">
                        <a href="#">
                            <img src="{{ asset('images/' . $best->main_image) }}" class="w-100 bg-img blur-up lazyload" alt="{{$best->title}}">
                        </a>
                        <div class="circle-shape"></div>
                        <span class="background-text">{{$best->category}}</span>
                        <div class="cart-wrap">
                            <ul>
                                <li><a href="{{route('cart')}}" class="addtocart-btn"><i data-feather="shopping-cart"></i></a></li>
                                <li><a href="{{route('product-details', $best->id)}}"><i data-feather="eye"></i></a></li>
                                <li><a href="" class="wishlist"><i data-feather="heart"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-style-3 product-style-chair">
                        <div class="product-title d-block mb-0">
                            <div class="r-price">
                                <div class="theme-color">&#8369;{{$best->price}}</div>
                                <div class="main-price">
                                    <ul class="rating mb-1 mt-0">
                                        <li><i class="fas fa-star theme-color"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <p class="font-light mb-sm-2 mb-0">{{$best->category}}</p>
                            <a href="#" class="font-default">
                                <h5>{{$best->title}}</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section> --}}
{{-- End of Best Seller --}}

{{-- <div id="qvmodal"></div> --}}

@endsection
