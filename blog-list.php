<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:44 GMT -->
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
                        <a href="tel:092-333-420-7478">0092-333-420-7478</a>
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

         <!-- section title area start -->
         <section class="tp-section-title-area pt-95 pb-80">
            <div class="container">
               <div class="row">
                  <div class="col-xl-8">
                     <div class="tp-section-title-wrapper-7">
                        <span class="tp-section-title-pre-7">Blog Standard</span>
                        <h3 class="tp-section-title-7">Insight and advice <br> From our Expert team.</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- section title area end -->


         <!-- blog grid area start -->
         <section class="tp-blog-grid-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-blog-grid-wrapper">
                        <div class="tp-blog-grid-top d-flex justify-content-between mb-40">
                           <div class="tp-blog-grid-result">
                              <p>Showing 1–14 of 26 results</p>
                           </div>
                           <div class="tp-blog-grid-tab tp-tab">
                              <nav>
                                 <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                   <button class="nav-link" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true">
                                       <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M16.3328 6.01317V2.9865C16.3328 2.0465 15.9061 1.6665 14.8461 1.6665H12.1528C11.0928 1.6665 10.6661 2.0465 10.6661 2.9865V6.0065C10.6661 6.95317 11.0928 7.3265 12.1528 7.3265H14.8461C15.9061 7.33317 16.3328 6.95317 16.3328 6.01317Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M16.3328 15.18V12.4867C16.3328 11.4267 15.9061 11 14.8461 11H12.1528C11.0928 11 10.6661 11.4267 10.6661 12.4867V15.18C10.6661 16.24 11.0928 16.6667 12.1528 16.6667H14.8461C15.9061 16.6667 16.3328 16.24 16.3328 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.33281 6.01317V2.9865C7.33281 2.0465 6.90614 1.6665 5.84614 1.6665H3.1528C2.0928 1.6665 1.66614 2.0465 1.66614 2.9865V6.0065C1.66614 6.95317 2.0928 7.3265 3.1528 7.3265H5.84614C6.90614 7.33317 7.33281 6.95317 7.33281 6.01317Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M7.33281 15.18V12.4867C7.33281 11.4267 6.90614 11 5.84614 11H3.1528C2.0928 11 1.66614 11.4267 1.66614 12.4867V15.18C1.66614 16.24 2.0928 16.6667 3.1528 16.6667H5.84614C6.90614 16.6667 7.33281 16.24 7.33281 15.18Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                   </button>
                                   <button class="nav-link active" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false">
                                       <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M15 7.11133H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M15 1H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M15 13.2222H1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                   </button>
                                 </div>
                               </nav>                               
                           </div>
                        </div> <!-- top end -->

                        <div class="tab-content" id="nav-tabContent">
                           <div class="tab-pane fade" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab" tabindex="0">
                              <!-- blog grid item wrapper -->
                              <div class="tp-blog-grid-item-wrapper">
                                 <div class="row tp-gx-30">
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
                                          <div class="tp-blog-grid-thumb w-img fix mb-30">
                                             <a href="blog-details.php">
                                                <img src="assets/img/blog/grid/blog-grid-4.jpg" alt="">
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
                                                <a href="blog-details.php">Here’s the First Valentino’s New Makeup Collection</a>
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
                                          <div class="tp-blog-grid-thumb w-img fix mb-30">
                                             <a href="blog-details.php">
                                                <img src="assets/img/blog/grid/blog-grid-5.jpg" alt="">
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
                                                <a href="blog-details.php">Follow Your own Design process, whatever gets</a>
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
                                          <div class="tp-blog-grid-thumb w-img fix mb-30">
                                             <a href="blog-details.php">
                                                <img src="assets/img/blog/grid/blog-grid-6.jpg" alt="">
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
                                                <a href="blog-details.php">Freelancer Days 2022, What’s new?</a>
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
                                          <div class="tp-blog-grid-thumb w-img fix mb-30">
                                             <a href="blog-details.php">
                                                <img src="assets/img/blog/grid/blog-grid-7.jpg" alt="">
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
                                    <div class="col-lg-6 col-md-6">
                                       <div class="tp-blog-grid-item p-relative mb-30">
                                          <div class="tp-blog-grid-thumb w-img fix mb-30">
                                             <a href="blog-details.php">
                                                <img src="assets/img/blog/grid/blog-grid-8.jpg" alt="">
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
                                                <a href="blog-details.php">Quality Foods Requirments For Every Human Body’s</a>
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
                           <div class="tab-pane fade show active" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab" tabindex="0">
                              <!-- blog list wrapper -->
                              <div class="tp-blog-list-item-wrapper">
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/grid/blog-grid-1.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
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
                                             <a href="blog-details.php">Sweeten your Summer Wardrobes</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/list/blog-list-2.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
                                       <div class="tp-blog-grid-content">
                                          <div class="tp-blog-grid-meta">
                                             <span>
                                                <span>
                                                   <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </span>
                                                8 Jun, 2023
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
                                             <a href="blog-details.php">Exploring the English Countryside</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/list/blog-list-3.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
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
                                                Comments (0)
                                             </span>
                                          </div>
                                          <h3 class="tp-blog-grid-title">
                                             <a href="blog-details.php">Fully Embrace the Return of ’90s fashion</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/list/blog-list-4.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
                                       <div class="tp-blog-grid-content">
                                          <div class="tp-blog-grid-meta">
                                             <span>
                                                <span>
                                                   <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </span>
                                                30 October, 2023
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
                                             <a href="blog-details.php">Visiting Great Sand <br> Dunes Park</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/list/blog-list-5.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
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
                                             <a href="blog-details.php">Exploring the English Countryside</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                                 <div class="tp-blog-list-item d-md-flex d-lg-block d-xl-flex">
                                    <div class="tp-blog-list-thumb">
                                       <a href="blog-details.php">
                                          <img src="assets/img/blog/list/blog-list-6.jpg" alt="">
                                       </a>
                                    </div>
                                    <div class="tp-blog-list-content">
                                       <div class="tp-blog-grid-content">
                                          <div class="tp-blog-grid-meta">
                                             <span>
                                                <span>
                                                   <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M15 8.5C15 12.364 11.864 15.5 8 15.5C4.136 15.5 1 12.364 1 8.5C1 4.636 4.136 1.5 8 1.5C11.864 1.5 15 4.636 15 8.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <path d="M10.5972 10.7259L8.42715 9.43093C8.04915 9.20693 7.74115 8.66793 7.74115 8.22693V5.35693" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </span>
                                                6 April, 2023
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
                                             <a href="blog-details.php">Freelancer Days 2022, What’s new?</a>
                                          </h3>
                                          <p>Cursus mattis sociis natoque penatibus et magnis dis Parturient montes,nascetur ridiculus.!</p>

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
                           <div class="row">
                              <div class="col-xl-12">
                                 <div class="tp-blog-pagination mt-30">
                                    <div class="tp-pagination">
                                       <nav>
                                          <ul>
                                             <li>
                                                <a href="blog-grid.php" class="tp-pagination-prev prev page-numbers">
                                                   <svg width="15" height="13" viewBox="0 0 15 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M1.00017 6.77879L14 6.77879" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                      <path d="M6.24316 11.9999L0.999899 6.77922L6.24316 1.55762" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="blog-grid.php">1</a>
                                             </li>
                                             <li>
                                                <span class="current">2</span>
                                             </li>
                                             <li>
                                                <a href="blog-grid.php">3</a>
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
         <!-- blog grid area end -->

      </main>
      

      <!-- footer area start -->
      <?php include 'footer.php';
     include 'java.php';?>

   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog-list.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:44 GMT -->
</html>
