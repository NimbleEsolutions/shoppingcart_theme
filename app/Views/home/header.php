<!DOCTYPE html>
<html lang="en">


<!-- molla/index-8.html  22 Nov 2019 09:56:59 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SVClasses</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="manifest" href="<?= base_url(); ?>/public/assets/images/icons/site.html">
    <link rel="mask-icon" href="<?= base_url(); ?>/public/assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="<?= base_url(); ?>/public/assets/images/sv_logo-bg.png">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="<?= base_url(); ?>/public/assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/plugins/jquery.countdown.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/skins/skin-demo-8.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/demos/demo-8.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/skins/skin-demo-4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/demos/demo-4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/skins/skin-demo-7.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public/assets/css/demos/demo-7.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header">
            <div class="header-bottom sticky-header" style="box-shadow: 4px 4px 4px #9e9a9a;">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                            <img src="<?= base_url(); ?>/public/assets/images/sv_logo.png" alt="S VALIMBE CLASSES" width="82" height="20">
                        </a>
                    </div>
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <a href="wishlist.html" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">2</span>
                                <span class="cart-txt">$ 164,00</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="<?= base_url(); ?>/public/assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="<?= base_url(); ?>/public/assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="<?= site_url('cart'); ?>" class="btn btn-primary">View Cart</a>
                                    <a href="<?= site_url('checkout'); ?>" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
