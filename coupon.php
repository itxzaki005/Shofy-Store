<!doctype.php>
.php class="no-js" lang="zxx">
   
<!-- Mirrored from.php.weblearnbd.net/shofy-prv/shofy/coupon.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:25 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce  Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
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
                        <a href="tel:092-333-4207578">923334207478</a>
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
         <section class="breadcrumb__area include-bg pt-95 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Grab Best Offer</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Coupon</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- coupon area start -->
         <div class="tp-coupon-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-1.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">August Gift Voucher</h3>
                              <p class="tp-coupon-offer mb-15"><span>10%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>AUGUST23</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-2.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">SUMMER Vacation</h3>
                              <p class="tp-coupon-offer mb-15"><span>15%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>SUMMER15</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-3.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">May Day</h3>
                              <p class="tp-coupon-offer mb-15"><span>20%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>MAYDAY</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-4.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">Paper On Demand</h3>
                              <p class="tp-coupon-offer mb-15"><span>12%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>PAPER12</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-5.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">Fifty Fifty</h3>
                              <p class="tp-coupon-offer mb-15"><span>50%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>FIF50</span></button></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="tp-coupon-item mb-30 p-relative d-md-flex justify-content-between align-items-center">
                        <span class="tp-coupon-border"></span>
                        <div class="tp-coupon-item-left d-sm-flex align-items-center">
                           <div class="tp-coupon-thumb">
                              <a href="#">
                                 <img alt="logo" src="assets/img/product/2/prodcut-6.jpg">
                              </a>
                           </div>
                           <div class="tp-coupon-content">
                              <h3 class="tp-coupon-title">Flash Sale</h3>
                              <p class="tp-coupon-offer mb-15"><span>30%</span>Off</p>
                              <div class="tp-coupon-countdown" data-countdown="" data-date="Sep 30 2024 20:20:22">
                                 <div class="tp-coupon-countdown-inner">
                                    <ul>
                                       <li><span data-days="">83</span> Day</li>
                                       <li><span data-hours="">16</span> Hrs</li>
                                       <li><span data-minutes="">20</span> Min</li>
                                       <li><span data-seconds="">39</span> Sec</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-coupon-item-right pl-20">
                           <div class="tp-coupon-status mb-10 d-flex align-items-center">
                              <h4>Coupon <span class="active">Active</span></h4>
                              <div class="tp-coupon-info-details">
                                 <span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.5C4.99594 1.5 1.75 4.74594 1.75 8.75C1.75 12.7541 4.99594 16 9 16C13.0041 16 16.25 12.7541 16.25 8.75C16.25 4.74594 13.0041 1.5 9 1.5ZM0.25 8.75C0.25 3.91751 4.16751 0 9 0C13.8325 0 17.75 3.91751 17.75 8.75C17.75 13.5825 13.8325 17.5 9 17.5C4.16751 17.5 0.25 13.5825 0.25 8.75ZM9 7.75C9.55229 7.75 10 8.19771 10 8.75V11.95C10 12.5023 9.55229 12.95 9 12.95C8.44771 12.95 8 12.5023 8 11.95V8.75C8 8.19771 8.44771 7.75 9 7.75ZM9 4.5498C8.44771 4.5498 8 4.99752 8 5.5498C8 6.10209 8.44771 6.5498 9 6.5498H9.008C9.56028 6.5498 10.008 6.10209 10.008 5.5498C10.008 4.99752 9.56028 4.5498 9.008 4.5498H9Z" fill="currentColor"></path>
                                    </svg>
                                 </span>
                                 <div class="tp-coupon-info-tooltip transition-3">
                                    <p>*This coupon code will apply on <span>Grocery type products</span> and when you shopping more than <span>$500</span></p>
                                 </div>
                              </div>
                           </div>
                           <div class="tp-coupon-date"><button><span>FLASH30</span></button></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- coupon area end -->

      </main>
      

      <!-- footer area start -->
     <?php include 'footer.php';
     include 'java.php';?>


      <!-- JS here -->
      
   </body>

<!-- Mirrored from.php.weblearnbd.net/shofy-prv/shofy/coupon.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:25 GMT -->
<.php>
