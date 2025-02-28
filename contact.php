<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:55 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Shofy - Multipurpose eCommerce HTML Template</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      
      <?php include 'header.php';
     include 'links.php';?>
      <!-- CSS here -->
      
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
                        <a href="tel:098-852-987">333 420 74 78</a>
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
         <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Keep In Touch with Us</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Contact</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->


         <!-- contact area start -->
         <section class="tp-contact-area pb-100">
            <div class="container">
               <div class="tp-contact-inner">
                  <div class="row">
                     <div class="col-xl-9 col-lg-8">
                        <div class="tp-contact-wrapper">
                           <h3 class="tp-contact-title">Sent A Message</h3>

                           <div class="tp-contact-form">
                              <form id="contact-form" action="https://html.weblearnbd.net/shofy-prv/shofy/assets/mail.php" method="POST">
                                 <div class="tp-contact-input-wrapper">
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="name">Your Name</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="email">Your Email</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                          <input name="subject" id="subject" type="text" placeholder="Write your subject">
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="subject">Subject</label>
                                       </div>
                                    </div>
                                    <div class="tp-contact-input-box">
                                       <div class="tp-contact-input">
                                         <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                                       </div>
                                       <div class="tp-contact-input-title">
                                          <label for="message">Your Message</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tp-contact-suggetions mb-20">
                                    <div class="tp-contact-remeber">
                                       <input id="remeber" type="checkbox">
                                       <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </div>
                                 </div>
                                 <div class="tp-contact-btn">
                                    <button type="submit">Send Message</button>
                                 </div>
                              </form>
                              <p class="ajax-response"></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-4">
                        <div class="tp-contact-info-wrapper">
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-1.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p data-info="mail"><a href="https://html.weblearnbd.net/cdn-cgi/l/email-protection#bdded2d3c9dcdec9fdced5d2dbc493ded2d0"><span class="__cf_email__" data-cfemail="294a46475d484a5d695a41464f50074a4644">[email&#160;protected]</span></a></p>
                                 <p data-info="phone"><a href="tel:670-413-90-762">+92 333 420 7578</a></p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-2.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <p>
                                    <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.6976637,-74.1197638,11z/data=!3m1!4b1!4m6!3m5!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728!16zL20vMDJfMjg2" target="_blank">
                                       84 sleepy hollow st. <br> jamaica, New York 1432
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="tp-contact-info-item">
                              <div class="tp-contact-info-icon">
                                 <span>
                                    <img src="assets/img/contact/contact-icon-3.png" alt="">
                                 </span>
                              </div>
                              <div class="tp-contact-info-content">
                                 <div class="tp-contact-social-wrapper mt-5">
                                    <h4 class="tp-contact-social-title">Find on social media</h4>

                                    <div class="tp-contact-social-icon">
                                       <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                       <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                       <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->

         <!-- map area start -->
         <section class="tp-map-area pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="tp-map-wrapper">
                        <div class="tp-map-hotspot">
                           <span class="tp-hotspot tp-pulse-border">
                              <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <circle cx="6" cy="6" r="6" fill="#821F40"/>
                              </svg>
                           </span>
                        </div>
                        <div class="tp-map-iframe">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.15830894612!2d-74.11976383964465!3d40.69766374865766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1678114595329!5m2!1sen!2sbd"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- map area end -->

      </main>
      <?php include 'footer.php';
     include 'java.php';?>
      

      <?php include 'header.php';
     include 'links.php';?>
   </body>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:14:57 GMT -->
</html>
