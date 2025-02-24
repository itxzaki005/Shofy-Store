<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:47 GMT -->
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
                  <div class="col-xl-9 col-lg-8">
                     <div class="tp-postbox-details-main-wrapper">
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
                                 <div class="col-xl-8 col-lg-6">
                                    <div class="tp-postbox-details-tags tagcloud">
                                       <span>Tags:</span>
                                       <a href="#">Lifesttyle</a>
                                       <a href="#">Awesome</a>
                                       <a href="#">Winter</a>
                                       <a href="#">Sunglasses</a>
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-lg-6">
                                    <div class="tp-postbox-details-share text-md-end">
                                       <span>Share:</span>
                                       <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                       <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
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
         <!-- blog details area end -->


      </main>
      

      <!-- footer area start -->
      <?php include 'footer.php';
     include 'java.php';?>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/blog-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:19:48 GMT -->
</html>
