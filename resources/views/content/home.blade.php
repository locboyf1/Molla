@extends('content.app')

@section('title', 'Trang chủ')

@section('content')

    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                                                "dots": true,
                                                "nav": false, 
                                                "responsive": {
                                                    "1200": {
                                                        "nav": true,
                                                        "dots": false
                                                    }
                                                }
                                            }'>
            <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-1.png);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-third">Deals and Promotions</h3>
                            <h1 class="intro-title">Beats by</h1>
                            <h1 class="intro-title">Dre Studio 3</h1>

                            <div class="intro-price">
                                <sup class="intro-old-price">$349,95</sup>
                                <span class="text-third">
                                    $279<sup>.99</sup>
                                </span>
                            </div>

                            <a href="category.html" class="btn btn-primary btn-round">
                                <span>Shop More</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-slide" style="background-image: url(assets/images/demos/demo-4/slider/slide-2.png);">
                <div class="container intro-content">
                    <div class="row justify-content-end">
                        <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                            <h3 class="intro-subtitle text-primary">New Arrival</h3>
                            <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1>

                            <div class="intro-price">
                                <sup>Today:</sup>
                                <span class="text-primary">
                                    $999<sup>.99</sup>
                                </span>
                            </div>

                            <a href="category.html" class="btn btn-primary btn-round">
                                <span>Shop More</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <span class="slider-loader"></span>
    </div>

    <div class="container">
        <h2 class="title text-center mb-4">Explore Popular Categories</h2>

        <div class="cat-blocks-container">
            <div class="row">
                @foreach ($category_products as $category_product)

                    <div class="col-6 col-sm-4 col-lg-2">
                        <a href="category.html" class="cat-block">
                            <figure>
                                <span>
                                    <img src="{{ $category_product->image }}" alt="{{ $category_product->title }}">
                                </span>
                            </figure>

                            <h3 class="cat-block-title">{{ $category_product->title }}</h3>
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="mb-4"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="assets/images/demos/demo-4/banners/banner-1.png" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Smart Offer</a></h4>
                        <h3 class="banner-title"><a href="#">Save $150 <strong>on Samsung <br>Galaxy
                                    Note9</strong></a></h3>
                        <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="assets/images/demos/demo-4/banners/banner-2.jpg" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Time Deals</a></h4>
                        <h3 class="banner-title"><a href="#"><strong>Bose SoundSport</strong> <br>Time Deal -30%</a>
                        </h3>
                        <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="assets/images/demos/demo-4/banners/banner-3.png" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle"><a href="#">Clearance</a></h4>
                        <h3 class="banner-title"><a href="#"><strong>GoPro - Fusion 360</strong> <br>Save $70</a></h3>
                        <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-3"></div>

    <div class="container new-arrivals">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">New Arrivals</h2>
            </div>

            <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="all-link" data-toggle="tab" href="#all-tab" role="tab"
                            aria-controls="all-tab" aria-selected="true">Tất cả</a>
                    </li>
                    @foreach ($category_products as $category_product)

                        <li class="nav-item">
                            <a class="nav-link" id="{{ $category_product->alias }}-link" data-toggle="tab"
                                href="#{{ $category_product->alias }}-tab" role="tab"
                                aria-controls="{{ $category_product->alias }}-tab"
                                aria-selected="false">{{ $category_product->title }}</a>
                        </li>
                    @endforeach

                </ul>
            </div>
        </div>

        <div class="tab-content tab-content-carousel just-action-icons-sm">
            <div class="tab-pane p-0 fade show active" id="all-tab" role="tabpanel" aria-labelledby="all-link">
                <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                                                        "nav": true, 
                                                        "dots": true,
                                                        "margin": 20,
                                                        "loop": false,
                                                        "responsive": {
                                                            "0": {
                                                                "items":2
                                                            },
                                                            "480": {
                                                                "items":2
                                                            },
                                                            "768": {
                                                                "items":3
                                                            },
                                                            "992": {
                                                                "items":4
                                                            },
                                                            "1200": {
                                                                "items":5
                                                            }
                                                        }
                                                    }'>
                    @foreach ($products as $product)
                        @php
                            $temp = $product->product_options->firstWhere('position', 1);
                        @endphp
                        <div class="product product-2">

                            <figure class="product-media">
                                <span class="product-label label-circle label-top">Top</span>
                                <a href="product.html">
                                    <img src="{{ $product->image1 }}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                            cart</span></a>
                                    <a href="popup/quickView.html" class="btn-product btn-quickview"
                                        title="Quick view"><span>quick view</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    @if ($product->category_product)
                                        <a href="#">{{ $product->category_product->title }}</a>
                                    @else
                                        <a href="#">Không có danh mục</a>
                                    @endif
                                </div>
                                <h3 class="product-title"><a
                                        href="{{ route('products.detail', ['id' => $product->id, 'alias' => $product->alias]) }}">{{ $product->title }}</a>
                                </h3>
                                <div class="product-price">
                                    @if ($temp)
                                        @if ($temp->price_sale != null && $temp->price_sale != 0)
                                            <span class="new-price">{{ number_format($temp->price_sale) }}</span>
                                            <span class="old-price">{{ number_format($temp->price) }}</span>
                                        @else
                                            <span class="new-price">{{ number_format($temp->price) }}</span>
                                        @endif
                                    @else
                                        <span class="new-price">Liên hệ</span>
                                    @endif
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: {{  $product->star * 20 }}%;">
                                        </div>
                                    </div>
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            @foreach ($category_products as $category_product)

                <div class="tab-pane p-0 fade" id="{{ $category_product->alias }}-tab" role="tabpanel"
                    aria-labelledby="{{ $category_product->alias }}-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                        data-owl-options='{
                                                                            "nav": true, 
                                                                            "dots": true,
                                                                            "margin": 20,
                                                                            "loop": false,
                                                                            "responsive": {
                                                                                "0": {
                                                                                    "items":2
                                                                                },
                                                                                "480": {
                                                                                    "items":2
                                                                                },
                                                                                "768": {
                                                                                    "items":3
                                                                                },
                                                                                "992": {
                                                                                    "items":4
                                                                                },
                                                                                "1200": {
                                                                                    "items":5
                                                                                }
                                                                            }
                                                                        }'>

                        @foreach ($category_product->products as $product)
                            @php
                                $temp = $product->product_options->firstWhere('position', 1);
                            @endphp
                            <div class="product product-2">
                                <figure class="product-media">
                                    <span class="product-label label-circle label-new">New</span>
                                    <a href="product.html">
                                        <img src="{{ $product->image1 }}" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                    </div>

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                                cart</span></a>
                                        <a href="popup/quickView.html" class="btn-product btn-quickview"
                                            title="Quick view"><span>quick view</span></a>
                                    </div>
                                </figure>

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">{{ $category_product->title }}</a>
                                    </div>
                                    <h3 class="product-title"><a href="{{ route('products.detail',['id'=>$product->id,'alias'=>$product->alias]) }}">{{ $product->title }}</a></h3>
                                    <div class="product-price">
                                        @if ($temp)
                                            @if ($temp->price_sale != null && $temp->price_sale != 0)
                                                <span class="new-price">{{ number_format($temp->price_sale) }}</span>
                                                <span class="old-price">{{ number_format($temp->price) }}</span>
                                            @else
                                                <span class="new-price">{{ number_format($temp->price) }}</span>
                                            @endif
                                        @else
                                            <span class="new-price">Liên hệ</span>
                                        @endif
                                    </div>
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: {{$product->star * 20 }}%;"></div>
                                        </div>
                                        <span class="ratings-text">( 4 Reviews )</span>
                                    </div>

                                    <div class="product-nav product-nav-dots">
                                        <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                name</span></a>
                                        <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color
                                                name</span></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            @endforeach
        </div>
    </div>

    <div class="mb-6"></div>

    <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url(assets/images/demos/demo-4/bg-1.jpg);">
            <img src="assets/images/demos/demo-4/camera.png" alt="camera" class="cta-img">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text text-right text-white">
                            <p>Shop Today’s Deals <br><strong>Awesome Made Easy. HERO7 Black</strong></p>
                        </div>
                        <a href="#" class="btn btn-primary btn-round"><span>Shop Now - $429.99</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="heading text-center mb-3">
            <h2 class="title">Deals & Outlet</h2>
            <p class="title-desc">Today’s deal and more</p>
        </div>

        <div class="row">
            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('assets/images/demos/demo-4/deal/bg-1.jpg');">
                    <div class="deal-top">
                        <h2>Deal of the Day.</h2>
                        <h4>Limited quantities. </h4>
                    </div>

                    <div class="deal-content">
                        <h3 class="product-title"><a href="product.html">Home Smart Speaker with Google Assistant</a></h3>

                        <div class="product-price">
                            <span class="new-price">$129.00</span>
                            <span class="old-price">Was $150.99</span>
                        </div>

                        <a href="product.html" class="btn btn-link"><span>Shop Now</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div>

                    <div class="deal-bottom">
                        <div class="deal-countdown daily-deal-countdown" data-until="+10h"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 deal-col">
                <div class="deal" style="background-image: url('assets/images/demos/demo-4/deal/bg-2.jpg');">
                    <div class="deal-top">
                        <h2>Your Exclusive Offers.</h2>
                        <h4>Sign in to see amazing deals.</h4>
                    </div>

                    <div class="deal-content">
                        <h3 class="product-title"><a href="product.html">Certified Wireless Charging Pad for iPhone /
                                Android</a></h3>

                        <div class="product-price">
                            <span class="new-price">$29.99</span>
                        </div>

                        <a href="login.html" class="btn btn-link"><span>Sign In and Save money</span><i
                                class="icon-long-arrow-right"></i></a>
                    </div>

                    <div class="deal-bottom">
                        <div class="deal-countdown offer-countdown" data-until="+11d"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="more-container text-center mt-1 mb-5">
            <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i
                    class="icon-long-arrow-right"></i></a>
        </div>
    </div>

    <div class="container">
        <hr class="mb-0">
        <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" data-owl-options='{
                                                "nav": false, 
                                                "dots": false,
                                                "margin": 30,
                                                "loop": false,
                                                "responsive": {
                                                    "0": {
                                                        "items":2
                                                    },
                                                    "420": {
                                                        "items":3
                                                    },
                                                    "600": {
                                                        "items":4
                                                    },
                                                    "900": {
                                                        "items":5
                                                    },
                                                    "1024": {
                                                        "items":6
                                                    }
                                                }
                                            }'>
            <a href="#" class="brand">
                <img src="assets/images/brands/1.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/2.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/3.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/4.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/5.png" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="assets/images/brands/6.png" alt="Brand Name">
            </a>
        </div>
    </div>

    <div class="bg-light pt-5 pb-6">
        <div class="container trending-products">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Trending Products</h2>
                </div>

                <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-top-link" data-toggle="tab" href="#trending-top-tab"
                                role="tab" aria-controls="trending-top-tab" aria-selected="true">Top Rated</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-best-link" data-toggle="tab" href="#trending-best-tab"
                                role="tab" aria-controls="trending-best-tab" aria-selected="false">Best Selling</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-sale-link" data-toggle="tab" href="#trending-sale-tab"
                                role="tab" aria-controls="trending-sale-tab" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-5col d-none d-xl-block">
                    <div class="banner">
                        <a href="#">
                            <img src="assets/images/demos/demo-4/banners/banner-4.jpg" alt="banner">
                        </a>
                    </div>
                </div>

                <div class="col-xl-4-5col">
                    <div class="tab-content tab-content-carousel just-action-icons-sm">
                        <div class="tab-pane p-0 fade show active" id="trending-top-tab" role="tabpanel"
                            aria-labelledby="trending-top-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                                                    "nav": true, 
                                                                    "dots": false,
                                                                    "margin": 20,
                                                                    "loop": false,
                                                                    "responsive": {
                                                                        "0": {
                                                                            "items":2
                                                                        },
                                                                        "480": {
                                                                            "items":2
                                                                        },
                                                                        "768": {
                                                                            "items":3
                                                                        },
                                                                        "992": {
                                                                            "items":4
                                                                        }
                                                                    }
                                                                }'>
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-6.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Headphones</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless
                                                headphones</a></h3>
                                        <div class="product-price">
                                            $199.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-7.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Video Games</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Microsoft - Refurbish Xbox One S
                                                500GB</a></h3>
                                        <div class="product-price">
                                            $279.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-8.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Smartwatches</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple Watch Series 4 Gold
                                                Aluminum
                                                Case</a></h3>
                                        <div class="product-price">
                                            $499.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-9.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">TV & Home Theater</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart 4K
                                                Ultra HD</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$1,699.99</span>
                                            <span class="old-price">Was $1,999.99</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 10 Reviews )</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tablets</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with
                                                Wi-Fi
                                                256GB </a></h3>
                                        <div class="product-price">
                                            $899.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-0 fade" id="trending-best-tab" role="tabpanel"
                            aria-labelledby="trending-best-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                                                    "nav": true, 
                                                                    "dots": false,
                                                                    "margin": 20,
                                                                    "loop": false,
                                                                    "responsive": {
                                                                        "0": {
                                                                            "items":2
                                                                        },
                                                                        "480": {
                                                                            "items":2
                                                                        },
                                                                        "768": {
                                                                            "items":3
                                                                        },
                                                                        "992": {
                                                                            "items":4
                                                                        }
                                                                    }
                                                                }'>
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tablets</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with
                                                Wi-Fi
                                                256GB </a></h3>
                                        <div class="product-price">
                                            $899.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-2.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Audio</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth
                                                Speaker</a></h3>
                                        <div class="product-price">
                                            $79.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-4.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cell Phone</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a>
                                        </h3>
                                        <div class="product-price">
                                            <span class="new-price">$35.41</span>
                                            <span class="old-price">Was $41.67</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 10 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #edd2c8;"><span
                                                    class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color
                                                    name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-5.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">TV & Home Theater</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Samsung - 55" Class LED 2160p
                                                Smart</a></h3>
                                        <div class="product-price">
                                            $899.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 5 Reviews )</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-1.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Laptops</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a>
                                        </h3>
                                        <div class="product-price">
                                            $1,199.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane p-0 fade" id="trending-sale-tab" role="tabpanel"
                            aria-labelledby="trending-sale-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl"
                                data-owl-options='{
                                                                    "nav": true, 
                                                                    "dots": false,
                                                                    "margin": 20,
                                                                    "loop": false,
                                                                    "responsive": {
                                                                        "0": {
                                                                            "items":2
                                                                        },
                                                                        "480": {
                                                                            "items":2
                                                                        },
                                                                        "768": {
                                                                            "items":3
                                                                        },
                                                                        "992": {
                                                                            "items":4
                                                                        }
                                                                    }
                                                                }'>
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-8.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Smartwatches</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple Watch Series 4 Gold
                                                Aluminum
                                                Case</a></h3>
                                        <div class="product-price">
                                            $499.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-6.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Headphones</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless
                                                headphones</a></h3>
                                        <div class="product-price">
                                            $199.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #69b4ff;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-7.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Video Games</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Microsoft - Refurbish Xbox One S
                                                500GB</a></h3>
                                        <div class="product-price">
                                            $279.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-2">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-4/products/product-3.jpg" alt="Product image"
                                                class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add
                                                    to
                                                    cart</span></a>
                                            <a href="popup/quickView.html" class="btn-product btn-quickview"
                                                title="Quick view"><span>quick view</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tablets</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with
                                                Wi-Fi
                                                256GB </a></h3>
                                        <div class="product-price">
                                            $899.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" style="background: #edd2c8;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                                    name</span></a>
                                            <a href="#" class="active" style="background: #333333;"><span
                                                    class="sr-only">Color name</span></a>
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

    <div class="mb-5"></div>

    <div class="container for-you">
        <div class="heading heading-flex mb-3">
            <div class="heading-left">
                <h2 class="title">Recommendation For You</h2>
            </div>

            <div class="heading-right">
                <a href="#" class="title-link">View All Recommendadion <i class="icon-long-arrow-right"></i></a>
            </div>
        </div>

        <div class="products">
            <div class="row justify-content-center">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-10.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Headphones</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Beats by Dr. Dre Wireless Headphones</a></h3>
                            <div class="product-price">
                                <span class="new-price">$279.99</span>
                                <span class="old-price">Was $349.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                </div>
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div>

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #6699cc;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-11.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Cameras & Camcorders</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">GoPro - HERO7 Black HD Waterproof Action</a>
                            </h3>
                            <div class="product-price">
                                $349.99
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                </div>
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-new">New</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-12.jpg" alt="Product image"
                                    class="product-image">
                                <img src="assets/images/demos/demo-4/products/product-12-2.jpg" alt="Product image"
                                    class="product-image-hover">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Smartwatches</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Apple - Apple Watch Series 3 with White Sport
                                    Band</a></h3>
                            <div class="product-price">
                                $214.49
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 0%;"></div>
                                </div>
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div>

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #e2e2e2;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #f2bc9e;"><span class="sr-only">Color
                                        name</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-13.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Lenovo - 330-15IKBR 15.6"</a></h3>
                            <div class="product-price">
                                <span class="out-price">$339.99</span>
                                <span class="out-text">Out Of Stock</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                </div>
                                <span class="ratings-text">( 11 Reviews )</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-14.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Digital Cameras</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Sony - Alpha a5100 Mirrorless Camera</a>
                            </h3>
                            <div class="product-price">
                                $499.99
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 50%;"></div>
                                </div>
                                <span class="ratings-text">( 11 Reviews )</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-15.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Laptops</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Home Mini - Smart Speaker with Google
                                    Assistant</a></h3>
                            <div class="product-price">
                                $49.00
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                </div>
                                <span class="ratings-text">( 24 Reviews )</span>
                            </div>

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #ef837b;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #333333;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color
                                        name</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-sale">Sale</span>
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-16.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Audio</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">WONDERBOOM Portable Bluetooth Speaker</a>
                            </h3>
                            <div class="product-price">
                                <span class="new-price">$99.99</span>
                                <span class="old-price">Was $129.99</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div>
                                </div>
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div>

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #666666;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #ff887f;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #6699cc;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #f3dbc1;"><span class="sr-only">Color
                                        name</span></a>
                                <a href="#" style="background: #eaeaec;"><span class="sr-only">Color
                                        name</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <div class="product product-2">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="assets/images/demos/demo-4/products/product-17.jpg" alt="Product image"
                                    class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"></a>
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to
                                        cart</span></a>
                                <a href="popup/quickView.html" class="btn-product btn-quickview"
                                    title="Quick view"><span>quick view</span></a>
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Smart Home</a>
                            </div>
                            <h3 class="product-title"><a href="product.html">Google - Home Hub with Google Assistant</a>
                            </h3>
                            <div class="product-price">
                                $149.00
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div>
                                </div>
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-4"></div>

    <div class="container">
        <hr class="mb-0">
    </div>
    <div class="mb-4"></div>

    <div class="container">
        <h2 class="title text-center mb-2">Các bài viết nổi bật</h2><!-- End .title text-center -->
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
                <div class="col-sm-6 col-lg-3">
                    <article class="entry entry-grid">
                        <figure class="entry-media">
                            <a href="single.html">
                                <img src="{{ $blog->image }}" alt="{{$blog->title}}">
                            </a>
                        </figure><!-- End .entry-media -->

                        <div class="entry-body text-center">
                            <div class="entry-meta">
                                <a href="#">{{$blog->created_at}}</a>, 0 Comments
                            </div><!-- End .entry-meta -->

                            <h2 class="entry-title">
                                <a href="single.html">{{ $blog->title }}</a>
                            </h2><!-- End .entry-title -->

                            <div class="entry-content">
                                <p>{{ $blog->description }}</p>
                                <a href="single.html" class="read-more">Đọc thêm</a>
                            </div><!-- End .entry-content -->
                        </div><!-- End .entry-body -->
                    </article><!-- End .entry -->
                </div><!-- End .col-lg-3 -->
            @endforeach
        </div>
@endsection