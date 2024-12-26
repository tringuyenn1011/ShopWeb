<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="../../../public/assets/style.css">

</head>

<body class="homepage">
    <nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center w-100">
                <div class="col-auto"> </div>
                <div class="col-auto">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                        aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="dropdownHome"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                                    <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownHome">
                                        <li>
                                            <a href="index.html" class="dropdown-item item-anchor">Home Layout 1</a>
                                        </li>
                                        <li>
                                            <a href="index.html" class="dropdown-item item-anchor">Home Layout 2 </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownShop"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                    <ul class="dropdown-menu list-unstyled" aria-labelledby="dropdownShop">
                                        <li>
                                            <a href="/product/index" class="dropdown-item item-anchor">Management Products
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/user/index/" class="dropdown-item item-anchor">Management Users </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-lg-auto">
                    <ul class="list-unstyled d-flex m-0">
                        <li class="d-none d-lg-block">
                            <a href="index.html" class="text-uppercase mx-3">Wishlist <span
                                    class="wishlist-count">(0)</span>
                            </a>
                        </li>
                        <li class="d-none d-lg-block">
                            <a href="index.html" class="text-uppercase mx-3">Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="new-arrival" class="new-arrival product-carousel py-5 position-relative overflow-hidden">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
                <h4 class="text-uppercase">Our New Arrivals</h4>
                <a href="index.html" class="btn-link">View All Products</a>
            </div>
            <div class="swiper product-swiper open-up" data-aos="zoom-out">
                <div class="swiper-wrapper d-flex">
                    <div class="swiper-slide">
                        <div class="product-item image-zoom-effect link-effect">
                            <div class="image-holder position-relative">
                                <a href="index.html">
                                    <img src="../../../public/assets/images/product-item-1.jpg" alt="categories"
                                        class="product-image img-fluid">
                                </a>
                                <div class="product-content">
                                    <h5 class="element-title text-uppercase fs-5 mt-3">
                                        <a href="index.html">Dark florish onepiece</a>
                                    </h5>
                                    <a href="#" class="text-decoration-none"
                                        data-after="Add to cart"><span>$95.00</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item image-zoom-effect link-effect">
                            <div class="image-holder position-relative">
                                <a href="index.html">
                                    <img src="../../../public/assets/images/product-item-2.jpg" alt="categories"
                                        class="product-image img-fluid">
                                </a>
                                <div class="product-content">
                                    <h5 class="text-uppercase fs-5 mt-3">
                                        <a href="index.html">Baggy Shirt</a>
                                    </h5>
                                    <a href="#" class="text-decoration-none"
                                        data-after="Add to cart"><span>$55.00</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product-item image-zoom-effect link-effect">
                            <div class="image-holder position-relative">
                                <a href="index.html">
                                    <img src="../../../public/assets/images/product-item-3.jpg" alt="categories"
                                        class="product-image img-fluid">
                                </a>
                                <div class="product-content">
                                    <h5 class="text-uppercase fs-5 mt-3">
                                        <a href="index.html">Cotton off-white shirt</a>
                                    </h5>
                                    <a href="#" class="text-decoration-none"
                                        data-after="Add to cart"><span>$65.00</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="../../../public/assets/js/jquery.min.js"></script>
    <script src="../../../public/assets/js/plugins.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="../../../public/assets/js/script.min.js"></script>
</body>

</html>