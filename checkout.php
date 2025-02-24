<!doctype html>
<html class="no-js" lang="zxx">
   
<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:15:35 GMT -->
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
         <section class="breadcrumb__area include-bg pt-95 pb-50" data-bg-color="#EFF1F5">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Checkout</h3>
                        <div class="breadcrumb__list">
                           <span><a href="#">Home</a></span>
                           <span>Checkout</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- checkout area start -->
         <section class="tp-checkout-area pb-120" data-bg-color="#EFF1F5">
            <div class="container">
               <div class="row">
                  <div class="col-xl-7 col-lg-7">
                     <div class="tp-checkout-verify">
                        <div class="tp-checkout-verify-item">
                           <p class="tp-checkout-verify-reveal">Returning customer? <button type="button" class="tp-checkout-login-form-reveal-btn">Click here to login</button></p>

                           <div id="tpReturnCustomerLoginForm" class="tp-return-customer">
                              <form action="#">
                                 
                                 <div class="tp-return-customer-input">
                                    <label>Email</label>
                                    <input type="text" placeholder="Your Email">
                                 </div>
                                 <div class="tp-return-customer-input">
                                    <label>Password</label>
                                    <input type="password" placeholder="Password">
                                 </div>

                                 <div class="tp-return-customer-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                    <div class="tp-return-customer-remeber">
                                       <input id="remeber" type="checkbox">
                                       <label for="remeber">Remember me</label>
                                    </div>
                                    <div class="tp-return-customer-forgot">
                                       <a href="forgot.php">Forgot Password?</a>
                                    </div>
                                 </div>
                                 <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Login</button>
                              </form>
                           </div>
                        </div>
                        <div class="tp-checkout-verify-item">
                           <p class="tp-checkout-verify-reveal">Have a coupon? <button type="button" class="tp-checkout-coupon-form-reveal-btn">Click here to enter your code</button></p>

                           <div id="tpCheckoutCouponForm" class="tp-return-customer">
                              <form action="#">
                                 <div class="tp-return-customer-input">
                                    <label>Coupon Code :</label>
                                    <input type="text" placeholder="Coupon">
                                 </div>
                                 <button type="submit" class="tp-return-customer-btn tp-checkout-btn">Apply</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="tp-checkout-bill-area">
                        <h3 class="tp-checkout-bill-title">Billing Details</h3>

                        <div class="tp-checkout-bill-form">
                           <form action="#">
                              <div class="tp-checkout-bill-inner">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="tp-checkout-input">
                                          <label>First Name <span>*</span></label>
                                          <input type="text" placeholder="First Name">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="tp-checkout-input">
                                          <label>Last Name <span>*</span></label>
                                          <input type="text" placeholder="Last Name">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Company name (optional)</label>
                                          <input type="text" placeholder="Example LTD.">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Country / Region </label>
                                          <input type="text" placeholder="United States (US)">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Street address</label>
                                          <input type="text" placeholder="House number and street name">
                                       </div>

                                       <div class="tp-checkout-input">
                                          <input type="text" placeholder="Apartment, suite, unit, etc. (optional)">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Town / City</label>
                                          <input type="text" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="tp-checkout-input">
                                          <label>State / County</label>
                                          <select>
                                             <option>New York US</option>
                                             <option>Berlin Germany</option>
                                             <option>Paris France</option>
                                             <option>Tokiyo Japan</option>
                                          </select>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="tp-checkout-input">
                                          <label>Postcode ZIP</label>
                                          <input type="text" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Phone <span>*</span></label>
                                          <input type="text" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Email address <span>*</span></label>
                                          <input type="email" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-option-wrapper">
                                          <div class="tp-checkout-option">
                                             <input id="create_free_account" type="checkbox">
                                             <label for="create_free_account">Create an account?</label>
                                          </div>
                                          <div class="tp-checkout-option">
                                             <input id="ship_to_diff_address" type="checkbox">
                                             <label for="ship_to_diff_address">Ship to a different address?</label>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="tp-checkout-input">
                                          <label>Order notes (optional)</label>
                                          <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <!-- checkout place order -->
                     <div class="tp-checkout-place white-bg">
                        <h3 class="tp-checkout-place-title">Your Order</h3>

                        <div class="tp-order-info-list">
                           <ul>

                              <!-- header -->
                              <li class="tp-order-info-list-header">
                                 <h4>Product</h4>
                                 <h4>Total</h4>
                              </li>

                              <!-- item list -->
                              <li class="tp-order-info-list-desc">
                                 <p>Xiaomi Redmi Note 9 Global V. <span> x 2</span></p>
                                 <span>$274:00</span>
                              </li>
                              <li class="tp-order-info-list-desc">
                                 <p>Office Chair Multifun <span> x 1</span></p>
                                 <span>$74:00</span>
                              </li>
                              <li class="tp-order-info-list-desc">
                                 <p>Apple Watch Series 6 Stainless  <span> x 3</span></p>
                                 <span>$362:00</span>
                              </li>
                              <li class="tp-order-info-list-desc">
                                 <p>Body Works Mens Collection <span> x 1</span></p>
                                 <span>$145:00</span>
                              </li>

                              <!-- subtotal -->
                              <li class="tp-order-info-list-subtotal">
                                 <span>Subtotal</span>
                                 <span>$507.00</span>
                              </li>

                              <!-- shipping -->
                              <li class="tp-order-info-list-shipping">
                                 <span>Shipping</span>
                                 <div class="tp-order-info-list-shipping-item d-flex flex-column align-items-end">
                                    <span>
                                       <input id="flat_rate" type="radio" name="shipping">
                                       <label for="flat_rate">Flat rate: <span>$20.00</span></label>
                                    </span>
                                    <span>
                                       <input id="local_pickup" type="radio" name="shipping">
                                       <label for="local_pickup">Local pickup: <span>$25.00</span></label>
                                    </span>
                                    <span>
                                       <input id="free_shipping" type="radio" name="shipping">
                                       <label for="free_shipping">Free shipping</label>
                                    </span>
                                 </div>
                              </li>

                              <!-- total -->
                              <li class="tp-order-info-list-total">
                                 <span>Total</span>
                                 <span>$1,476.00</span>
                              </li>
                           </ul>
                        </div>
                        <div class="tp-checkout-payment">
                           <div class="tp-checkout-payment-item">
                              <input type="radio" id="back_transfer" name="payment">
                              <label for="back_transfer" data-bs-toggle="direct-bank-transfer">Direct Bank Transfer</label>
                              <div class="tp-checkout-payment-desc direct-bank-transfer">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item">
                              <input type="radio" id="cheque_payment" name="payment">
                              <label for="cheque_payment">Cheque Payment</label>
                              <div class="tp-checkout-payment-desc cheque-payment">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item">
                              <input type="radio" id="cod" name="payment">
                              <label for="cod">Cash on Delivery</label>
                              <div class="tp-checkout-payment-desc cash-on-delivery">
                                 <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                              </div>
                           </div>
                           <div class="tp-checkout-payment-item paypal-payment">
                              <input type="radio" id="paypal" name="payment">
                              <label for="paypal">PayPal <img src="assets/img/icon/payment-option.png" alt=""> <a href="#">What is PayPal?</a></label>
                           </div>
                        </div>
                        <div class="tp-checkout-agree">
                           <div class="tp-checkout-option">
                              <input id="read_all" type="checkbox">
                              <label for="read_all">I have read and agree to the website.</label>
                           </div>
                        </div>
                        <div class="tp-checkout-btn-wrapper">
                           <a href="#" class="tp-checkout-btn w-100">Place Order</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- checkout area end -->


      </main>
      

      <!-- footer area start -->
      <?php include 'footer.php';
     include 'java.php';?>

<!-- Mirrored from html.weblearnbd.net/shofy-prv/shofy/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Oct 2023 08:15:36 GMT -->
</html>
