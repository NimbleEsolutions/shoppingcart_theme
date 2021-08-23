    <?= view('home/header'); 
        use \App\Models\Upload;
    ?>    
        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" 
                    data-owl-options='{
                        "dots": true,
                        "nav": false, 
                        "responsive": {
                            "1200": {
                                "nav": true,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(<?= base_url();?>/public/assets/images/demos/demo-4/slider/slide-1.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-third">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Beats by</h1>
                                    <h1 class="intro-title">Dre Studio 3</h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup class="intro-old-price">$349,95</sup>
                                        <span class="text-third">
                                            $279<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <span>Shop More</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-lg-11 offset-lg-1 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(<?= base_url();?>/public/assets/images/demos/demo-4/slider/slide-2.png);">
                        <div class="container intro-content">
                            <div class="row justify-content-end">
                                <div class="col-auto col-sm-7 col-md-6 col-lg-5">
                                    <h3 class="intro-subtitle text-primary">New Arrival</h3><!-- End .h3 intro-subtitle -->
                                    <h1 class="intro-title">Apple iPad Pro <br>12.9 Inch, 64GB </h1><!-- End .intro-title -->

                                    <div class="intro-price">
                                        <sup>Today:</sup>
                                        <span class="text-primary">
                                            $999<sup>.99</sup>
                                        </span>
                                    </div><!-- End .intro-price -->

                                    <a href="category.html" class="btn btn-primary btn-round">
                                        <span>Shop More</span>
                                        <i class="icon-long-arrow-right"></i>
                                    </a>
                                </div><!-- End .col-md-6 offset-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="container">
                <h2 class="title text-center mb-4">Explore Popular Categories</h2><!-- End .title text-center -->
                
                <div class="cat-blocks-container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/1.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Computer & Laptop</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/2.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Digital Cameras</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/3.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Smart Phones</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/4.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Televisions</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/5.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Audio</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->

                        <div class="col-6 col-sm-4 col-lg-2">
                            <a href="category.html" class="cat-block">
                                <figure>
                                    <span>
                                        <img src="<?= base_url(); ?>/public/assets/images/demos/demo-4/cats/6.png" alt="Category image">
                                    </span>
                                </figure>

                                <h3 class="cat-block-title">Smart Watches</h3><!-- End .cat-block-title -->
                            </a>
                        </div><!-- End .col-sm-4 col-lg-2 -->
                    </div><!-- End .row -->
                </div><!-- End .cat-blocks-container -->
            </div><!-- End .container -->

             <div class="bg-light-2 pt-6 pb-6 featured">
                <div class="container-fluid">
                    <div class="heading heading-center mb-3">
                        <h2 class="title">FEATURED PRODUCTS</h2><!-- End .title -->

                        <!-- <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="featured-women-link" data-toggle="tab" href="#featured-women-tab" role="tab" aria-controls="featured-women-tab" aria-selected="true">Womens Clothing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-men-link" data-toggle="tab" href="#featured-men-tab" role="tab" aria-controls="featured-men-tab" aria-selected="false">Mens Clothing</a>
                            </li>
                        </ul> -->
                    </div><!-- End .heading -->

                    <div class="tab-content tab-content-carousel">
                        <div class="tab-pane p-0 fade show active" id="featured-women-tab" role="tabpanel" aria-labelledby="featured-women-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
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
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <?php foreach ($product as $prod) { 
                                    $image = (new Upload())->where(array('up_isDelete'=>0,'up_type'=>1,'up_type_id'=>$prod['prod_id']))->get();
                                ?>                                
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="<?= site_url('product/category_name/'.$prod['prod_name'].''); ?>">
                                            <img src="<?= base_url(); ?>/public/assets/images/product.png" alt="Product image" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/product.png" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="<?= site_url('product'); ?>"><?= $prod['prod_name']; ?></a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <i class="fa fa-inr fa-md"></i>&nbsp<?= $prod['prod_price']; ?> 
                                        </div><!-- End .product-price -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <?php } ?>
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                        <div class="tab-pane p-0 fade" id="featured-men-tab" role="tabpanel" aria-labelledby="featured-men-link">
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
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
                                            "items":5,
                                            "nav": true
                                        }
                                    }
                                }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="<?= site_url('product'); ?>">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-2-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-2-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="<?= site_url('product'); ?>">Biker jacket</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $120.99
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #d79442;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #cc3333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="<?= site_url('product'); ?>">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-3-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-3-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="<?= site_url('product'); ?>">Sandals</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $70.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-circle label-sale">Sale</span>
                                        <a href="<?= site_url('product'); ?>">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-4-1.jpg" alt="Product image" class="product-image">
                                            <img src="<?= base_url(); ?>/public/assets/images/demos/demo-7/products/product-4-2.jpg" alt="Product image" class="product-image-hover">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->

                                        <div class="deal-countdown offer-countdown" data-until="+11d"></div><!-- End .deal-countdown -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <h3 class="product-title"><a href="<?= site_url('product'); ?>">Super Skinny High Jeggings</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$190.00</span>
                                            <span class="old-price">$310.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .container-fluid -->
            </div><!-- End .bg-light-2 pt-4 pb-4 -->
        </main>
    <?= view('home/footer'); ?>


