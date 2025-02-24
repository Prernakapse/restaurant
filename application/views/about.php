<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dinsphere - About</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

  <link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>" />
  <style>
    <?php $this->load->view('style'); ?>
  </style>
</head>

<body>
  <div class="loader">
    <i class="fas fa-utensils loader-icone"></i>
<<<<<<< HEAD
    <p>Dinsphere</p>
=======
<<<<<<< HEAD
    <p>Restaurant</p>
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
          <h1 class="mb-0 text-dark">Restaurant</h1>
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
            <h1 class="mb-0 text-dark">Restaurant</h1>
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
          <i class="fa fa-2x fa-plus me-3"></i>
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
          <img src="<?php echo base_url('assets/images/product-2a.jpg') ?>" alt="">
        </div>
        <div class="col-8">
          <h3></h3>
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
          <!-- <img src="./assets/images/product-2b.jpg" alt=""> -->
          <img src="<?php echo base_url('assets/images/product-2b.jpg') ?>" alt="">

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
          <!-- <img src="./assets/images/product-2c.jpg" alt=""> -->
          <img src="<?php echo base_url('/assets/images/product-2c.jpg') ?>" alt="">

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
          <!-- <img src="./assets/images/product-2d.jpg" alt=""> -->
          <img src="<?php echo base_url('/assets/images/product-2d.jpg') ?>" alt="">
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

  <main class="about-page">
    <section class="page-banner d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="banner-content">
            <h2 class="text-white display-6 fw-bold text-center" data-aos="fade-right" data-aos-delay="3000">
            </h2>
            <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
               <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">About</h2>
           </div>
            <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">
              We bring to you the unforgetable moment with our delicious
              dishes
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="about-story mt-5 pt-5">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <h2 class="text-center display-6 fw-bold">
<<<<<<< HEAD
          Dinsphere Glory Story
=======
<<<<<<< HEAD
            Restoran Glory Story
=======
          Dinsphere Glory Story
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
          </h2>
          <div class="about-line d-flex justify-content-center align-items-center">
            <span></span>
          </div>
        </div>
        <div class="row">
          <div class="story-timeline">
            <div class="story-indicators my-4">
              <div class="row">
                <div data-aos="fade-right" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-1.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-1.jpg') ?>" alt="">

                  <div class="image-box-inner">
                    <p class="mb-0">2000</p>
                  </div>
                </div>
                <div data-aos="fade-down" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-2.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-2.jpg') ?>" alt="">
                  <div class="image-box-inner">
                    <p class="mb-0">2002</p>
                  </div>

                </div>
                <div data-aos="fade-up" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-3.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-3.jpg') ?>" alt="">

                  <div class="image-box-inner">
                    <p class="mb-0">2004</p>
                  </div>
                </div>
                <div data-aos="fade-down" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-4.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-4.jpg') ?>" alt="">

                  <div class="image-box-inner">
                    <p class="mb-0">2008</p>
                  </div>

                </div>
                <div data-aos="fade-up" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-5.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-5.jpg') ?>" alt="">
                  <div class="image-box-inner">
                    <p class="mb-0">2012</p>
                  </div>

                </div>
                <div data-aos="fade-left" class="image-box col-lg-2 px-0">
                  <!-- <img class="w-100" src="./assets/images/timeline-6.jpg" alt="" /> -->
                  <img class="w-100" src="<?php echo base_url('/assets/images/timeline-6.jpg') ?>" alt="">
                  <div class="image-box-inner">
                    <p class="mb-0">2016</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="story-content py-5 my-4" data-aos="fade-right">
              <div>
                <p class="text-center"><strong>16.10.2000:</strong>The Begin of our Restaurant!</p>
                <p class="text-center">
                Restaurant is more than just a place to eat—it's a celebration of good food and great company. Established in 2000, our restaurant prides itself on offering a wide variety of dishes made with fresh, high-quality ingredients. From savory appetizers to hearty entrees, every meal is crafted with care to deliver the best flavors in every bite.

Our menu features a range of carefully curated options, with a special focus on vegetarian dishes, designed to cater to different tastes and dietary preferences. Whether you're craving comfort food or looking to try something new, we have something for everyone.
                </p>
                <p class="text-center">
                At Restaurant, we believe that food brings people together, and our warm, inviting atmosphere makes it the perfect spot for family meals, gatherings with friends, or a special dinner out. With impeccable service and a commitment to quality, we ensure that every visit is an unforgettable dining experience.
                </p>
              </div>   
        </div>
      </div>
    </section>


    <section class="testimonials py-2 my-2 mt-lg-4 pt-lg-4 mb-lg-0 pb-lg-0">
      <div class="container my-2 py-2 mt-lg-4 pt-lg-4 mb-lg-0 pb-lg-0">
        <div class="row">
          <div class="col-lg-4 d-none d-lg-block">
            <img src="<?php echo base_url('assets/images/'); ?>ab_team_01.png" alt="" data-aos="fade-right">
          </div>
          <div class="col-12 col-lg-8">
            <div class="testimonial-slider-wrapper">
              <div class="slider-content pt-5 pb-4 mx-4" data-aos="fade-down-left">
                <div>
                  <div class="testi-content">
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae,
                      culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae
                      veritatis adipisci a!</p>
=======
>>>>>>> payal
                    <p>"I had an amazing dining experience at this restaurant! The ambiance was warm and inviting, and the 
                      staff was incredibly attentive. The food was simply outstanding—every dish was packed with authentic 
                      flavors and fresh ingredients. I highly recommend the paneer tikka and dal makhani. Definitely coming 
                      back with my family!"</p>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <img src="<?php echo base_url('assets/images/'); ?>testi-signal.png" alt="">
                  </div>
                  <div class="testi-info">
<<<<<<< HEAD
                    <span class="name">Rajesh Iyer</span>
=======
<<<<<<< HEAD
                    <span class="name">Timothy Doe</span>
=======
                    <span class="name">Rajesh Iyer</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                    <span class="position">Customer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae,
                      culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae
                      veritatis adipisci a!</p>
=======
>>>>>>> payal
                    <p>"As someone who understands the effort behind running a successful business, I must say this restaurant
                       has exceeded expectations. The team’s dedication to quality, service, and hygiene is commendable. The 
                       menu is well-curated, and the presentation of dishes is top-notch. Keep up the great work!"
                    </p>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <img src="<?php echo base_url('assets/images/'); ?>testi-signal.png" alt="">
                  </div>
                  <div class="testi-info">
<<<<<<< HEAD
                    <span class="name">Priya Mehta</span>
=======
<<<<<<< HEAD
                    <span class="name">Sarah Ruiz</span>
=======
                    <span class="name">Priya Mehta</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                    <span class="position">Director</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae,
                      culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae
                      veritatis adipisci a!</p>
=======
>>>>>>> payal
                    <p>"The interior design of this restaurant is absolutely stunning! The combination of traditional and 
                      modern elements creates a cozy yet elegant vibe. The lighting, decor, and furniture are all thoughtfully 
                      placed, making it a perfect spot for both casual and fine dining. A true visual treat!
                   </p>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <img src="<?php echo base_url('assets/images/'); ?>testi-signal.png" alt="">
                  </div>
                  <div class="testi-info">
<<<<<<< HEAD
                    <span class="name">Neha Sharma</span>
=======
<<<<<<< HEAD
                    <span class="name">Tracey Lewis</span>
=======
                    <span class="name">Neha Sharma</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                    <span class="position">Designer</span>
                  </div>
                </div>
                <div>
                  <div class="testi-content">
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Architecto vel ipsa dolore sunt vitae,
                      culpa, dolor reiciendis facilis sed blanditiis repellat incidunt impedit iusto? Odio veniam beatae
                      veritatis adipisci a!</p>
=======
>>>>>>> payal
                    <p>"I am truly impressed by the efficiency and professionalism of the staff here. The service is quick, 
                      and the team works seamlessly to ensure every guest has a great experience. The restaurant maintains 
                      high standards of cleanliness and hospitality, which makes it a pleasure to dine here. Highly recommended!"
                    </p>
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  </div>
                  <div class="d-flex justify-content-center mb-3">
                    <img src="<?php echo base_url('assets/images/'); ?>testi-signal.png" alt="">
                  </div>
                  <div class="testi-info">
<<<<<<< HEAD
                    <span class="name">Arjun Sharma</span>
=======
<<<<<<< HEAD
                    <span class="name">Jamie Erickson</span>
=======
                    <span class="name">Arjun Sharma</span>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                    <span class="position">Manager</span>
                  </div>
                </div>
              </div>
              <div class="slider-nav-wrapper mx-5" data-aos="fade-up-right">
                <div class="slider-nav">
                  <div class="slider-nav-img active">
                    <img src="<?php echo base_url('/assets/images/testi-1.jpg') ?>" alt="">
                  </div>
                  <div class="slider-nav-img">
                    <!-- <img src="./assets/images/testi-2.jpg" alt=""> -->
                    <img src="<?php echo base_url('/assets/images/testi-2.jpg') ?>" alt="">

                  </div>
                  <div class="slider-nav-img">
                    <!-- <img src="./assets/images/testi-3.jpg" alt=""> -->
                    <img src="<?php echo base_url('/assets/images/testi-3.jpg') ?>" alt="">

                  </div>
                  <div class="slider-nav-img">
                    <!-- <img src="./assets/images/testi-4.jpg" alt=""> -->
                    <img src="<?php echo base_url('/assets/images/testi-4.jpg') ?>" alt="">

                  </div>
<<<<<<< HEAD
                </div>                                                                            
=======
<<<<<<< HEAD
                </div>
=======
                </div>                                                                            
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-special my-5 py-5">
      <div class="container">
        <div class="row" data-aos="fade-right">
          <h2 class="text-center display-6 fw-bold">
            Our Special
          </h2>
          <div class="about-line d-flex justify-content-center align-items-center">
            <span></span>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="special-card" data-aos="fade-right">
              <div class="box-inner">
                <div class="box-wrapper px-4">
                  <h2 class="pb-2">FRESH MENU</h2>
<<<<<<< HEAD
                  <p class="pb-4">Our fresh menu is crafted daily with seasonal ingredients, offering a variety of vibrant 
                    salads, wholesome bowls, and chef-special delicacies. Each dish is prepared with farm-fresh produce to 
                    ensure maximum flavor and nutrition.</p>
=======
<<<<<<< HEAD
                  <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
=======
                  <p class="pb-4">Our fresh menu is crafted daily with seasonal ingredients, offering a variety of vibrant 
                    salads, wholesome bowls, and chef-special delicacies. Each dish is prepared with farm-fresh produce to 
                    ensure maximum flavor and nutrition.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  <div class="book-a-table">
                    <div class="anim-layer"></div>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="box-showcase pb-5">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <img class="img-fluid" src="<?php echo base_url('/assets/images/feature-box-bg.jpg') ?>" alt="">
                    <h2 class="text-center">FRESH MENU</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="special-card" data-aos="flip-right">
              <div class="box-inner">
                <div class="box-wrapper px-4">
                  <h2 class="pb-2">VARIOUS DRINK</h2>
<<<<<<< HEAD
                  <p class="pb-4">From refreshing mocktails to rich shakes and artisanal coffee, our drinks menu has 
                    something for every mood. Try our signature fruit coolers or traditional masala chai for a perfect sip.</p>
=======
<<<<<<< HEAD
                  <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
=======
                  <p class="pb-4">From refreshing mocktails to rich shakes and artisanal coffee, our drinks menu has 
                    something for every mood. Try our signature fruit coolers or traditional masala chai for a perfect sip.</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  <div class="book-a-table">
                    <div class="anim-layer"></div>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="box-showcase pb-5">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <!-- <img class="img-fluid" src="./assets/images/feature-box-bg-2.jpg" alt=""> -->
                    <img class="img-fluid" src="<?php echo base_url('/assets/images/feature-box-bg-2.jpg') ?>" alt="">

                    <h2 class="text-center">VARIOUS DRINK</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="special-card" data-aos="fade-left">
              <div class="box-inner">
                <div class="box-wrapper px-4">
                  <h2 class="pb-2">EXCLUSIVE DISHES</h2>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                  <p class="pb-4">Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
=======
>>>>>>> payal
                  <p class="pb-4">Indulge in our chef’s exclusive creations, like the flavorful Tandoori Soya Chaap and the 
                    aromatic Pesto Paneer Biryani. These unique dishes blend innovation with tradition for a one-of-a-kind 
                    dining experience.
                  </p>    
<<<<<<< HEAD
=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                  <div class="book-a-table">
                    <div class="anim-layer"></div>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="box-showcase pb-5">
                  <div class="d-flex flex-column align-items-center justify-content-center">
                    <!-- <img class="img-fluid" src="./assets/images/feature-box-bg-3.jpg" alt=""> -->
                    <img class="img-fluid" src="<?php echo base_url('/assets/images/feature-box-bg-3.jpg') ?>" alt="">
                    <h2 class="text-center">EXCLUSIVE DISHES</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="our-partner my-5">
      <div class="container partner-slider py-5" data-aos="fade-up-left">
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-01.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-02.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-03.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-04.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-01.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-02.png" alt="">
        </div>
        <div class="d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo base_url('assets/images/'); ?>partner-03.png" alt="">
        </div>
      </div>
    </section>

    <section class="counter my-5">
      <img data-aos="fade-right" class="counter-after" src="<?php echo base_url('assets/images/'); ?>vegetable_01.png" alt="">
      <img data-aos="fade-right" class="counter-before" src="<?php echo base_url('assets/images/'); ?>vegetable_02.png" alt="">
      <div class="container pt-4 pb-5" data-aos="fade-up-right">
        <div class="row py-5">
          <div class="col-lg-3">
            <div class="counter-box d-flex flex-column align-items-center">
              <div class="counter-info pb-3">
                <span class="number">103</span>
                <span class="heading">/dishes</span>
              </div>
              <div class="counter-avatar pt-4">
                <img src="<?php echo base_url('assets/images/'); ?>counter-1.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-box d-flex flex-column align-items-center">
              <div class="counter-info pb-3">
                <span class="number">2389</span>
                <span class="heading">/customers</span>
              </div>
              <div class="counter-avatar pt-4">
                <img src="<?php echo base_url('assets/images/'); ?>counter-2.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-box d-flex flex-column align-items-center">
              <div class="counter-info pb-3">
                <span class="number">20</span>
                <span class="heading">/awards</span>
              </div>
              <div class="counter-avatar pt-4">
                <img src="<?php echo base_url('assets/images/'); ?>counter-3.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="counter-box d-flex flex-column align-items-center">
              <div class="counter-info pb-3">
                <span class="number">2589</span>
                <span class="heading">/working hours</span>
              </div>
              <div class="counter-avatar pt-4">
                <img src="<?php echo base_url('assets/images/'); ?>counter-4.png" alt="">
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
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
    <section class="subscribe-us pb-5 mb-5">
      <img class="d-none d-lg-block" src="<?php echo base_url().'/assets/images/subscribe-us.png'?>" alt="" data-aos="fade-down-right">
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
            <p class="px-0">"Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence with every 
                             bite at Dinsphere"</p>
=======
<<<<<<< HEAD
            <p class="px-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
              ut aliquip ex ea commodo consequat Duis aute irure dolor.</p>
=======
            <p class="px-0">"Delicious flavors, fresh ingredients, and unforgettable dining—experience excellence with every 
                             bite at Dinsphere"</p>
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
                    12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038<br>
                    45, Connaught Place, New Delhi, Delhi - 110001</p>
=======
<<<<<<< HEAD
                    157 White Oak Drive Kansas City <br>
                    689 Lynn Street South Boston
                  </p>
=======
                    12, MG Road, Indiranagar, Bengaluru, Karnataka - 560038<br>
                    45, Connaught Place, New Delhi, Delhi - 110001</p>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
                </div>
              </div>
              <div class="location d-flex align-items-center pe-2 py-3">
                <i class="fa-solid fa-mobile text-white fa-2x border-bottom pb-2"></i>
                <div class="ps-3">
                  <p class="mb-0">
<<<<<<< HEAD
                    1234567890<br>
                    9876543210
                  </p> 
=======
<<<<<<< HEAD
                    (617)-276-8031 <br>
                    (617)-276-8031
                  </p>
=======
                    1234567890<br>
                    9876543210
                  </p> 
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
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
<<<<<<< HEAD
              <h2>Open Hours</h2>
=======
<<<<<<< HEAD
              <h2>Open Hour</h2>
=======
              <h2>Open Hours</h2>
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
>>>>>>> payal
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
          rights reserved. Design by <a href=" "
            class="fw-bold author-name">Payal & Prerna</a></p>
=======
<<<<<<< HEAD
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Restoran.</b> All
          rights reserved. Design by <a href="https://www.linkedin.com/in/codewithshabbir/"
            class="fw-bold author-name">Muhammad Shabbir</a></p>
=======
        <p class="text-center pt-4 mt-3 pt-lg-0">&copy; <span id="copyrightCurrentYear"></span> <b> Dinsphere.</b> All
          rights reserved. Design by <a href=" "
            class="fw-bold author-name">Payal & Prerna</a></p>
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
  <!-- <script src="./assets/js/script.js"></script> -->
  <script src="<?php echo base_url('assets/script.js'); ?>"></script>

</body>
<<<<<<< HEAD

=======
>>>>>>> ae097f466027d42b66cea1977c1490c3ef9fa8d0
</html>