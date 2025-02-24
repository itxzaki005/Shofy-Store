<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/shop-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:18:36 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    
<?php include 'header.php';
include 'links.php';?>


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
                     <a href="index.html">
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
                        <a href="tel:092-333-420-7478">092-3334207478</a>
                     </h3>
                  </div>
               </div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
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
                     <a href="shop.html" class="tp-mobile-item-btn">
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
                     <a href="wishlist.html" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                     </a>
                  </div>
               </div>
               <div class="col">
                  <div class="tp-mobile-item text-center">
                     <a href="profile.html" class="tp-mobile-item-btn">
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
                           <a href="product-details.html">
                              <img src="assets/img/product/product-1.jpg" alt="">
                           </a>
                         </div>
                         <div class="cartmini__content">
                           <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
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
                     <a href="shop.html" class="tp-btn">Go to Shop</a>
                 </div>
             </div>
             <div class="cartmini__checkout">
                 <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                 </div>
                 <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
                     <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
                 </div>
             </div>
         </div>
     </div>
     <!-- cart mini area end -->

      

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-100 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Only Categories</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Only Categories</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- banner area start -->
         <section class="tp-banner-area pb-30">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                     <div class="tp-banner-item tp-banner-height has-square p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-1.jpg"></div>
                        <div class="tp-banner-content">
                           <span>Sale 20% off all store</span>
                           <h3 class="tp-banner-title">
                              <a href="product-details.html">Smartphone <br> BLU G91 Pro 2022</a>
                           </h3>
                           <div class="tp-banner-btn">
                              <a href="product-details.html" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-5">
                     <div class="tp-banner-item tp-banner-item-sm has-square tp-banner-height p-relative mb-30 z-index-1 fix">
                        <div class="tp-banner-thumb include-bg transition-3" data-background="assets/img/product/banner/product-banner-2.jpg"></div>
                        <div class="tp-banner-content">
                           <h3 class="tp-banner-title">
                              <a href="product-details.html">HyperX Cloud II <br> Wireless</a>
                           </h3>
                           <p>Sale 35% off</p>
                           <div class="tp-banner-btn">
                              <a href="product-details.html" class="tp-link-btn">Shop Now 
                                 <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.9998 6.19656L1 6.19656" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.75674 0.975394L14 6.19613L8.75674 11.4177" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- banner area end -->

         <!-- category area start -->
         <section class="tp-category-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-1.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Headphones</a>
                           </h3>
                           <span class="tp-category-main-item">23 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-2.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Smart Watches</a>
                           </h3>
                           <span class="tp-category-main-item">07 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-3.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Laptops</a>
                           </h3>
                           <span class="tp-category-main-item">14 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-4.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Tablets</a>
                           </h3>
                           <span class="tp-category-main-item">19 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-5.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Desktop Computer</a>
                           </h3>
                           <span class="tp-category-main-item">26 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-6.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Bluetooth Earphones</a>
                           </h3>
                           <span class="tp-category-main-item">12 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-7.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Wireless Headphones</a>
                           </h3>
                           <span class="tp-category-main-item">33 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-8.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Gaming Console</a>
                           </h3>
                           <span class="tp-category-main-item">05 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-9.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">CPU Coolers</a>
                           </h3>
                           <span class="tp-category-main-item">21 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-10.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Smart Phones</a>
                           </h3>
                           <span class="tp-category-main-item">35 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-11.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Tablets</a>
                           </h3>
                           <span class="tp-category-main-item">27 Products</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6">
                     <div class="tp-category-main-box mb-25 p-relative fix" data-bg-color="#F3F5F7">
                        <div class="tp-category-main-thumb include-bg transition-3" data-background="assets/img/category/main/category-main-12.jpg"></div>
                        <div class="tp-category-main-content">
                           <h3 class="tp-category-main-title">
                              <a href="shop.html">Playstation</a>
                           </h3>
                           <span class="tp-category-main-item">08 Products</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-category-main-result text-center mb-35 mt-35">
                        <p>Showing 12 of 46 products</p>
                        <div class="tp-category-main-result-bar">
                           <span data-width="40%"></span>
                        </div>
                     </div>
                     <div class="tp-category-main-more text-center">
                        <a href="shop.html" class="tp-load-more-btn">
                           Load More 
                           <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M13.0003 1.698V5.2986H9.39966" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              <path d="M11.4933 8.29916C11.1032 9.40329 10.3649 10.3507 9.38948 10.9987C8.41408 11.6467 7.2545 11.9601 6.08548 11.8917C4.91647 11.8233 3.80134 11.3768 2.90816 10.6195C2.01497 9.86225 1.3921 8.83518 1.13343 7.69309C0.874748 6.551 0.99427 5.35578 1.47398 4.28753C1.95369 3.21928 2.7676 2.33588 3.79306 1.77045C4.81852 1.20502 5.99998 0.988199 7.15939 1.15265C8.3188 1.31711 9.39335 1.85393 10.2211 2.68222L12.9996 5.29866" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- category area end -->

     
         <!-- subscribe area start -->
         <section class="tp-subscribe-area tp-subscribe-square pt-70 pb-65 theme-bg p-relative z-index-1">
            <div class="tp-subscribe-shape">
               <img class="tp-subscribe-shape-1" src="assets/img/subscribe/subscribe-shape-1.png" alt="">
               <img class="tp-subscribe-shape-2" src="assets/img/subscribe/subscribe-shape-2.png" alt="">
               <img class="tp-subscribe-shape-3" src="assets/img/subscribe/subscribe-shape-3.png" alt="">
               <img class="tp-subscribe-shape-4" src="assets/img/subscribe/subscribe-shape-4.png" alt="">
               <!-- plane shape -->
               <div class="tp-subscribe-plane">
                  <img class="tp-subscribe-plane-shape" src="assets/img/subscribe/plane.png" alt="">
                  <svg width="399" height="110" class="d-none d-sm-block" viewBox="0 0 399 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M0.499634 1.00049C8.5 20.0005 54.2733 13.6435 60.5 40.0005C65.6128 61.6426 26.4546 130.331 15 90.0005C-9 5.5 176.5 127.5 218.5 106.5C301.051 65.2247 202 -57.9188 344.5 40.0003C364 53.3997 384 22 399 22" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
                  <svg class="d-sm-none" width="193" height="110" viewBox="0 0 193 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M1 1C4.85463 20.0046 26.9085 13.6461 29.9086 40.0095C32.372 61.6569 13.5053 130.362 7.98637 90.0217C-3.57698 5.50061 85.7981 127.53 106.034 106.525C145.807 65.2398 98.0842 -57.9337 166.742 40.0093C176.137 53.412 185.773 22.0046 193 22.0046" stroke="white" stroke-opacity="0.5" stroke-dasharray="3 3"/>
                  </svg>
               </div>
            </div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-subscribe-content">
                        <span>Sale 20% off all store</span>
                        <h3 class="tp-subscribe-title">Subscribe our Newsletter</h3>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5">
                     <div class="tp-subscribe-form">
                        <form action="#">
                           <div class="tp-subscribe-input">
                              <input type="email" placeholder="Enter Your Email">
                              <button type="submit">Subscribe</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe area end -->         
      </main>
      
<?php include 'footer.php';
     include 'java.php';?>

   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/shop-category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:18:46 GMT -->
</html>
