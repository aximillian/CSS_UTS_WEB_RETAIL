<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KETHEBOOK</title>


    {{-- Font Awesome cdn link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    {{-- Font  --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600&display=swap">

    {{-- Theme style  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    {{-- Boostrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    {{-- custom file link --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/CartPage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
</head>


<body>
    <header class="header">
        <div class="header-1">

            <a href="#" class="logo"> KETHEBOOK</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="notic-btn" class="fas fa-bell"></a>
                <a href="cart-btn" class="fas fa-cart-shopping"></a>
                <a href="login-btn" class="fas fa-circle-user"></a>
            </div>
        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#offers">Offers</a>
                <a href="#categories">Categories</a>
                <a href="#wishlist">wishlist</a>
            </nav>
        </div>
    </header>

    <nav class="bottom-navbar">
        <a href="#home" class="fas fa-home"></a>
        <a href="#offers" class="fas fa-tag"></a>
        <a href="#categories" class="fas fa-layer-group"></a>
        <a href="#wishlist" class="fas fa-bookmark"></a>
    </nav>


    {{-- Konten --}}
    <section class="mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table shopping-summery text-center clean">
                            <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="image product-thumbnail"><img src="img/bookDummy/1.png" alt="#"></td>
                                    <td class="product-des product-name">
                                        <h5 class="product-name"><a href="product-details.html">Bahagia itu Sederhana</a></h5>
                                        <p class="font-xs">Maboriosam in a tonto nesciung eget<br> distingy magndapibus.</p>
                                    </td>
                                    <td class="price" data-title="Price"><span>$65.00 </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>$65.00 </span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fas fa-square-xmark"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="image"><img src="img/bookDummy/2.png" alt="#"></td>
                                    <td class="product-des">
                                        <h5 class="product-name"><a href="product-details.html">Mengenang Namanya</a></h5>
                                        <p class="font-xs">Sit at ipsum amet clita no est,<br> sed amet sadipscing et gubergren</p>
                                    </td>
                                    <td class="price" data-title="Price"><span>$75.00 </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">2</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>$150.00 </span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fas fa-square-xmark"></i></a></td>
                                </tr>

                                <tr>
                                    <td class="image"><img src="img/bookDummy/3.png" alt="#"></td>
                                    <td class="product-des">
                                        <h5 class="product-name"><a href="product-details.html">Secangkir Selembar</a></h5>
                                        <p class="font-xs">Erat amet et et amet diam et et.<br> Justo amet at dolore
                                        </p>
                                    </td>
                                    <td class="price" data-title="Price"><span>$62.00 </span></td>
                                    <td class="text-center" data-title="Stock">
                                        <div class="detail-qty border radius  m-auto">
                                            <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                            <span class="qty-val">1</span>
                                            <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                        </div>
                                    </td>
                                    <td class="text-right" data-title="Cart">
                                        <span>$62.00 </span>
                                    </td>
                                    <td class="action" data-title="Remove"><a href="#" class="text-muted"><i class="fas fa-square-xmark"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="cart-action text-end">
                        <a class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Update Cart</a>
                        <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continue Shopping</a>
                    </div>

                    <div class="row mb-50">
                        <div class="col-lg-6 col-md-12">
                            <div class="heading_s1 mb-3">
                                <h4>Calculate Shipping</h4>
                            </div>
                            <p class="mt-15 mb-30">Flat rate: <span class="font-xl text-brand fw-900">5%</span></p>
                            <form class="field_form shipping_calculator">
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <div class="custom_select">
                                            <select class="form-control select-active">
                                                <option value="">Choose a option...</option>
                                                <option value=""> Aceh</option>
                                                <option value=""> Bali</option>
                                                <option value=""> Banten</option>
                                                <option value=""> Bengkulu</option>
                                                <option value=""> Daerah Istimewa Yogyakarta</option>
                                                <option value=""> Daerah Khusus Ibukota Jakarta</option>
                                                <option value=""> Gorontalo	</option>
                                                <option value=""> Jambi	</option>
                                                <option value=""> Jawa Barat</option>
                                                <option value=""> Jawa Tengah</option>
                                                <option value=""> Jawa Timur</option>
                                                <option value=""> Kalimantan Barat</option>
                                                <option value=""> Kalimantan Selatan</option>
                                                <option value=""> Kalimantan Tengah</option>
                                                <option value=""> Kalimantan Timur</option>
                                                <option value=""> Kalimantan Utara</option>
                                                <option value=""> Kepulauan Bangka Belitung</option>
                                                <option value=""> Kepulauan Riau</option>
                                                <option value=""> Lampung</option>
                                                <option value=""> Maluku</option>
                                                <option value=""> Maluku Utara</option>
                                                <option value=""> Nusa Tenggara Barat</option>
                                                <option value=""> Nusa Tenggara Timur</option>
                                                <option value=""> Papua</option>
                                                <option value=""> Papua Barat</option>
                                                <option value=""> Papua Barat Daya</option>
                                                <option value=""> Papua Pegunungan</option>
                                                <option value=""> Papua Selatan</option>
                                                <option value=""> Papua Tengah</option>
                                                <option value=""> Riau</option>
                                                <option value=""> Sulawesi Barat</option>
                                                <option value=""> Sulawesi Selatan</option>
                                                <option value=""> Sulawesi Tengah</option>
                                                <option value=""> Sulawesi Tenggara</option>
                                                <option value=""> Sulawesi Utara</option>
                                                <option value=""> Sumatera Barat</option>
                                                <option value=""> Sumatera Selatan</option>
                                                <option value=""> Sumatera Utara</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="District/ City" name="name" type="text">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input required="required" placeholder="PostCode" name="name" type="text">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12">
                                        <button class="btn  btn-sm"><i class="fi-rs-shuffle mr-10"></i>Update</button>
                                    </div>
                                </div>
                            </form>
                            <div class="mb-30 mt-50">
                                <div class="heading_s1 mb-3">
                                    <h4>Apply Coupon</h4>
                                </div>
                                <div class="total-amount">
                                    <div class="left">
                                        <div class="coupon">
                                            <form action="#" target="_blank">
                                                <div class="form-row row justify-content-center">
                                                    <div class="form-group col-lg-6">
                                                        <input class="font-medium" name="Coupon" placeholder="Enter Your Coupon">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <button class="btn  btn-sm"><i class="fi-rs-label mr-10"></i>Apply</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="border p-md-4 p-30 border-radius cart-totals">
                                <div class="heading_s1 mb-3">
                                    <h4>Cart Totals</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label">Cart Subtotal</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">$240.00</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Shipping</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">$240.00</span></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="checkout.html" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Subscription --}}
    <section class="subscription-section">
        <div class="subscription-wrapper">
            <div class="subscription__description">
                <h2>
                    Join 10k+ other readers!
                </h2>

                <p>
                    Stay up to date with our books, news and articles
                </p>
            </div>
            
            <form class="subscribe-form">
                <input type="email" spellcheck="false" placeholder="Your Email">
                <button type="submit">
                    Subscribe
                </button>
            </form>
        </div>
    </section> 



    
<footer>
    <div class="footer-wrapper">

        <div class="social-wrapper">
            <div class='social-links'>
                <ul>
                    <li>
                        <a href="#" title="Instagram">
                            <img src="icon/instagram.png" alt='Instagram'>                       
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Linkedin">
                            <img src="icon/linkedin.png" alt='Linkedin'>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="X">
                            <img src="icon/x.png" alt='X'>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Youtube">
                            <img src="icon/youtube.png" alt='YouTube'>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="GitHub">
                            <img src="icon/github.png" alt='GitHub'>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="footer-columns">
            <div class="footer-links">
                <div class="footer-logo">
                    <img src="img/iconWeb/Kethebook.png" alt="">
                </div>
                <section>
                    <h3>Our Service</h3>
                    <ul>
                        <li>
                            <a href="#"> <i class="fas fa-location-dot"></i> Sumatra</a>                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-location-dot"></i> Jawa</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-location-dot"></i> Kalimantan</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-location-dot"></i> Sulawesi</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-location-dot"></i> Papua</a>
                        </li>
                    </ul>
                </section>
                <section>
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Offerse</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Categories</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Wishlist</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Cart</a>
                        </li>
                    </ul>
                </section>
                <section>
                    <h3>Extra Links</h3>
                    <ul>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Account Info</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Ordered</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-arrow-right"></i> Payment Method</a>
                        </li>
                    </ul>
                </section>
                <section>
                    <h3>Contact info</h3>
                    <ul>
                        <li>
                            <a href="#"> <i class="fas fa-id-card"></i> 210711010</a>                        
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-id-card"></i> 210711046</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-id-card"></i> 210711453</a>
                        </li>
                        <li>
                            <a href="#"> <i class="fas fa-envelope"></i> kethebook@gmail.com</a>
                        </li>
                    </ul>
                </section>
            </div>

        
        <div class="footer-bottom">
            <div class="footer-description">
                <h3>Midterm Exam Website Project</h3>
                <p>Development and design by Retail_4_B group<p>
            </div>
            <small>© KETHEBOOK Ltd. <span id="year"></span>, All rights reserved</small>
        </div>
    </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script> document.getElementById("year").innerHTML = new Date().getFullYear();</script>
<script src="{{ asset('js/script.js') }}"></script>
<!-- Skrip JavaScript Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-KYSLmAOYkvMzW0En2xG4vPUdZkkucmF2KNPQkCFAALs2aQovlKuoXKF8kyB+Hx9fh" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-dY8FPLTJATWr1ouu8KOpD5Rdvqz3sPP9Txz7S6VbY3nKRlSAofBxuKb0Cunw9rbo" crossorigin="anonymous"></script>
</body>
</html>