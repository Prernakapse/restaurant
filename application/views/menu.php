<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
  <title>Dinsphere - Menu</title>
=======
<<<<<<< HEAD
  <title>Restoran - Menu</title>
=======
  <title>Dinsphere - Menu</title>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> payal

  <style>
    <?php $this->load->view('style') ?>
  </style>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
</head>

<body>
  <div class="loader">
    <i class="fas fa-utensils loader-icone"></i>
<<<<<<< HEAD
    <p>Dinsphere</p>
=======
<<<<<<< HEAD
    <p>Restoran</p>
=======
    <p>Dinsphere</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
    <div class="loader-ellipses">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <header class="bg-white">
    <div class="container header my-3 d-none d-lg-flex">
      <div class="logo">
        <a href="./index">
          <i class="fa fa-utensils me-3 text-dark"></i>
<<<<<<< HEAD
          <h1 class="mb-0 text-dark">Dinsphere</h1>
=======
<<<<<<< HEAD
          <h1 class="mb-0 text-dark">Restoran</h1>
=======
          <h1 class="mb-0 text-dark">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
        </a>
      </div>
      <div class="menus">
        <ul class="d-flex mb-0">
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./index">Home</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./about">About</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./reservation">Reservation</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./menu">Menu</a>
          </li>
          <li class="list-unstyled py-2">
            <a class="text-decoration-none text-uppercase p-4 text-dark" href="./contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="icons">
        <a class="text-decoration-none" id="searchBtn" href="#">
          <i class="fa fa-search me-3 text-dark"></i>
        </a>
        <a class="text-decoration-none" id="shoppingbutton" href="#">
          <i class="fa fa-shopping-bag me-3 text-dark"></i>
        </a>
      </div>
    </div>

    <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
      <div id="hamburger">
        <i class="fa fa-2x fa-bars me-3 text-dark"></i>
      </div>
      <div class="mobile-nav-logo">
        <div class="logo">
          <a href="./index">
            <i class="fa fa-utensils me-3 text-dark"></i>
<<<<<<< HEAD
            <h1 class="mb-0 text-dark">Dinsphere</h1>
=======
<<<<<<< HEAD
            <h1 class="mb-0 text-dark">Restoran</h1>
=======
            <h1 class="mb-0 text-dark">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
          </a>
        </div>
      </div>
      <div class="mobile-nav-icons">
        <div class="icons">
          <a class="text-decoration-none" id="searchBtnMobile" href="#">
            <i class="fa fa-search me-3 text-dark"></i>
          </a>
          <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
            <i class="fa fa-shopping-bag me-3 text-dark"></i>
          </a>
        </div>
      </div>
      <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
        <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
          <i class="fa fa-2x fa-plus me-3 "></i>
        </div>
        <div class="menus">
          <ul class="d-flex flex-column ps-2 mb-0 mt-4">
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="#">Home</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./about">About</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./reservation">Reservation</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./menu">Menu</a>
            </li>
            <li class="list-unstyled py-2">
              <a class="text-dark text-decoration-none text-uppercase p-4" href="./contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="search-bar d-none" id="search-container">
    <div class="close-btn" id="search-close-btn">
      <i class="fa fa-close"></i>
    </div>
    <div class="search-bar-wrapper">
      <input type="search" placeholder="Enter any text here..." />
      <div class="search-button">
        <a href="#"><i class="fa fa-search"></i></a>
      </div>
    </div>
  </div>

  <div class="shopping-cart">
    <div class="shopping-cart-header d-flex justify-content-between">
      <h2>Review your Cart</h2>
      <i class="fa fa-close"></i>
    </div>
    <div class="shopping-cart-body">
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2a.jpg" alt="">
        </div>
        <div class="col-8">
          <h3>The Cracker Barrel's Country Boy Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 25.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2b.jpg" alt="">
        </div>
        <div class="col-8">
          <h3>Old Timer's Meat Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 12.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2c.jpg" alt="">
        </div>
        <div class="col-8">
          <h3>Uncle Herschel's Favorite</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 25.0</p>
        </div>
      </div>
      <div class="row shopping-cart-item d-flex justify-content-between">
        <div class="col-2 d-flex align-items-center">
          <img src="./assets/images/product-2d.jpg" alt="">
        </div>
        <div class="col-8">
          <h3>Grandpa's Country Fried Breakfast</h3>
          <div class="shopping-cart-counter">
            <i class="fa fa-minus"></i>
            <span>1</span>
            <i class="fa fa-plus"></i>
          </div>
        </div>
        <div class="col-2 item-price d-flex align-items-end">
          <p class="mb-0 text-center">$ 30.0</p>
        </div>
      </div>
    </div>
    <div class="shopping-cart-footer">
      <div class="d-flex justify-content-between px-3 py-2">
        <div>
          <h2 class="mb-0">Subtotal</h2>
          <p class="mb-0">Shipping & taxes calculated at checkout</p>
        </div>
        <div class="d-flex align-items-end">
          <p class="footet-total-price mb-0">$ 92.0</p>
        </div>
      </div>
      <div class="d-flex justify-content-between px-2">
        <div class="footer-checkout">
          <div class="anim-layer"></div>
          <a href="#">Checkout</a>
        </div>
        <div class="footer-shopping">
          <div class="anim-layer"></div>
          <a href="#">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>

  <main class="menu-page">
    <section class="page-banner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="banner-content">
            <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Menu</h2>
            <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
              <div class="dot mb-2"></div>
            </div>
<<<<<<< HEAD
            <p class="text-center">The various dishes are waiting for your arrival to enjoy their irresistible flavors
              and aromas.</p>
=======
<<<<<<< HEAD
            <p class="text-center">The various dishes are waiting for your coming to enjoy its</p>
=======
            <p class="text-center">The various dishes are waiting for your arrival to enjoy their irresistible flavors
              and aromas.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
          </div>
        </div>
      </div>
    </section>

    <section class="our-menu pt-5 my-5">
<<<<<<< HEAD
  <div class="container">
    <div class="row" data-aos="fade-right">
      <h2 class="text-center display-6 fw-bold">Breakfast Time</h2>
      <div class="menu-line d-flex justify-content-center align-items-center">
        <span></span>
      </div>
    </div>
    <div class="row position-relative" data-aos="fade-left">
      <div class="slider slider-indicators-wrapper justify-content-center">
        <div class="slider-indicators">
          <div class="indicators-icon active text-center">
            <i class="fas fa-coffee fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Breakfast</h5>
=======
<<<<<<< HEAD
      <div class="container">
        <div class="row" data-aos="fade-right">
          <h2 class="text-center display-6 fw-bold">Breakfast Time</h2>
          <div class="menu-line d-flex justify-content-center align-items-center">
            <span></span>
>>>>>>> payal
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-utensils fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Lunch</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-hamburger fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Dinner</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-ice-cream fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Desserts</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-cocktail fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Drink</h5>
          </div>
        </div>
      </div>
    </div>

    <div id="our-menus" class="slider" data-aos="fade-up">
      <!-- Breakfast Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0 mt-5">
              <img width="90%" src="<?php echo base_url("/assets/images/breakfast.png") ?>" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Masala Dosa</h5>
                <p>A crispy South Indian dosa filled with spiced potato masala, served with flavorful coconut chutney and hot sambar.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
<<<<<<< HEAD
=======
            <div class="chef-choise-icons ps-4 mt-3 mt-lg-0">
              <i class="fa fa-chevron-up" aria-hidden="true"></i>
              <i class="fa fa-chevron-down ms-4" aria-hidden="true"></i>
=======
  <div class="container">
    <div class="row" data-aos="fade-right">
      <h2 class="text-center display-6 fw-bold">Breakfast Time</h2>
      <div class="menu-line d-flex justify-content-center align-items-center">
        <span></span>
      </div>
    </div>
    <div class="row position-relative" data-aos="fade-left">
      <div class="slider slider-indicators-wrapper justify-content-center">
        <div class="slider-indicators">
          <div class="indicators-icon active text-center">
            <i class="fas fa-coffee fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Breakfast</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-utensils fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Lunch</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-hamburger fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Dinner</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-ice-cream fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Desserts</h5>
          </div>
        </div>
        <div class="slider-indicators">
          <div class="indicators-icon text-center">
            <i class="fas fa-cocktail fa-2x"></i>
          </div>
          <div class="indicators-title text-center">
            <h5>Drink</h5>
          </div>
        </div>
      </div>
    </div>

    <div id="our-menus" class="slider" data-aos="fade-up">
      <!-- Breakfast Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0 mt-5">
              <img width="90%" src="<?php echo base_url("/assets/images/breakfast.png") ?>" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Masala Dosa</h5>
                <p>A crispy South Indian dosa filled with spiced potato masala, served with flavorful coconut chutney and hot sambar.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
>>>>>>> payal
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Aloo Paratha with Curd & Pickle</h5>
                <p>Whole wheat stuffed paratha filled with spiced mashed potatoes, served with fresh curd and tangy pickle.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Idli Sambar with Chutneys</h5>
                <p>Soft and fluffy steamed rice cakes served with hot sambar and a variety of flavorful chutneys.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  70
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Upma with Filter Coffee</h5>
                <p>A wholesome South Indian semolina dish cooked with veggies, mustard seeds, and curry leaves, paired with authentic filter coffee.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  50
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Poha with Sev</h5>
                <p>Light and fluffy flattened rice cooked with mustard seeds, curry leaves, and peanuts, garnished with sev and a squeeze of lemon.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  40
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
            </div>
          </div>
        </div>
      </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
    </section>
=======
>>>>>>> payal

      <!-- Lunch Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0">
              <img width="90%" src="<?php echo base_url("/assets/images/lunch.jpg") ?>" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Paneer Butter Masala with Naan</h5>
                <p>Soft paneer cubes cooked in a rich, creamy tomato gravy, served with butter naan for a comforting meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Veg Biryani with Raita</h5>
                <p>Aromatic basmati rice cooked with fresh vegetables and exotic spices, served with cool, refreshing raita.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Dal Tadka with Jeera Rice</h5>
                <p>A flavorful, slow-cooked lentil curry tempered with garlic and spices, paired with fragrant cumin rice.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  100
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Chole Bhature</h5>
                <p>Spicy and tangy chickpea curry served with fluffy, deep-fried bhature for a filling North Indian meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Grilled Paneer Wrap</h5>
                <p>A wholesome wrap filled with grilled paneer, fresh veggies, and tangy sauces, served with fries.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Dinner Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0 mt-5">
              <img width="90%" src="<?php echo base_url("/assets/images/Dine.png") ?>" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Mushroom Masala with Tandoori Roti</h5>
                <p>A deliciously spiced mushroom curry cooked in a flavorful onion-tomato gravy, paired with soft tandoori roti.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Rajma Chawal</h5>
                <p>A hearty Punjabi-style kidney bean curry slow-cooked with spices, served with steamed rice for a homely taste.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Veg Hakka Noodles with Manchurian</h5>
                <p>Stir-fried noodles loaded with fresh veggies, served with crispy Manchurian balls in a spicy sauce.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  150
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Pasta Arrabiata</h5>
                <p>Spaghetti tossed in a tangy and spicy tomato-based sauce with Italian herbs and garlic.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  180
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Veg Pizza</h5>
                <p>A delicious pizza topped with an assortment of fresh veggies and a tangy tomato sauce.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  200
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Dessert Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0">
              <img width="90%" src="<?php echo base_url("/assets/images/cake.jpg") ?>" alt="">
            </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Gulab Jamun</h5>
                <p>Soft, melt-in-the-mouth dumplings made from milk solids, deep-fried and soaked in sugar syrup.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  40
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Rasgulla</h5>
                <p>Spongy, soft dumplings made from fresh chhena soaked in sugar syrup, a traditional Bengali treat.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  30
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Chocolate Lava Cake</h5>
                <p>A warm chocolate cake with a gooey molten center, served with a scoop of vanilla ice cream.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  100
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Ice Cream Sundae</h5>
                <p>A scoop of creamy vanilla ice cream topped with chocolate syrup, nuts, and a cherry.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Fruit Custard</h5>
                <p>A delightful mix of fresh seasonal fruits in a creamy custard sauce.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Drinks Section -->
      <div>
        <div class="row my-5 py-3">
          <div class="col-lg-5">
            <div class="pb-5 pb-lg-0">
              <img width="90%" src="<?php echo base_url("/assets/images/drinks.png")?>" alt="">
          </div>
          </div>
          <div class="col-lg-7">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Masala Chai</h5>
                <p>Authentic Indian spiced tea made with a blend of tea leaves, milk, and aromatic spices.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  30
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Cold Coffee</h5>
                <p>A refreshing chilled coffee drink topped with whipped cream and chocolate shavings.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  50
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
              
                <h5>Fresh Lime Soda</h5>
                <p>A tangy and refreshing drink made with lime juice, soda, and a pinch of salt.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  40
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Mint Mojito</h5>
                <p>A cool, refreshing blend of mint, lime, and soda served over ice.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  60
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
                <h5>Fresh Orange Juice</h5>
                <p>A glass of freshly squeezed orange juice, packed with vitamin C and flavor.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  50
                </span>
                <div class="item-btn">
                  <a href="#">Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="chef-choice pt-3 pb-5">
  <div class="container py-5">
    <div class="row" data-aos="fade-right">
      <div class="section-title text-center pb-5">
        <h5>Chef's Choice</h5>
        <h2 class="text-white display-6 fw-bold">Daily Special</h2>
      </div>
    </div>
    <div class="row">
      <!-- Hidden on large screens (image section) -->
      <div class="d-none d-lg-block col-lg-6" data-aos="fade-right">
        <img src="<?php echo base_url('assets/images/foodimg.jpeg'); ?>" 
          class="img-fluid" alt="Food Image">
      </div>
      <div class="col-12 col-lg-6" data-aos="fade-left">
        <div class="chef-choice-slider ps-3">
          
          <!-- First item -->
          <div class="item-wrapper d-flex justify-content-between align-items-center mb-4">
<<<<<<< HEAD
            <div class="item-left d-flex flex-row mt-4">
              <div class="ps-3">
                <h5 class="text-black">Paneer Tikka </h5>
                <p class="mb-0">Grilled spiced paneer cubes served with mint chutney.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 120</span>
=======
            <div class="item-left d-flex flex-row">
              <div class="ps-3">
                <h5 class="text-white">Dish Name</h5>
                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 100</span>
>>>>>>> payal
            </div>
          </div>
          
          <!-- Second item with image -->
          <div class="item-wrapper d-flex justify-content-between align-items-center mb-4">
            <div class="item-left d-flex flex-row">
              <!-- <img src="<?php echo base_url('assets/images/foodimg.jpeg'); ?>" 
                class="img-fluid" alt="Food Image" width="70" height="70"> -->
              <div class="ps-3">
<<<<<<< HEAD
                <h5 class="text-black">Hyderabadi Biryani</h5>
                <p class="mb-0">Aromatic basmati rice with exotic spices and saffron.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 100</span>
=======
                <h5 class="text-white">Uncle Herschel's Favorite</h5>
                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 150</span>
>>>>>>> payal
            </div>
          </div>
          
          <!-- Third item -->
          <div class="item-wrapper d-flex justify-content-between align-items-center mb-4">
            <div class="item-left d-flex flex-row">
              <!-- <img class="rounded-circle" src="./assets/images/product-2c.jpg" width="70" height="70" alt=""> -->
              <div class="ps-3">
<<<<<<< HEAD
                <h5 class="text-black">Malai Kofta</h5>
                <p class="mb-0">Soft paneer and potato dumplings in a rich cashew gravy.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 200</span>
=======
                <h5 class="text-white">Grandpa's Country Fried Breakfast</h5>
                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">$30.00</span>
>>>>>>> payal
            </div>
          </div>
          
          <!-- Fourth item -->
          <div class="item-wrapper d-flex justify-content-between align-items-center mb-4">
            <div class="item-left d-flex flex-row">
              <!-- <img class="rounded-circle" src="./assets/images/product-2d.jpg" width="70" height="70" alt=""> -->
              <div class="ps-3">
<<<<<<< HEAD
                <h5 class="text-black">Pav Bhaji</h5>
                <p class="mb-0">Spiced vegetable mash served with buttered buns. </p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 100</span>
            </div>
          </div>


          <div class="item-wrapper d-flex justify-content-between align-items-center mb-4">
            <div class="item-left d-flex flex-row">
              <!-- <img class="rounded-circle" src="./assets/images/product-2d.jpg" width="70" height="70" alt=""> -->
              <div class="ps-3">
                <h5 class="text-black">Shahi Paneer</h5>
                <p class="mb-0">Royal paneer dish cooked in a creamy tomato-based gravy.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">Rs 160</span>
            </div>

            
=======
                <h5 class="text-white">Old Timer's Meat Breakfast</h5>
                <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              </div>
            </div>
            <div class="item-right">
              <span class="item-price">$12.00</span>
            </div>
          </div>
>>>>>>> payal
        </div>

        <!-- Slider control icons -->
        <!-- <div class="chef-choice-icons ps-4 mt-3 mt-lg-0">
          <i class="fa fa-chevron-up" aria-hidden="true"></i>
          <i class="fa fa-chevron-down ms-4" aria-hidden="true"></i>
        </div> -->
      </div>
    </div>
  </div>
</section>


<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal

    <section class="lunch-time my-5 pb-0 pb-lg-5">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <h2 class="text-center display-6 fw-bold">Lunch Time</h2>
          <div class="menu-line d-flex justify-content-center align-items-center">
            <span></span>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Paneer Butter Masala with Naan</h5>
                <p>Soft paneer cubes cooked in a rich, creamy tomato gravy, served with butter naan for a comforting
                  meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
=======
<<<<<<< HEAD
                <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  25.0</span>
=======
                <h5>Paneer Butter Masala with Naan</h5>
                <p>Soft paneer cubes cooked in a rich, creamy tomato gravy, served with butter naan for a comforting
                  meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Veg Biryani with Raita</h5>
                <p>Aromatic basmati rice cooked with fresh vegetables and exotic spices, served with cool, refreshing
                  raita.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
=======
<<<<<<< HEAD
                <h5>Uncle Herschel's Favorite</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  45.0</span>
=======
                <h5>Veg Biryani with Raita</h5>
                <p>Aromatic basmati rice cooked with fresh vegetables and exotic spices, served with cool, refreshing
                  raita.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Dal Tadka with Jeera Rice</h5>
                <p>A flavorful, slow-cooked lentil curry tempered with garlic and spices, paired with fragrant cumin
                  rice.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
=======
<<<<<<< HEAD
                <h5>Grandpa's Country Fried Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  30.0</span>
=======
                <h5>Dal Tadka with Jeera Rice</h5>
                <p>A flavorful, slow-cooked lentil curry tempered with garlic and spices, paired with fragrant cumin
                  rice.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Chole Bhature</h5>
                <p>Spicy and tangy chickpea curry served with fluffy, deep-fried bhature for a filling North Indian
                  meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
=======
<<<<<<< HEAD
                <h5>Old Timer's Meat Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  12.0</span>
=======
                <h5>Chole Bhature</h5>
                <p>Spicy and tangy chickpea curry served with fluffy, deep-fried bhature for a filling North Indian
                  meal.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Grilled Paneer Wrap</h5>
                <p>A wholesome wrap filled with grilled paneer, fresh veggies, and tangy sauces, served with fries.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80</span>
=======
<<<<<<< HEAD
                <h5>Chinese Chicken Bread Spicy Soup</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  12.0</span>
=======
                <h5>Grilled Paneer Wrap</h5>
                <p>A wholesome wrap filled with grilled paneer, fresh veggies, and tangy sauces, served with fries.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  80</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-left">
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Mushroom Masala with Tandoori Roti</h5>
                <p>A deliciously spiced mushroom curry cooked in a flavorful onion-tomato gravy, paired with soft
                  tandoori roti.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110</span>
=======
<<<<<<< HEAD
                <h5>The Cracker Barrel's Country Boy Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  25.0</span>
=======
                <h5>Mushroom Masala with Tandoori Roti</h5>
                <p>A deliciously spiced mushroom curry cooked in a flavorful onion-tomato gravy, paired with soft
                  tandoori roti.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Rajma Chawal </h5>
                <p>A hearty Punjabi-style kidney bean curry slow-cooked with spices, served with steamed rice for a
                  homely taste.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
=======
<<<<<<< HEAD
                <h5>Uncle Herschel's Favorite</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  45.0</span>
=======
                <h5>Rajma Chawal </h5>
                <p>A hearty Punjabi-style kidney bean curry slow-cooked with spices, served with steamed rice for a
                  homely taste.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  90</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Veg Hakka Noodles with Manchurian</h5>
                <p>Stir-fried noodles loaded with fresh veggies, served with crispy Manchurian balls in a spicy sauce.
                </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
=======
<<<<<<< HEAD
                <h5>Grandpa's Country Fried Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  30.0</span>
=======
                <h5>Veg Hakka Noodles with Manchurian</h5>
                <p>Stir-fried noodles loaded with fresh veggies, served with crispy Manchurian balls in a spicy sauce.
                </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  120</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Mixed Veg Curry with Tandoori Roti</h5>
                <p>A flavorful mix of seasonal vegetables cooked in a mildly spiced gravy, served with soft tandoori
                  roti.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  100</span>
=======
<<<<<<< HEAD
                <h5>Old Timer's Meat Breakfast</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  12.0</span>
=======
                <h5>Mixed Veg Curry with Tandoori Roti</h5>
                <p>A flavorful mix of seasonal vegetables cooked in a mildly spiced gravy, served with soft tandoori
                  roti.</p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  100</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
            <div class="item-wrapper d-flex justify-content-between">
              <div class="item-left">
<<<<<<< HEAD
                <h5>Palak Paneer with Garlic Naan</h5>
                <p>Soft paneer cubes simmered in a smooth and creamy spinach gravy, paired with aromatic garlic naan.
                </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110</span>
=======
<<<<<<< HEAD
                <h5>Chinese Chicken Bread Spicy Soup</h5>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">$</span>
                  12.0</span>
=======
                <h5>Palak Paneer with Garlic Naan</h5>
                <p>Soft paneer cubes simmered in a smooth and creamy spinach gravy, paired with aromatic garlic naan.
                </p>
              </div>
              <div class="item-right">
                <span class="item-price">
                  <span class="price-symbol">Rs</span>
                  110</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> payal






<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
    <section class="subscribe-us pb-5 mb-5">
      <img class="d-none d-lg-block" src="./assets/images/subscribe-us.png" alt="" data-aos="fade-down-right">
      <div class="container">
        <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 d-flex flex-column flex-md-row align-items-lg-center">
            <div class="content" data-aos="fade-right">
              <h5 class="display-6 text-black">Subcribe Us Now</h5>
              <p>
                Get more news and delicious dishes everyday from us
              </p>
            </div>
            <div class="subscribe-form d-flex ps-0 ms-0 ps-lg-5 ms-lg-5" data-aos="fade-left">
              <div class="input-form w-100">
                <input class="border-0 px-3 w-100" type="email" placeholder="Email">
              </div>
              <div class="input-button">
                <a class="text-decoration-none" href="#">
                  <i class="fa fa-paper-plane"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <a href="#" id="back-to-top">
    <i class="fa-solid fa-angles-up"></i>
  </a>

  <footer>
    <div class="container">
      <div class="row">
        <div class="footer-content col-xl-8  px-4">
          <div class="row">
            <div class="col-lg-6 px-0">
              <div class="logo" data-aos="fade-down-right">
                <a href="./index">
                  <i class="fa fa-utensils me-3"></i>
<<<<<<< HEAD
                  <h1 class="mb-0">Dinsphere</h1>
=======
<<<<<<< HEAD
                  <h1 class="mb-0">Restoran</h1>
=======
                  <h1 class="mb-0">Dinsphere</h1>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                </a>
              </div>
            </div>
            <div data-aos="fade-down"
              class="col-lg-6 pt-4 pt-lg-0 d-flex align-items-center justify-content-start justify-content-lg-end">
              <div class="social-icons d-flex">
                <ul class="d-flex mb-0 ps-0">
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-facebook"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-twitter"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-pinterest"></i></a></li>
                  <li class="mx-2"><a class="text-decoration-none text-white" href="#"><i
                        class="fab fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row pt-5 content-desc" data-aos="fade-right">
<<<<<<< HEAD
            <p class="px-0">"Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence
              with every bite at Dinsphere"</p>
=======
<<<<<<< HEAD
            <p class="px-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
=======
            <p class="px-0">"Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence
              with every bite at Dinsphere"</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
          </div>
          <div class="row" data-aos="fade-right">
            <div class="d-flex flex-column flex-lg-row px-0 justify-content-between">
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-location-dot text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038 <br>
                    45, Connaught Place, New Delhi, Delhi - 110001
=======
<<<<<<< HEAD
                    157 White Oak Drive Kansas City <br>
                    689 Lynn Street South Boston
=======
                    12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038 <br>
                    45, Connaught Place, New Delhi, Delhi - 110001
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    1234567890 <br>
                    9876543210
=======
<<<<<<< HEAD
                    (617)-276-8031 <br>
                    (617)-276-8031
=======
                    1234567890 <br>
                    9876543210
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </p>
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-envelope text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
                    admin@fooday.com <br>
                    support@fooday.com
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4">
          <div class="reservation-box" data-aos="fade-down-left">
            <div class="reservation-wrapper">
              <h2>Open Hour</h2>
              <div class="reservation-date-time">
                <p>Tuesday: .......................... 7AM - 9PM</p>
                <p>Wednesday: ..................... 7AM - 9PM</p>
                <p>Thursday: ......................... 7AM - 9PM</p>
                <p>Friday: ............................... 7AM - 9PM</p>
                <p>Saturday: ........................... 7AM - 9PM</p>
                <p>Sunday: ............................. 7AM - 9PM</p>
                <p>Monday: ............................. Close</p>
              </div>
              <h2 class="pb-2">Reservation Numbers</h2>
              <h3>(617)-276-8031</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
<<<<<<< HEAD
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Dinsphere.</b> All
          rights reserved. Design by <a href="" class="fw-bold author-name">Payal & Prerna</a></p>
=======
<<<<<<< HEAD
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Restoran.</b> All
          rights reserved. Design by <a href="https://www.linkedin.com/in/codewithshabbir/"
            class="fw-bold author-name">Muhammad Shabbir</a></p>
=======
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Dinsphere.</b> All
          rights reserved. Design by <a href="" class="fw-bold author-name">Payal & Prerna</a></p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="<?php echo base_url('assets/script.js'); ?>"></script>

</body>

</html>