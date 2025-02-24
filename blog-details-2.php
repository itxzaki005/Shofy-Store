<!doctype php>
<php class="no-js" lang="zxx">
   
<!-- Mirrored from php.weblearnbd.net/shofy-prv/shofy/blog-details-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:44 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce </title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <?php include 'header.php' ?>
      <?php include 'links.php'; ?>

      <!-- Place favicon.ico in the root directory -->
      
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
                        <a href="tel:0092-333-420-7478">092-333-420-74785</a>
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
      <header>
         <div class="tp-header-area tp-header-style-primary tp-header-height">
            <!-- header top start  -->
            <div class="tp-header-top-2 p-relative z-index-11 tp-header-top-border d-none d-md-block">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-6">
                        <div class="tp-header-info d-flex align-items-center">
                           <div class="tp-header-info-item">
                              <a href="#">
                                 <span>
                                    <svg width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M8 0H5.81818C4.85376 0 3.92883 0.383116 3.24688 1.06507C2.56493 1.74702 2.18182 2.67194 2.18182 3.63636V5.81818H0V8.72727H2.18182V14.5455H5.09091V8.72727H7.27273L8 5.81818H5.09091V3.63636C5.09091 3.44348 5.16753 3.25849 5.30392 3.1221C5.44031 2.98571 5.6253 2.90909 5.81818 2.90909H8V0Z" fill="currentColor"/>
                                    </svg>                                    
                                 </span> 7500k Followers
                              </a>
                           </div>
                           <div class="tp-header-info-item">
                              <a href="tel:4092-333-420-7478">
                                 <span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M1.359 2.73916C1.59079 2.35465 2.86862 0.958795 3.7792 1.00093C4.05162 1.02426 4.29244 1.1883 4.4881 1.37943H4.48885C4.93737 1.81888 6.22423 3.47735 6.29648 3.8265C6.47483 4.68282 5.45362 5.17645 5.76593 6.03954C6.56213 7.98771 7.93402 9.35948 9.88313 10.1549C10.7455 10.4679 11.2392 9.44752 12.0956 9.62511C12.4448 9.6981 14.1042 10.9841 14.5429 11.4333V11.4333C14.7333 11.6282 14.8989 11.8698 14.9214 12.1422C14.9553 13.1016 13.4728 14.3966 13.1838 14.5621C12.502 15.0505 11.6125 15.0415 10.5281 14.5373C7.50206 13.2784 2.66618 8.53401 1.38384 5.39391C0.893174 4.31561 0.860062 3.42016 1.359 2.73916Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M9.84082 1.18318C12.5534 1.48434 14.6952 3.62393 15 6.3358" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       <path d="M9.84082 3.77927C11.1378 4.03207 12.1511 5.04544 12.4039 6.34239" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>                                   
                                 </span> +(402) 763 282 46
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="tp-header-top-right tp-header-top-black d-flex align-items-center justify-content-end">
                           <div class="tp-header-top-menu d-flex align-items-center justify-content-end">
                              <div class="tp-header-top-menu-item tp-header-lang">
                                 <span class="tp-header-lang-toggle" id="tp-header-lang-toggle">English</span>
                                 <ul>
                                    <li>
                                       <a href="#">Spanish</a>
                                    </li>
                                    <li>
                                       <a href="#">Russian</a>
                                    </li>
                                    <li>
                                       <a href="#">Portuguese</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-top-menu-item tp-header-currency">
                                 <span class="tp-header-currency-toggle" id="tp-header-currency-toggle">USD</span>
                                 <ul>
                                    <li>
                                       <a href="#">EUR</a>
                                    </li>
                                    <li>
                                       <a href="#">CHF</a>
                                    </li>
                                    <li>
                                       <a href="#">GBP</a>
                                    </li>
                                    <li>
                                       <a href="#">KWD</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="tp-header-top-menu-item tp-header-setting">
                                 <span class="tp-header-setting-toggle" id="tp-header-setting-toggle">Setting</span>
                                 <ul>
                                    <li>
                                       <a href="profile.php">My Profile</a>
                                    </li>
                                    <li>
                                       <a href="wishlist.php">Wishlist</a>
                                    </li>
                                    <li>
                                       <a href="cart.php">Cart</a>
                                    </li>
                                    <li>
                                       <a href="login.php">Logout</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- header bottom start -->
            <div id="header-sticky" class="tp-header-bottom-2 tp-header-sticky">
               <div class="container">
                  <div class="tp-mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-5 col-md-5 col-sm-4 col-6">
                           <div class="logo">
                              <a href="index.php">
                                 <img src="assets/img/logo/logo.svg" alt="logo">
                              </a>
                           </div>
                        </div>
                        <div class="col-xl-5 d-none d-xl-block">
                           <div class="main-menu menu-style-2">
                              <nav class="tp-main-menu-content">
                                 <ul>
                                    <li class="has-dropdown has-mega-menu">
                                       <a href="index.php">Home</a>
                                       <div class="home-menu tp-submenu tp-mega-menu">
                                          <div class="row row-cols-1 row-cols-lg-4 row-cols-xl-5">
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index.php">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-1.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Electronics </h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-2.php">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-2.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Fashion</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-3.php">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-3.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Beauty</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-4.php">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-4.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Jewelry </h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                             <div class="col">
                                                <div class="home-menu-item ">
                                                   <a href="index-5.php">
                                                      <div class="home-menu-thumb p-relative fix">
                                                         <img src="assets/img/menu/menu-home-5.jpg" alt="">
                                                      </div>
                                                      <div class="home-menu-content">
                                                         <h5 class="home-menu-title">Grocery</h5>
                                                      </div>
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </li>
                                    <li  class="has-dropdown has-mega-menu">
                                       <a href="shop.php">Shop</a>
                                       <div class="shop-mega-menu tp-submenu tp-mega-menu">
                                          <div class="row">
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.php" class="shop-mega-menu-title">Shop Pages</a>
                                                      <ul>
                                                          <li><a href="shop-category.php">Grid Category</a></li>
                                                          <li><a href="shop.php">Grid Layout</a></li>
                                                          <li><a href="shop-list.php">List Layout</a></li>
                                                          <li><a href="shop-masonary.php">Masonary Layout</a></li>
                                                          <li><a href="shop-full-width.php">Full width Layout</a></li>
                                                          <li><a href="shop-1600.php">1600px Layout</a></li>
                                                          <li><a href="shop.php">Left Sidebar</a></li>
                                                          <li><a href="shop-right-sidebar.php">Right Sidebar</a></li>
                                                          <li><a href="shop-no-sidebar.php">Hidden Sidebar</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.php" class="shop-mega-menu-title">Features</a>
                                                      <ul>
                                                         <li><a href="shop-filter-dropdown.php">Filter Dropdown</a></li>
                                                         <li><a href="shop-filter-offcanvas.php">Filters Offcanvas</a></li>
                                                         <li><a href="shop.php">Filters Sidebar</a></li>
                                                         <li><a href="shop-load-more.php">Load More button</a></li>
                                                         <li><a href="shop-infinite-scroll.php">Infinit scrolling</a></li>
                                                         <li><a href="shop-list.php">Collections list</a></li>
                                                         <li><a href="shop.php">Hidden search</a></li>
                                                         <li><a href="shop.php">Search Full screen</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-2">
                                                <div class="shop-mega-menu-list">
                                                      <a href="shop.php" class="shop-mega-menu-title">Hover Style</a>
                                                      <ul>
                                                         <li><a href="shop.php">Hover Style 1</a></li>
                                                         <li><a href="shop.php">Hover Style 2</a></li>
                                                         <li><a href="shop.php">Hover Style 3</a></li>
                                                         <li><a href="shop.php">Hover Style 4</a></li>
                                                      </ul>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="assets/img/menu/product/menu-product-img-1.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.php" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Phones</a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="col-lg-3">
                                                <div class="shop-mega-menu-img">
                                                   <img src="assets/img/menu/product/menu-product-img-2.jpg" alt="">
                                                   <div class="shop-mega-menu-btn">
                                                      <a href="shop-category.php" class="tp-menu-showcase-btn tp-menu-showcase-btn-2">Cameras</a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                   </li>
                                    <li class="has-dropdown has-mega-menu ">
                                       
                                       <a href="shop.php">Products</a>
                                       <ul class="tp-submenu tp-mega-menu mega-menu-style-2">
                                          <!-- first col -->
                                          <li class="has-dropdown">
                                             <a href="shop.php" class="mega-menu-title">Shop Page</a>
                                             <ul class="tp-submenu">
                                                <li><a href="shop-category.php">Only Categories</a></li>
                                                <li><a href="shop-filter-offcanvas.php">Shop Grid</a></li>
                                                <li><a href="shop.php">Shop Grid with Sideber</a></li>
                                                <li><a href="shop-list.php">Shop List</a></li>
                                                <li><a href="shop-category.php">Categories</a></li>
                                                <li><a href="product-details.php">Product Details</a></li>
                                                <li><a href="product-details-progress.php">Product Details Progress</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="product-details.php" class="mega-menu-title">Products</a>
                                             <ul class="tp-submenu">
                                                
                                                <li><a href="product-details.php">Product Simple</a></li>
                                                <li><a href="product-details-video.php">With Video</a></li>
                                                <li><a href="product-details-countdown.php">With Countdown Timer</a></li>
                                                <li><a href="product-details-presentation.php">Product Presentation</a></li>
                                                <li><a href="product-details-swatches.php">Variations Swatches</a></li>
                                                <li><a href="product-details-list.php">List View</a></li>
                                                <li><a href="product-details-gallery.php">Details Gallery</a></li>
                                                <li><a href="product-details-slider.php">With Slider</a></li>
                                             </ul>
                                          </li>
                                          <!-- third col -->
                                          <li  class="has-dropdown">
                                             <a href="shop.php" class="mega-menu-title">eCommerce</a>
                                             <ul class="tp-submenu">
                                                <li><a href="cart.php">Shopping Cart</a></li>
                                                <li><a href="order.php">Track Your Order</a></li>
                                                <li><a href="compare.php">Compare</a></li>
                                                <li><a href="wishlist.php">Wishlist</a></li>
                                                <li><a href="checkout.php">Checkout</a></li>
                                                <li><a href="profile.php">My account</a></li>
                                             </ul>
                                          </li>

                                          <!-- second col -->
                                          <li  class="has-dropdown">
                                             <a href="shop.php" class="mega-menu-title">More Pages</a>
                                             <ul class="tp-submenu">
                                                
                                               
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="register.php">Register</a></li>
                                                <li><a href="forgot.php">Forgot Password</a></li>
                                                <li><a href="404.php">404 Error</a></li>
                                             </ul>
                                          </li>

                                       </ul>
                                    </li>
                                    <li><a href="coupon.php">Coupons</a></li>
                                    <li class="has-dropdown">
                                       <a href="blog.php">Blog</a>
                                       <ul class="tp-submenu">
                                          <li><a href="blog.php">Blog Standard</a></li>
                                          <li><a href="blog-grid.php">Blog Grid</a></li>
                                          <li><a href="blog-list.php">Blog List</a></li>
                                          <li><a href="blog-details-2.php">Blog Details Full Width</a></li>
                                          <li><a href="blog-details.php">Blog Details</a></li>
                                       </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                 </ul>
                              </nav>
                           </div>
                           <div class="tp-category-menu-wrapper d-none">
                              <nav class="tp-category-menu-content">
                                 <ul>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M5.90532 14.8316V12.5719C5.9053 11.9971 6.37388 11.5301 6.95443 11.5262H9.08101C9.66434 11.5262 10.1372 11.9944 10.1372 12.5719V12.5719V14.8386C10.1371 15.3266 10.5305 15.7254 11.0233 15.7368H12.441C13.8543 15.7368 15 14.6026 15 13.2035V13.2035V6.77525C14.9925 6.22482 14.7314 5.70794 14.2911 5.37171L9.44253 1.50496C8.59311 0.83168 7.38562 0.83168 6.5362 1.50496L1.70886 5.37873C1.26693 5.7136 1.00544 6.23133 1 6.78227V13.2035C1 14.6026 2.1457 15.7368 3.55899 15.7368H4.97671C5.48173 15.7368 5.89114 15.3315 5.89114 14.8316V14.8316" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           New Arrivals</a>
                                     </li>
                                     <li class="has-dropdown">
                                        <a href="shop.php" class="has-mega-menu">
                                           <span>
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M2.6856 4.54975C2.6856 3.52014 3.51984 2.6859 4.54945 2.68508H5.3977C5.88984 2.68508 6.36136 2.48971 6.71089 2.14348L7.30359 1.54995C8.02984 0.819578 9.21031 0.816281 9.94068 1.54253L9.9415 1.54336L9.94892 1.54995L10.5425 2.14348C10.892 2.49053 11.3635 2.68508 11.8556 2.68508H12.7031C13.7327 2.68508 14.5677 3.51932 14.5677 4.54975V5.39636C14.5677 5.88849 14.7623 6.36084 15.1093 6.71037L15.7029 7.3039C16.4332 8.03015 16.4374 9.21061 15.7111 9.94098L15.7103 9.94181L15.7029 9.94923L15.1093 10.5428C14.7623 10.8915 14.5677 11.363 14.5677 11.8551V12.7034C14.5677 13.733 13.7335 14.5672 12.7039 14.5672H12.7031H11.854C11.3619 14.5672 10.8895 14.7626 10.5408 15.1096L9.94727 15.7024C9.22185 16.4327 8.04221 16.4368 7.31183 15.7122C7.31101 15.7114 7.31019 15.7106 7.30936 15.7098L7.30194 15.7024L6.70924 15.1096C6.36054 14.7626 5.88819 14.568 5.39605 14.5672H4.54945C3.51984 14.5672 2.6856 13.733 2.6856 12.7034V11.8535C2.6856 11.3613 2.49023 10.8898 2.14318 10.5411L1.55047 9.94758C0.820097 9.22215 0.815976 8.04251 1.5414 7.31214C1.5414 7.31132 1.54223 7.31049 1.54305 7.30967L1.55047 7.30225L2.14318 6.70872C2.49023 6.35919 2.6856 5.88767 2.6856 5.39471V4.54975" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M6.50787 10.7453L10.745 6.50812" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M10.6823 10.6862H10.6897" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M6.56053 6.56446H6.56795" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Electronics</a>
       
                                           <ul class="mega-menu tp-submenu">
                                              <li>
                                                 <a href="shop.php" class="mega-menu-title">Featured</a>
                                                 <ul>
                                                    <li>
                                                       <a href="shop.php"><img src="assets/img/header/menu/menu-1.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">New Arrivals</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Best Seller</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Top Rated</a>
                                                    </li>
                                                 </ul>
                                              </li>
       
                                              <li>
                                                 <a href="shop.php" class="mega-menu-title">Computer & Laptops</a>
                                                 <ul>
                                                    <li>
                                                     <a href="shop.php"><img src="assets/img/header/menu/menu-2.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Top Brands</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Weekly Best Selling</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Most Viewed</a>
                                                    </li>
                                                 </ul>
                                              </li>
                                              <li>
                                                 <a href="shop.php" class="mega-menu-title">Accessories</a>
                                                 <ul>
                                                    <li>
                                                     <a href="shop.php"><img src="assets/img/header/menu/menu-3.jpg" alt=""></a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Headphones</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">TWS Earphone</a>
                                                    </li>
                                                    <li>
                                                       <a href="shop.php">Gaming Headset</a>
                                                    </li>
                                                 </ul>
                                              </li>
       
                                           </ul>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M14.5 8.5V16H2.50003V8.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M16 4.75H1V8.5H16V4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M8.5 16V4.75" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M8.49997 4.75H5.12497C4.62769 4.75 4.15077 4.55246 3.79914 4.20083C3.44751 3.84919 3.24997 3.37228 3.24997 2.875C3.24997 2.37772 3.44751 1.90081 3.79914 1.54917C4.15077 1.19754 4.62769 1 5.12497 1C7.74997 1 8.49997 4.75 8.49997 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M8.5 4.75H11.875C12.3723 4.75 12.8492 4.55246 13.2008 4.20083C13.5525 3.84919 13.75 3.37228 13.75 2.875C13.75 2.37772 13.5525 1.90081 13.2008 1.54917C12.8492 1.19754 12.3723 1 11.875 1C9.25 1 8.5 4.75 8.5 4.75Z" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Gifts</a>
                                     </li>
                                     <li class="has-dropdown">
                                        <a href="shop.php">
                                           <span>
                                              <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M14.5 1H2.5C1.67157 1 1 1.67157 1 2.5V10C1 10.8284 1.67157 11.5 2.5 11.5H14.5C15.3284 11.5 16 10.8284 16 10V2.5C16 1.67157 15.3284 1 14.5 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M5.5 14.5H11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M8.5 11.5V14.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Computers</a>
       
                                           <ul class="tp-submenu">
                                              <li class="has-dropdown">
                                                 <a href="shop.php">Desktop</a>
                                                 <ul class="tp-submenu">
                                                    <li><a href="shop.php">Gaming</a></li>
                                                    <li><a href="shop.php">WorkSpace</a></li>
                                                    <li><a href="shop.php">Customize</a></li>
                                                    <li><a href="shop.php">Luxury</a></li>
                                                 </ul>
                                              </li>
                                              <li><a href="shop.php">Laptop</a></li>
                                              <li><a href="shop.php">Console</a></li>
                                              <li><a href="shop.php">Top Rated</a></li>
                                           </ul>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M12.375 1H2.625C1.72754 1 1 1.72754 1 2.625V15.625C1 16.5225 1.72754 17.25 2.625 17.25H12.375C13.2725 17.25 14 16.5225 14 15.625V2.625C14 1.72754 13.2725 1 12.375 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M7.5 14H7.50875" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Smartphones & Tablets</a>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1C13.4176 1 17 4.5816 17 9C17 13.4184 13.4176 17 9 17C4.5816 17 1 13.4184 1 9C1 4.5816 4.5816 1 9 1Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.5263 8.99592C11.5263 8.31286 8.02529 6.12769 7.62814 6.5206C7.23099 6.9135 7.19281 11.0413 7.62814 11.4712C8.06348 11.9027 11.5263 9.67898 11.5263 8.99592Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           TV, Video & Musice</a>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.6292 1.26076C12.5027 1.60843 12.7699 2.81924 13.1271 3.20843C13.4843 3.59762 13.9955 3.72995 14.2783 3.72995C15.7814 3.72995 17 4.94854 17 6.45081V11.4627C17 13.4778 15.3654 15.1124 13.3503 15.1124H4.64973C2.63373 15.1124 1 13.4778 1 11.4627V6.45081C1 4.94854 2.21859 3.72995 3.72173 3.72995C4.00368 3.72995 4.51481 3.59762 4.87287 3.20843C5.23005 2.81924 5.49643 1.60843 6.36995 1.26076C7.24432 0.913081 10.7557 0.913081 11.6292 1.26076Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M13.7527 5.97314H13.7605" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7491 9.11086C11.7491 7.59215 10.5184 6.36145 8.99974 6.36145C7.48104 6.36145 6.25034 7.59215 6.25034 9.11086C6.25034 10.6296 7.48104 11.8603 8.99974 11.8603C10.5184 11.8603 11.7491 10.6296 11.7491 9.11086Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Cameras</a>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M2.30431 1C1.58423 1 1 1.59405 1 2.32534V3.10537C1 3.64706 1.20599 4.16798 1.57446 4.55981L5.61258 8.8536L5.61436 8.8509C6.39393 9.64899 6.83254 10.7279 6.83254 11.8528V15.6626C6.83254 15.9172 7.09891 16.0798 7.32 15.9597L9.61963 14.7066C9.96679 14.517 10.1834 14.1486 10.1834 13.7487V11.8428C10.1834 10.7242 10.6158 9.64989 11.3883 8.8536L15.4264 4.55981C15.794 4.16798 16 3.64706 16 3.10537V2.32534C16 1.59405 15.4167 1 14.6966 1H2.30431Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Cooking</a>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path d="M15.7462 7.16473V13.167C15.7462 13.6457 15.556 14.1049 15.2175 14.4434C14.8789 14.782 14.4197 14.9722 13.941 14.9722H4.3058C3.82703 14.9722 3.3679 14.782 3.02936 14.4434C2.69083 14.1049 2.50061 13.6457 2.50061 13.167V9.36255" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M3.46186 1.00001C3.18176 0.999863 2.90854 1.08659 2.6798 1.24825C2.45106 1.4099 2.27807 1.63852 2.18471 1.9026L1.11062 5.01655C0.713475 6.15382 1.41752 7.16021 2.71274 7.16021C3.18296 7.14863 3.64325 7.02257 4.05374 6.79294C4.46424 6.56331 4.81255 6.23705 5.0685 5.84243C5.20151 6.24071 5.46067 6.58479 5.80676 6.82258C6.15285 7.06036 6.56702 7.17889 6.98651 7.16021C7.18566 6.7642 7.4909 6.43132 7.86823 6.19871C8.24556 5.96611 8.68013 5.84294 9.1234 5.84294C9.56666 5.84294 10.0012 5.96611 10.3785 6.19871C10.7558 6.43132 11.0611 6.7642 11.2603 7.16021V7.16021C11.679 7.17789 12.0922 7.0589 12.4373 6.82119C12.7825 6.58348 13.041 6.23994 13.1738 5.84243C13.431 6.23686 13.7802 6.56288 14.1914 6.79243C14.6026 7.02199 15.0633 7.1482 15.5341 7.16021C16.8293 7.16021 17.5288 6.15382 17.1362 5.01655L16.0621 1.9026C15.9685 1.6378 15.7948 1.40866 15.5652 1.24694C15.3355 1.08522 15.0613 0.998927 14.7804 1.00001H3.46186Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M11.0707 14.9722H7.19861V11.4701C7.19861 10.983 7.3921 10.5158 7.73656 10.1713C8.08102 9.82685 8.54822 9.63333 9.03536 9.63333H9.22041C9.70755 9.63333 10.1747 9.82685 10.5192 10.1713C10.8637 10.5158 11.0572 10.983 11.0572 11.4701L11.0707 14.9722Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                              </svg>
                                           </span>
                                           Accessories</a>
                                     </li>
                                     <li>
                                        <a href="shop.php">
                                           <span>
                                              <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92384 11.3525C10.1178 11.3525 12.8477 11.8365 12.8477 13.7698C12.8477 15.7032 10.136 16.201 6.92384 16.201C3.72902 16.201 1 15.7213 1 13.7871C1 11.8529 3.71084 11.3525 6.92384 11.3525Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M6.92383 8.59311C4.82685 8.59311 3.1264 6.89354 3.1264 4.79656C3.1264 2.69958 4.82685 1 6.92383 1C9.01994 1 10.7204 2.69958 10.7204 4.79656C10.7282 6.88575 9.03986 8.58532 6.95067 8.59311H6.92383Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M12.8906 7.60761C14.2768 7.41281 15.3443 6.22319 15.3469 4.78336C15.3469 3.3643 14.3123 2.18681 12.9556 1.96429" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 <path d="M14.7195 10.9416C16.0623 11.1416 17 11.6126 17 12.5823C17 13.2498 16.5584 13.6827 15.845 13.9537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                 </svg>
                                           </span>
                                           Sports</a>
                                     </li>
                                  </ul>
                              </nav>
                           </div>
                        </div>
                        <div class="col-xl-5 col-lg-7 col-md-7 col-sm-8 col-6">
                           <div class="tp-header-bottom-right d-flex align-items-center justify-content-end pl-30">
                              <div class="tp-header-search-2 d-none d-sm-block">
                                 <form action="#">
                                    <input type="text" placeholder="Search for Products...">
                                    <button type="submit">
                                       <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M18.9999 19L14.6499 14.65" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </button>
                                 </form>
                              </div>
                              <div class="tp-header-action d-flex align-items-center ml-30">
                                 <div class="tp-header-action-item d-none d-lg-block">
                                    <a href="compare.php"  class="tp-header-action-btn">
                                       <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M14.8396 17.3319V3.71411" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M19.1556 13L15.0778 17.0967L11 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M4.91115 1.00056V14.6183" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M0.833496 5.09667L4.91127 1L8.98905 5.09667" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>                                       
                                    </a>
                                 </div>
                                 <div class="tp-header-action-item d-none d-lg-block">
                                    <a href="wishlist.php" class="tp-header-action-btn">
                                       <svg width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.239 18.8538C13.4096 17.5179 15.4289 15.9456 17.2607 14.1652C18.5486 12.8829 19.529 11.3198 20.1269 9.59539C21.2029 6.25031 19.9461 2.42083 16.4289 1.28752C14.5804 0.692435 12.5616 1.03255 11.0039 2.20148C9.44567 1.03398 7.42754 0.693978 5.57894 1.28752C2.06175 2.42083 0.795919 6.25031 1.87187 9.59539C2.46978 11.3198 3.45021 12.8829 4.73806 14.1652C6.56988 15.9456 8.58917 17.5179 10.7598 18.8538L10.9949 19L11.239 18.8538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.26062 5.05302C6.19531 5.39332 5.43839 6.34973 5.3438 7.47501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg> 
                                       <span class="tp-header-action-badge">4</span>                          
                                    </a>
                                 </div>
                                 <div class="tp-header-action-item">
                                       <button class="tp-header-action-btn cartmini-open-btn" >
                                       <svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.48626 20.5H14.8341C17.9004 20.5 20.2528 19.3924 19.5847 14.9348L18.8066 8.89359C18.3947 6.66934 16.976 5.81808 15.7311 5.81808H5.55262C4.28946 5.81808 2.95308 6.73341 2.4771 8.89359L1.69907 14.9348C1.13157 18.889 3.4199 20.5 6.48626 20.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M6.34902 5.5984C6.34902 3.21232 8.28331 1.27803 10.6694 1.27803V1.27803C11.8184 1.27316 12.922 1.72619 13.7362 2.53695C14.5504 3.3477 15.0081 4.44939 15.0081 5.5984V5.5984" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.70365 10.1018H7.74942" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M13.5343 10.1018H13.5801" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>    
                                       <span class="tp-header-action-badge">13</span>                                                                          
                                    </button>
                                 </div>
                                 <div class="tp-header-action-item tp-header-hamburger mr-20 d-xl-none">
                                    <button type="button" class="tp-offcanvas-open-btn">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="30" height="16" viewBox="0 0 30 16">
                                          <rect x="10" width="20" height="2" fill="currentColor"/>
                                          <rect x="5" y="7" width="25" height="2" fill="currentColor"/>
                                          <rect x="10" y="14" width="20" height="2" fill="currentColor"/>
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <main>


         <!-- blog details area start -->
         <section class="tp-postbox-details-area pb-120 pt-95">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9">
                     <div class="tp-postbox-details-top">
                        <div class="tp-postbox-details-category">
                           <span>
                              <a href="#">Beauty,</a>
                           </span>
                           <span>
                              <a href="#">Trends</a>
                           </span>
                        </div>
                        <h3 class="tp-postbox-details-title">Here's the first Valentino's new Makeup Collection</h3>
                        <div class="tp-postbox-details-meta mb-50">
                           <span data-meta="author">
                              <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M7.4104 8C9.33922 8 10.9028 6.433 10.9028 4.5C10.9028 2.567 9.33922 1 7.4104 1C5.48159 1 3.91797 2.567 3.91797 4.5C3.91797 6.433 5.48159 8 7.4104 8Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M13.4102 15.0001C13.4102 12.2911 10.721 10.1001 7.41016 10.1001C4.09933 10.1001 1.41016 12.2911 1.41016 15.0001" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              By <a href="#">TraoStudio</a>
                           </span>
                           <span>
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M10.5972 10.7259L8.42721 9.43093C8.04921 9.20693 7.74121 8.66793 7.74121 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              30 October, 2023
                           </span>
                           <span>
                              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M12.5287 11.881L12.8017 14.093C12.8717 14.674 12.2487 15.08 11.7517 14.779L8.8187 13.036C8.4967 13.036 8.1817 13.015 7.8737 12.973C8.3917 12.364 8.6997 11.594 8.6997 10.761C8.6997 8.77299 6.9777 7.16302 4.8497 7.16302C4.0377 7.16302 3.2887 7.394 2.6657 7.8C2.6447 7.625 2.6377 7.44999 2.6377 7.26799C2.6377 4.08299 5.4027 1.5 8.8187 1.5C12.2347 1.5 14.9997 4.08299 14.9997 7.26799C14.9997 9.15799 14.0267 10.831 12.5287 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                              </svg>
                              <a href="#">Comments (2)</a>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12">
                     <div class="tp-postbox-details-thumb">
                        <img src="assets/img/blog/details/blog-big-1.jpg" alt="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-2">
                     <div class="tp-postbox-details-share-2">
                        <span>Share Now</span>
                        <ul>
                           <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                           <li><a href="#"><i class="fa-brands fa-vimeo-v"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-8 col-lg-8 col-md-10">
                     <div class="tp-postbox-details-main-wrapper tp-postbox-style2">
                        <div class="tp-postbox-details-content">
                           <p class="tp-dropcap">sales process is critically important to the success of your reps and your business. If you've never seen a really skilled salesperson work, it seems almost effortless. They ask great questions, craftt perfect proposal, answer questions, address concerns and seamlessly seal the Underneath the surface of all of that, the salesperson has probably dedicated hours honing their craft and ensuring the process moves smoothly.</p>

                           <p>One of the challenges that often surfaces when  working with a remote sales team is a lack of transparency over what is happening, and where in the process things are taking place. We’re going to peel back the curtain and show you how to create the best sales.</p>

                           <h4 class="tp-postbox-details-heading">Breaking Up With Fast Fashion Has Been Easier</h4>
                           <p>Lommodo ligula eget dolor. Aenean massa. Cum sociis que penatibus magnis dis parturient montes lorem, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euro, pretium, sem. Nulla onsequat massa quis enim. donec pede justo fringilla vel aliquet.</p>

                           <div class="tp-postbox-details-desc-thumb text-center">
                              <img src="assets/img/blog/details/blog-details-sm-1.jpg" alt="">
                              <span class="tp-postbox-details-desc-thumb-caption">Gucci’s Women’s Cruise Collection 2023 Lookbook Has Arrived</span>
                           </div>
                           <p>“We’re so glad we’ll be working with you to get your new marketing strategy up and running. I've attached the details of your package. Next you’ll get an email from Jen to schedule your kick-off meeting and be assigned your account rep. During your kick-off meeting, we will introduce your project team, let you know what access we need to start.” </p>

                           <div class="tp-postbox-details-quote">
                              <blockquote>
                                 <div class="tp-postbox-details-quote-shape">
                                    <img class="tp-postbox-details-quote-shape-1" src="assets/img/blog/details/shape/line.png" alt="">
                                    <img class="tp-postbox-details-quote-shape-2" src="assets/img/blog/details/shape/quote.png" alt="">
                                 </div>
                                 <p>There is a way out of every box, a solution to every puzzle its just a matter of finding it.</p>
                                 <cite>Shahnewaz Sakil</cite>
                              </blockquote>
                           </div>

                           <h4 class="tp-postbox-details-heading">Exploring the English Countryside</h4>
                           <p>Lorem ligula eget dolor. Aenean massa. Cum sociis que penatibus et magnis dis parturient montes lorem,nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque euro, pretium quis, sem. Nulla onsequat massa quis enim.</p>

                           <div class="tp-postbox-details-list">
                              <ul>
                                 <li>Lorem ipsum dolor sit amet.</li>
                                 <li>At vero eos et accusamus et iusto odio.</li>
                                 <li>Excepteur sint occaecat cupidatat non proident.</li>
                              </ul>
                           </div>
                           <p>Rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer cidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae lorem.</p>

                           <div class="tp-postbox-details-share-wrapper">
                              <div class="row">
                                 <div class="col-xl-12">
                                    <div class="tp-postbox-details-tags tagcloud">
                                       <span>Tags:</span>
                                       <a href="#">Lifesttyle</a>
                                       <a href="#">Awesome</a>
                                       <a href="#">Winter</a>
                                       <a href="#">Sunglasses</a>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="tp-postbox-details-navigation d-none d-md-flex justify-content-between align-items-center">
                              <div class="tp-postbox-details-navigation-item d-flex align-items-center">
                                 <div class="tp-postbox-details-navigation-icon mr-15">
                                    <span>
                                       <a href="blog-details.php">
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M0.999965 7.04891L15.939 7.04891" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M7.02588 1.04883L1.00048 7.04833L7.02588 13.0488" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </span>
                                 </div>
                                 <div class="tp-postbox-details-navigation-content">
                                    <span>Previous Post</span>
                                    <h3 class="tp-postbox-details-navigation-title">
                                       <a href="blog-details.php">Hiring the Right Sales Team at <br> the Right Time</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="tp-postbox-details-navigation-item d-flex align-items-center text-end">
                                 <div class="tp-postbox-details-navigation-content">
                                    <span>Next Post</span>
                                    <h3 class="tp-postbox-details-navigation-title">
                                       <a href="blog-details.php">Fully embrace the return of <br> 90s fashion</a>
                                    </h3>
                                 </div>
                                 <div class="tp-postbox-details-navigation-icon ml-15">
                                    <span>
                                       <a href="blog-details.php">
                                          <svg width="17" height="14" viewBox="0 0 17 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M15.939 7.00008L1 7.00008" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M9.91211 1L15.9375 6.9995L9.91211 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </a>
                                    </span>
                                 </div>
                              </div>
                           </div>

                           <div class="tp-postbox-details-author d-sm-flex align-items-start" data-bg-color="#F4F7F9">
                              <div class="tp-postbox-details-author-thumb">
                                 <a href="#">
                                    <img src="assets/img/users/user-11.jpg" alt="">
                                 </a>
                              </div>
                              <div class="tp-postbox-details-author-content">
                                 <span>Written by</span>
                                 <h5 class="tp-postbox-details-author-title">
                                    <a href="#">Theodore Handle</a>
                                 </h5>
                                 <p>By defining and following internal and external processes, your team will have clarity on resources to attract and retain customers for your business.</p>

                                 <div class="tp-postbox-details-author-social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="tp-postbox-related-area pt-115 pb-90 mb-110" data-bg-color="#F4F7F9">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="tp-postbox-related">
                           <h3 class="tp-postbox-related-title">Related Articles</h3>
      
                           <div class="row">
                              <div class="col-lg-4 col-md-6">
                                 <div class="tp-blog-grid-item tp-blog-grid-style2 p-relative mb-30">
                                    <div class="tp-blog-grid-thumb w-img fix mb-30">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/grid/blog-grid-1.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-grid-content">
                                       <div class="tp-blog-grid-meta">
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             24 April, 2023
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M12.5289 11.881L12.8019 14.093C12.8719 14.674 12.2489 15.08 11.7519 14.779L8.81888 13.036C8.49688 13.036 8.18189 13.015 7.87389 12.973C8.39189 12.364 8.69988 11.594 8.69988 10.761C8.69988 8.77299 6.97788 7.16302 4.84988 7.16302C4.03788 7.16302 3.28888 7.394 2.66588 7.8C2.64488 7.625 2.63788 7.44999 2.63788 7.26799C2.63788 4.08299 5.40288 1.5 8.81888 1.5C12.2349 1.5 14.9999 4.08299 14.9999 7.26799C14.9999 9.15799 14.0269 10.831 12.5289 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             Comments (0)
                                          </span>
                                       </div>
                                       <h3 class="tp-blog-grid-title">
                                          <a href="blog-details.php">Hiring the Right Sales Team at the Right Time</a>
                                       </h3>
                                       <p>Cursus mattis sociis natoque penatibus et magnis montes,nascetur ridiculus.</p>
      
                                       <div class="tp-blog-grid-btn">
                                          <a href="blog-details.php" class="tp-link-btn-3">
                                             Read More
                                             <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                 <div class="tp-blog-grid-item tp-blog-grid-style2 p-relative mb-30">
                                    <div class="tp-blog-grid-thumb w-img fix mb-30">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/grid/blog-grid-2.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-grid-content">
                                       <div class="tp-blog-grid-meta">
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 jun, 2023
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M12.5289 11.881L12.8019 14.093C12.8719 14.674 12.2489 15.08 11.7519 14.779L8.81888 13.036C8.49688 13.036 8.18189 13.015 7.87389 12.973C8.39189 12.364 8.69988 11.594 8.69988 10.761C8.69988 8.77299 6.97788 7.16302 4.84988 7.16302C4.03788 7.16302 3.28888 7.394 2.66588 7.8C2.64488 7.625 2.63788 7.44999 2.63788 7.26799C2.63788 4.08299 5.40288 1.5 8.81888 1.5C12.2349 1.5 14.9999 4.08299 14.9999 7.26799C14.9999 9.15799 14.0269 10.831 12.5289 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             Comments (2)
                                          </span>
                                       </div>
                                       <h3 class="tp-blog-grid-title">
                                          <a href="blog-details.php">Fully Embrace the Return of 90s fashion</a>
                                       </h3>
                                       <p>Cursus mattis sociis natoque penatibus et magnis montes,nascetur ridiculus.</p>
      
                                       <div class="tp-blog-grid-btn">
                                          <a href="blog-details.php" class="tp-link-btn-3">
                                             Read More
                                             <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4 col-md-6">
                                 <div class="tp-blog-grid-item tp-blog-grid-style2 p-relative mb-30">
                                    <div class="tp-blog-grid-thumb w-img fix mb-30">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/grid/blog-grid-3.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-grid-content">
                                       <div class="tp-blog-grid-meta">
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             12 jun, 2023
                                          </span>
                                          <span>
                                             <span>
                                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M12.5289 11.881L12.8019 14.093C12.8719 14.674 12.2489 15.08 11.7519 14.779L8.81888 13.036C8.49688 13.036 8.18189 13.015 7.87389 12.973C8.39189 12.364 8.69988 11.594 8.69988 10.761C8.69988 8.77299 6.97788 7.16302 4.84988 7.16302C4.03788 7.16302 3.28888 7.394 2.66588 7.8C2.64488 7.625 2.63788 7.44999 2.63788 7.26799C2.63788 4.08299 5.40288 1.5 8.81888 1.5C12.2349 1.5 14.9999 4.08299 14.9999 7.26799C14.9999 9.15799 14.0269 10.831 12.5289 11.881Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M8.7 10.7611C8.7 11.5941 8.39201 12.3641 7.87401 12.9731C7.18101 13.8131 6.082 14.3521 4.85 14.3521L3.023 15.437C2.715 15.626 2.323 15.3671 2.365 15.0101L2.54 13.6311C1.602 12.9801 1 11.9371 1 10.7611C1 9.52905 1.658 8.44407 2.666 7.80007C3.289 7.39407 4.038 7.16309 4.85 7.16309C6.978 7.16309 8.7 8.77305 8.7 10.7611Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                             Comments (2)
                                          </span>
                                       </div>
                                       <h3 class="tp-blog-grid-title">
                                          <a href="blog-details.php">Exploring the English Countryside</a>
                                       </h3>
                                       <p>Cursus mattis sociis natoque penatibus et magnis montes,nascetur ridiculus.</p>
      
                                       <div class="tp-blog-grid-btn">
                                          <a href="blog-details.php" class="tp-link-btn-3">
                                             Read More
                                             <span>
                                                <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                   <path d="M16 7.5L1 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   <path d="M9.9502 1.47541L16.0002 7.49941L9.9502 13.5244" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                             </span>
                                          </a>
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
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-8">
                     <div class="tp-postbox-details-comment-wrapper">
                        <h3 class="tp-postbox-details-comment-title">Comments (2)</h3>
   
                        <div class="tp-postbox-details-comment-inner">
                           <ul>
                              <li>
                                 <div class="tp-postbox-details-comment-box d-sm-flex align-items-start">
                                    <div class="tp-postbox-details-comment-thumb">
                                       <img src="assets/img/users/user-2.jpg" alt="">
                                    </div>
                                    <div class="tp-postbox-details-comment-content">
                                       <div class="tp-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                          <div class="tp-postbox-details-comment-avater">
                                             <h4 class="tp-postbox-details-comment-avater-title">Lance Bogrol</h4>
                                             <span class="tp-postbox-details-avater-meta">12 April, 2023 at 3.50pm</span>
                                          </div>
                                          <div class="tp-postbox-details-comment-reply">
                                             <a href="#">Reply</a>
                                          </div>
                                       </div>
                                       <p>By defining and following internal and external processes, your team will have clarity on resources to <br> attract and retain customers for your business.</p>
                                    </div>
                                 </div>
                                 <ul class="children">
                                    <li>
                                       <div class="tp-postbox-details-comment-box d-sm-flex align-items-start">
                                          <div class="tp-postbox-details-comment-thumb">
                                             <img src="assets/img/users/user-3.jpg" alt="">
                                          </div>
                                          <div class="tp-postbox-details-comment-content">
                                             <div class="tp-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                                <div class="tp-postbox-details-comment-avater">
                                                   <h4 class="tp-postbox-details-comment-avater-title">Dasy Lily</h4>
                                                   <span class="tp-postbox-details-avater-meta">12 April, 2023 at 3.50pm</span>
                                                </div>
                                                <div class="tp-postbox-details-comment-reply">
                                                   <a href="#">Reply</a>
                                                </div>
                                             </div>
                                             <p>By defining and following internal and external processes, your team will have clarity on resources to <br> attract and retain customers for your business.</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </li>
                              <li>
                                 <div class="tp-postbox-details-comment-box d-sm-flex align-items-start">
                                    <div class="tp-postbox-details-comment-thumb">
                                       <img src="assets/img/users/user-4.jpg" alt="">
                                    </div>
                                    <div class="tp-postbox-details-comment-content">
                                       <div class="tp-postbox-details-comment-top d-flex justify-content-between align-items-start">
                                          <div class="tp-postbox-details-comment-avater">
                                             <h4 class="tp-postbox-details-comment-avater-title">Shahnewaz Sakil</h4>
                                             <span class="tp-postbox-details-avater-meta">12 April, 2023 at 3.50pm</span>
                                          </div>
                                          <div class="tp-postbox-details-comment-reply">
                                             <a href="#">Reply</a>
                                          </div>
                                       </div>
                                       <p>By defining and following internal and external processes, your team will have clarity on resources to <br> attract and retain customers for your business.</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
   
                     <div class="tp-postbox-details-form">
                        <h3 class="tp-postbox-details-form-title">Leave a Reply</h3>
                        <p>Your email address will not be published. Required fields are marked *</p>
   
                        <div class="tp-postbox-details-form-wrapper">
                           <div class="tp-postbox-details-form-inner">
                              <div class="tp-postbox-details-input-box">
                                 <div class="tp-contact-input">
                                    <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                                 </div>
                                 <div class="tp-postbox-details-input-title">
                                    <label for="name">Your Name</label>
                                 </div>
                              </div>
                              <div class="tp-postbox-details-input-box">
                                 <div class="tp-contact-input">
                                    <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                                 </div>
                                 <div class="tp-postbox-details-input-title">
                                    <label for="email">Your Email</label>
                                 </div>
                              </div>
                              <div class="tp-postbox-details-input-box">
                                 <div class="tp-contact-input">
                                    <textarea id="msg" placeholder="Write your message here..."></textarea>
                                 </div>
                                 <div class="tp-postbox-details-input-title">
                                    <label for="msg">Your Message</label>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-postbox-details-suggetions mb-20">
                              <div class="tp-postbox-details-remeber">
                                 <input id="remeber" type="checkbox">
                                 <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                              </div>
                           </div>
                           <div class="tp-postbox-details-input-box">
                              <button class="tp-postbox-details-input-btn" type="submit">Post Comment</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- blog details area end -->


      </main>
      

      <!-- footer area start -->
     


      <!-- JS here -->
      <?php include 'footer.php';
     include 'java.php';?>
   </body>

<!-- Mirrored from php.weblearnbd.net/shofy-prv/shofy/blog-details-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:47 GMT -->
</html>
