<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:25 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <?php include 'header.php' ?>
      <?php include 'links.php'; ?>
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="tp-preloader-content">
                  <div class="tp-preloader-logo">
                     <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle> 
                       </svg>
                     </div>
                     <img src="assets/img/logo/preloader/preloader-icon.svg" alt="">
                  </div>
                  <h3 class="tp-preloader-title">Shofy</h3>
                  <p class="tp-preloader-subtitle">Loading</p>
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                 </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.php">
                        <img src="assets/img/logo/logo.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="offcanvas__category pb-40">
                  <button class="tp-offcanvas-category-toggle">
                     <i class="fa-solid fa-bars"></i>
                     All Categories
                  </button>
                  <div class="tp-category-mobile-menu">
                     
                  </div>
               </div>
               <div class="tp-main-menu-mobile fix mb-40"></div>

               <div class="offcanvas__contact align-items-center d-none">
                  <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="assets/img/icon/contact.png" alt="">
                     </span>
                  </div>
                  <div class="offcanvas__contact-content">
                     <h3 class="offcanvas__contact-title">
                        <a href="tel:098-852-987">004524865</a>
                     </h3>
                  </div>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.php" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
               </div>
            </div>
            <div class="offcanvas__bottom">
               <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                  <div class="offcanvas__currency-wrapper currency">
                     <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                     <ul class="offcanvas__currency-list tp-currency-list">
                        <li>USD</li>
                        <li>ERU</li>
                        <li>BDT </li>
                        <li>INR</li>
                     </ul>
                  </div>
                  <div class="offcanvas__select language">
                     <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                        <div class="offcanvas__lang-img mr-15">
                           <img src="assets/img/icon/language-flag.png" alt="">
                        </div>
                        <div class="offcanvas__lang-wrapper">
                           <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                           <ul class="offcanvas__lang-list tp-lang-list">
                              <li>Spanish</li>
                              <li>Portugese</li>
                              <li>American</li>
                              <li>Canada</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- mobile menu area start -->
      <div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
         <div class="container">
            <div class="row row-cols-5">
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="shop.php" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                     </button>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="wishlist.php" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="profile.php" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- mobile menu area end -->

      <!-- search area start -->
      <section class="tp-search-area">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="tp-search-form">
                     <div class="tp-search-close text-center mb-20">
                        <button class="tp-search-close-btn tp-search-close-btn"></button>
                     </div>
                     <form action="#">
                        <div class="tp-search-input mb-10">
                           <input type="text" placeholder="Search for product...">
                           <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="tp-search-category">
                           <span>Search by : </span>
                           <a href="#">Men, </a>
                           <a href="#">Women, </a>
                           <a href="#">Children, </a>
                           <a href="#">Shirt, </a>
                           <a href="#">Demin</a>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- search area end -->

      <!-- cart mini area start -->
      <div class="cartmini__area">
         <div class="cartmini__wrapper d-flex justify-content-between flex-column">
             <div class="cartmini__top-wrapper">
                 <div class="cartmini__top p-relative">
                     <div class="cartmini__top-title">
                         <h4>Shopping cart</h4>
                     </div>
                     <div class="cartmini__close">
                         <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                     </div>
                 </div>
                 <div class="cartmini__shipping">
                  <p> Free Shipping for all orders over <span>$50</span></p>
                  <div class="progress">
                     <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                   </div>                   
                 </div>
                 <div class="cartmini__widget">
                     <div class="cartmini__widget-item">
                         <div class="cartmini__thumb">
                           <a href="product-details.php">
                              <img src="assets/img/product/product-1.jpg" alt="">
                           </a>
                         </div>
                         <div class="cartmini__content">
                           <h5 class="cartmini__title"><a href="product-details.php">Level Bolt Smart Lock</a></h5>
                           <div class="cartmini__price-wrapper">
                              <span class="cartmini__price">$46.00</span>
                              <span class="cartmini__quantity">x2</span>
                           </div>
                         </div>
                         <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                     </div>
                 </div>
                 <!-- for wp -->
                 <!-- if no item in cart -->
                 <div class="cartmini__empty text-center d-none">
                     <img src="assets/img/product/cartmini/empty-cart.png" alt="">
                     <p>Your Cart is empty</p>
                     <a href="shop.php" class="tp-btn">Go to Shop</a>
                 </div>
             </div>
             <div class="cartmini__checkout">
                 <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="cart.php" class="tp-btn mb-10 w-100"> view cart</a>
                     <a href="checkout.php" class="tp-btn tp-btn-border w-100"> checkout</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- cart mini area end -->

      <!-- header area start -->
   
      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay breadcrumb__style-3" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Our Blog</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Blog</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- postbox area start -->
         <section class="tp-postbox-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-postbox-wrapper pr-50">
                        <article class="tp-postbox-item format-image mb-50 transition-3">
                           <div class="tp-postbox-thumb w-img">
                              <a href="blog-details.php">
                                 <img src="assets/img/blog/blog-big-3.jpg" alt="">
                              </a>
                           </div>
                           <div class="tp-postbox-content">
                              <div class="tp-postbox-meta">
                                 <span><i class="far fa-calendar-check"></i> July 21, 2020 </span>
                                 <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                                 <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                              </div>
                              <h3 class="tp-postbox-title">
                                 <a href="blog-details.php">How to Clean Your Home Faster and More Efficiently</a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat […]</p>
                              </div>
                              <div class="tp-postbox-read-more">
                                 <a href="blog-details.php" class="tp-btn">Read More</a>                               
                              </div>
                           </div>
                        </article>
                        <article class="tp-postbox-item format-video mb-50 transition-3">
                           <div class="tp-postbox-thumb tp-postbox-video w-img p-relative">
                              <a href="blog-details.php">
                                 <img src="assets/img/blog/blog-big-2.jpg" alt="">
                              </a>
                              <a href="https://youtu.be/-WRZI63emjs" class="tp-postbox-video-btn popup-video"><i class="fas fa-play"></i></a>
                           </div>
                           <div class="tp-postbox-content">
                              <div class="tp-postbox-meta">
                                 <span><i class="far fa-calendar-check"></i> July 21, 2020 </span>
                                 <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                                 <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                              </div>
                              <h3 class="tp-postbox-title">
                                 <a href="blog-details.php">Four Ways a Clean Workplace Makes Employees Happy and Healthy</a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat […]</p>
                              </div>
                              <div class="tp-postbox-read-more">
                                 <a href="blog-details.php" class="tp-btn">Read More</a>
                              </div>
                           </div>
                        </article>
                        <article class="tp-postbox-item format-quote mb-50 transition-3">
                           <div class="tp-postbox-quote">
                              <blockquote>
                                 <p>Only one thing is impossible for God: To find any sense in any copyright law on the planet.
                                    <cite>Shahnewaz Sakil</cite>
                                 </p>
                              </blockquote>
                           </div>
                        </article>
                        <article class="tp-postbox-item format-audio mb-50 transition-3">
                           <div class="tp-postbox-thumb tp-postbox-audio w-img p-relative">
                              <iframe allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/316547873&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                           </div>
                           <div class="tp-postbox-content">
                              <div class="tp-postbox-meta">
                                 <span><i class="far fa-calendar-check"></i> July 21, 2020 </span>
                                 <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                                 <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                              </div>
                              <h3 class="tp-postbox-title">
                                 <a href="blog-details.php">Time for Spring Cleaning? Use These Tips From the Professionals</a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat […]</p>
                              </div>
                              <div class="tp-postbox-read-more">
                                 <a href="blog-details.php" class="tp-btn">Read More</a>
                              </div>
                           </div>
                        </article>
                        <article class="tp-postbox-item format-image mb-50 transition-3">
                           <div class="tp-postbox-thumb tp-postbox-slider swiper-container w-img p-relative">
                              <div class="swiper-wrapper">
                                 <div class="tp-postbox-slider-item swiper-slide">
                                    <img src="assets/img/blog/blog-big-4.jpg" alt="">
                                 </div>
                                 <div class="tp-postbox-slider-item swiper-slide">
                                    <img src="assets/img/blog/blog-big-5.jpg" alt="">
                                 </div>
                                 <div class="tp-postbox-slider-item swiper-slide">
                                    <img src="assets/img/blog/blog-big-6.jpg" alt="">
                                 </div>
                              </div>
                              <div class="tp-postbox-nav">
                                 <button class="tp-postbox-slider-button-next"><i class="fal fa-arrow-right"></i></button>
                                 <button class="tp-postbox-slider-button-prev"><i class="fal fa-arrow-left"></i></button>
                              </div>
                           </div>
                           <div class="tp-postbox-content">
                              <div class="tp-postbox-meta">
                                 <span><i class="far fa-calendar-check"></i> July 21, 2020 </span>
                                 <span><a href="#"><i class="far fa-user"></i> Shahnewaz</a></span>
                                 <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                              </div>
                              <h3 class="tp-postbox-title">
                                 <a href="blog-details.php">How to Clean Your Home Faster and More Efficiently</a>
                              </h3>
                              <div class="tp-postbox-text">
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat […]</p>
                              </div>
                              <div class="tp-postbox-read-more">
                                 <a href="blog-details.php" class="tp-btn">Read More</a>
                              </div>
                           </div>
                        </article>
                        <div class="tp-blog-pagination mt-50">
                           <div class="tp-pagination">
                              <nav>
                                 <ul>
                                    <li>
                                       <a href="blog.php" class="tp-pagination-prev prev page-numbers">
                                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </li>
                                    <li>
                                       <a href="blog.php">1</a>
                                    </li>
                                    <li>
                                       <span class="current">2</span>
                                    </li>
                                    <li>
                                       <a href="blog.php">3</a>
                                    </li>
                                    <li>
                                       <a href="blog-grid.php" class="next page-numbers">
                                          <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M13.9998 6.77883L1 6.77883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M8.75684 1.55767L14.0001 6.7784L8.75684 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>                                     
                                       </a>
                                    </li>
                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-lg-4">
                     <div class="tp-sidebar-wrapper tp-sidebar-ml--24">
                        <div class="tp-sidebar-widget mb-35">
                           <div class="tp-sidebar-search">
                              <form action="#">
                                 <div class="tp-sidebar-search-input">
                                    <input type="text" placeholder="Search...">
                                    <button type="submit">
                                       <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </button>
                                 </div>
                              </form>
                           </div>
                        </div>

                        <!-- about -->
                        <div class="tp-sidebar-widget mb-35">
                           <h3 class="tp-sidebar-widget-title">About me</h3>
                           <div class="tp-sidebar-widget-content">
                              <div class="tp-sidebar-about">
                                 <div class="tp-sidebar-about-thumb mb-25">
                                    <a href="#">
                                       <img src="assets/img/users/user-11.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="tp-sidebar-about-content">
                                    <h3 class="tp-sidebar-about-title">
                                       <a href="#">Ravi O'Leigh</a>
                                    </h3>
                                    <span class="tp-sidebar-about-designation">Photographer & Blogger</span>
                                    <p>Lorem ligula eget dolor. Aenean massa. Cum sociis que penatibus magnis dis parturient</p>
                                    <div class="tp-sidebar-about-signature">
                                       <img src="assets/img/blog/signature/signature.png" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- about end -->

                        <!-- latest post start -->
                        <div class="tp-sidebar-widget mb-35">
                           <h3 class="tp-sidebar-widget-title">Latest Posts</h3>
                           <div class="tp-sidebar-widget-content">
                              <div class="tp-sidebar-blog-item-wrapper">
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/sidebar/blog-sidebar-1.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>12 April, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="blog-details.php">Sweeten your summer Wardrobes</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/sidebar/blog-sidebar-2.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>8 July, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="blog-details.php">Exploring the English Countryside</a>
                                       </h3>
                                    </div>
                                 </div>
                                 <div class="tp-sidebar-blog-item d-flex align-items-center">
                                    <div class="tp-sidebar-blog-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/sidebar/blog-sidebar-3.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-sidebar-blog-content">
                                       <div class="tp-sidebar-blog-meta">
                                          <span>12 April, 2023</span>
                                       </div>
                                       <h3 class="tp-sidebar-blog-title">
                                          <a href="blog-details.php">Freelancer Days 2023, What’s new?</a>
                                       </h3>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- latest post end -->

                        <!-- categories start -->
                        <div class="tp-sidebar-widget widget_categories mb-35">
                           <h3 class="tp-sidebar-widget-title">Categories</h3>
                           <div class="tp-sidebar-widget-content">
                              <ul>
                                 <li><a href="blog-grid.php">Farming <span>(12)</span></a></li>
                                 <li><a href="blog-grid.php">Crisp Bread & Cake <span>(6)</span></a></li>
                                 <li><a href="blog-grid.php">Milk & Meat <span>(2)</span></a></li>
                                 <li><a href="blog-grid.php">Organic Fruits <span>(8)</span></a></li>
                                 <li><a href="blog-grid.php">Sea Foods <span>(0)</span></a></li>
                                 <li><a href="blog-grid.php">Vegetable <span>(3)</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <!-- categories end -->

                        <!-- tag cloud start -->
                        <div class="tp-sidebar-widget mb-35">
                           <h3 class="tp-sidebar-widget-title">Popular Tags</h3>
                           <div class="tp-sidebar-widget-content tagcloud">
                              <a href="#">Summer</a>
                              <a href="#">Vintage</a>
                              <a href="#">Sunglasses</a>
                              <a href="#">Organic Food</a>
                              <a href="#">Lifesttyle</a>
                              <a href="#">Nature</a>
                           </div>
                        </div>
                        <!-- tag cloud end -->

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- postbox area end -->

      </main>
      

      <!-- footer area start -->
      <?php include 'footer.php';
     include 'java.php';?>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:33 GMT -->
</html>