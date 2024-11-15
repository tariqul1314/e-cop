<?php get_header(); ?>

<div class="loader">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="pre-load">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
      </div>
    </div>
  </div>
</div>

<div class="header-area">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-sm-6 col-lg-7">
        <div class="left">
          <ul>
            <li>
              <i class="flaticon-delivery-truck"></i>
              <span>Free Next Day Delivery*</span>
            </li>
            <li>
              <i class="flaticon-quality"></i>
              <span>Best Price Guarantee</span>
            </li>
            <li>
              <i class="flaticon-call-center"></i>
              <span>24/7 Customer Support</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-lg-5">
        <div class="right">
          <div class="inner">
            <select>
              <option>$ USD</option>
              <option>EUR</option>
              <option>GBP</option>
              <option>CAD</option>
            </select>
          </div>
          <div class="inner">
            <form>
              <select>
                <option>English</option>
                <option>العربيّة</option>
                <option>Deutsch</option>
                <option>Português</option>
                <option>简体中文</option>
              </select>
            </form>
          </div>
          <div class="inner">
            <div class="call">
              <i class="flaticon-phone-call"></i>
              <a href="tel:9905324980">990-532-4980</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="nav-top-area">
  <div class="container-fluid">
    <div class="row align-items-center">
      <div class="col-lg-2">
        <div class="left">
          <a href="index-2.html">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" />
          </a>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="middle">
          <form>
            <div class="form-group">
              <div class="inner">
                <select>
                  <option>All Categories</option>
                  <option>Chair</option>
                  <option>Table</option>
                  <option>Bed</option>
                  <option>Sofa</option>
                  <option>Headphones</option>
                  <option>Keyboard</option>
                  <option>MacBook</option>
                  <option>Vegetable</option>
                  <option>Fruits</option>
                  <option>Chicken</option>
                </select>
              </div>
              <input
                type="text"
                class="form-control"
                placeholder="Search Your Keywords"
              />
              <button type="submit" class="btn">
                <i class="bx bx-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="right">
          <ul>
            <li>
              <div class="inner">
                <i class="flaticon-pin"></i>
                <a href="#">Set Location</a>
              </div>
            </li>
            <li>
              <div class="inner">
                <i class="flaticon-question"></i>
                <a href="#">Need Help?</a>
              </div>
            </li>
            <li>
              <button
                type="button"
                class="btn wishlist cart-popup-btn"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
                data-bs-whatever="@mdo"
              >
                <i class="bx bxs-cart"></i>
                <span>2</span>
              </button>
            </li>
            <li>
              <button
                type="button"
                class="btn wishlist"
                data-bs-toggle="modal"
                data-bs-target="#exampleModalWishlist"
                data-bs-whatever="@mdo"
              >
                <i class="bx bx-heart"></i>
                <span>2</span>
              </button>
            </li>
            <li>
              <a class="join" href="login.html">
                <i class="flaticon-round-account-button-with-user-inside"></i>
                Join
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="navbar-area sticky-top">
  <div class="mobile-nav">
    <a href="index-2.html" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" />
    </a>
  </div>

  <div class="main-nav">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-light">
        <div class="left">
          <select>
            <option>All Categories</option>
            <option>Chair</option>
            <option>Table</option>
            <option>Bed</option>
            <option>Sofa</option>
            <option>Headphones</option>
            <option>Keyboard</option>
            <option>MacBook</option>
            <option>Vegetable</option>
            <option>Fruits</option>
            <option>Chicken</option>
          </select>
        </div>
        <div
          class="collapse navbar-collapse mean-menu"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle active"
                >Home <i class="bx bx-chevron-down"></i
              ></a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="index-2.html" class="nav-link active"
                    >Home Demo One</a
                  >
                </li>
                <li class="nav-item">
                  <a href="index-3.html" class="nav-link">Home Demo Two</a>
                </li>
                <li class="nav-item">
                  <a href="index-4.html" class="nav-link">Home Demo Three</a>
                </li>
                <li class="nav-item">
                  <a href="index-5.html" class="nav-link"
                    >Home Demo Four (Revolution)</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle"
                >Pages <i class="bx bx-chevron-down"></i
              ></a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-toggle"
                    >Users <i class="bx bx-chevron-down"></i
                  ></a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="login.html" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                      <a href="register.html" class="nav-link">Register</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="faq.html" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                  <a href="404.html" class="nav-link">404 Error Page</a>
                </li>
                <li class="nav-item">
                  <a href="return-policy.html" class="nav-link"
                    >Return Policy</a
                  >
                </li>
                <li class="nav-item">
                  <a href="privacy-policy.html" class="nav-link"
                    >Privacy Policy</a
                  >
                </li>
                <li class="nav-item">
                  <a href="terms-conditions.html" class="nav-link"
                    >Terms & Conditions</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle"
                >Blog <i class="bx bx-chevron-down"></i
              ></a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="blog.html" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="blog-right-sidebar.html" class="nav-link"
                    >Blog Right Sidebar</a
                  >
                </li>
                <li class="nav-item">
                  <a href="blog-left-sidebar.html" class="nav-link"
                    >Blog Left Sidebar</a
                  >
                </li>
                <li class="nav-item">
                  <a href="blog-details.html" class="nav-link">Blog Details</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link dropdown-toggle"
                >Shop <i class="bx bx-chevron-down"></i
              ></a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a href="shop.html" class="nav-link">Shop</a>
                </li>
                <li class="nav-item">
                  <a href="checkout.html" class="nav-link">Checkout</a>
                </li>
                <li class="nav-item">
                  <a href="single-product.html" class="nav-link"
                    >Single Product</a
                  >
                </li>
                <li class="nav-item">
                  <a href="products-on-sale.html" class="nav-link"
                    >Products On Sale</a
                  >
                </li>
                <li class="nav-item">
                  <a href="order-tracking.html" class="nav-link"
                    >Order Tracking</a
                  >
                </li>
                <li class="nav-item">
                  <a href="customer-service.html" class="nav-link"
                    >Customer Service</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="contact.html" class="nav-link">Contact</a>
            </li>
          </ul>
          <div class="side-nav">
            <h4>
              Get <span>50%</span> Discount On Black Friday Offer
              <a href="products-on-sale.html">View Products On Sale</a>
            </h4>
          </div>
        </div>
      </nav>
    </div>
  </div>
</div>

<div class="banner-area-two">
  <div class="banner-slider owl-theme owl-carousel">
    <div class="banner-item">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="banner-content">
              <h1>Find Out Your Best Furniture Here</h1>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat
              </p>
              <a class="common-btn" href="#">
                Shop Now
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner1.png" alt="Banner" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-shape1.png" alt="Shape" />
      </div>
    </div>
    <div class="banner-item">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="banner-content">
              <h1>Get All Trendy Furniture In One Store</h1>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat
              </p>
              <a class="common-btn" href="#">
                Shop Now
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="banner-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner2.png" alt="Banner" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-shape1.png" alt="Shape" />
      </div>
    </div>
  </div>
</div>

<div class="products-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="sorting-menu">
          <ul class="justify-content-center">
            <li class="filter active" data-filter="all">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-square"></i>
                <span>All</span>
              </div>
            </li>
            <li class="filter" data-filter=".armchair">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-armchair"></i>
                <span>Armchair</span>
              </div>
            </li>
            <li class="filter" data-filter=".sofa">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-sofa"></i>
                <span>Sofa</span>
              </div>
            </li>
            <li class="filter" data-filter=".computer">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-table"></i>
                <span>Computer Desk</span>
              </div>
            </li>
            <li class="filter" data-filter=".desk">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-desk-chair"></i>
                <span>Desk Chair</span>
              </div>
            </li>
            <li class="filter" data-filter=".center">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-table-1"></i>
                <span>Center Table</span>
              </div>
            </li>
            <li class="filter" data-filter=".book">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-shelf"></i>
                <span>Book Shelf</span>
              </div>
            </li>
            <li class="filter" data-filter=".cabinet">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-cabinet"></i>
                <span>Cabinet</span>
              </div>
            </li>
            <li class="filter" data-filter=".bed">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-bed"></i>
                <span>Bed</span>
              </div>
            </li>
            <li class="filter" data-filter=".center-table">
              <div class="products-thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape1.png" alt="Shape" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/shape2.png" alt="Shape" />
                <i class="flaticon-dresser"></i>
                <span>Dressing Table</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
        <div id="Container" class="row justify-content-center">
          <div class="col-sm-6 col-lg-4 mix armchair center-table">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products1.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">White Comfy Stool</a>
                  </h3>
                  <span>$200.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix sofa bed">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products2.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Yellow Armchair</a>
                  </h3>
                  <span>$180.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix computer cabinet">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products3.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">White Loyal Sofa</a>
                  </h3>
                  <span>$170.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix desk book">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products4.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Royal Ash Sofa</a>
                  </h3>
                  <span>$190.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix center armchair">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products5.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Wooden Yellow Comfort</a>
                  </h3>
                  <span>$160.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix book sofa">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products6.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Orange Classic Sofa</a>
                  </h3>
                  <span>$120.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix cabinet computer">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products7.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">White Luxury Sofa</a>
                  </h3>
                  <span>$250.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix bed desk">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products8.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Royal Queen Black Chair</a>
                  </h3>
                  <span>$210.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 mix center-table cabinet">
            <div class="products-item">
              <div class="top">
                <a class="wishlist" href="#">
                  <i class="bx bx-heart"></i>
                </a>
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products9.png"
                  alt="Products"
                />
                <div class="inner">
                  <h3>
                    <a href="single-product.html">Four Door Wardrobe</a>
                  </h3>
                  <span>$220.00</span>
                </div>
              </div>
              <div class="bottom">
                <a class="cart-text" href="#">Add To Cart</a>
                <i class="bx bx-plus"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center">
          <a class="common-btn" href="shop.html">
            Load More Products
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="buy-area">
  <div class="buy-shape">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape3.png" alt="Shape" />
  </div>
  <div class="container-fluid p-0">
    <div class="row m-0 align-items-center">
      <div class="col-lg-6 p-0">
        <div class="buy-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/buy-main1.png" alt="Buy" />
        </div>
      </div>
      <div class="col-lg-6 p-0">
        <div class="buy-content ptb-100">
          <h2>Buy Best Furniture At A Cheaper Rate</h2>
          <p>Soft Comfy Ash Dual Sofa</p>
          <ul>
            <li>$160.00</li>
            <li>
              <del>$200.00</del>
            </li>
          </ul>
          <a class="common-btn" href="shop.html">
            Shop Now
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="brand-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h2>Our Trusted Brand</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand1.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand2.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand3.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand4.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand5.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand6.png" alt="Brand" />
          </a>
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="brand-item">
          <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/brand7.png" alt="Brand" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="products-area pb-70">
  <div class="container">
    <div class="section-title">
      <h2>Best Selling Products</h2>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3">
        <div class="products-item">
          <div class="top">
            <a class="wishlist" href="#">
              <i class="bx bx-heart"></i>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products10.png" alt="Products" />
            <div class="inner">
              <h3>
                <a href="single-product.html">White Luxury Wardrobe</a>
              </h3>
              <span>$200.00</span>
            </div>
          </div>
          <div class="bottom">
            <a class="cart-text" href="#">Add To Cart</a>
            <i class="bx bx-plus"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="products-item">
          <div class="top">
            <a class="wishlist" href="#">
              <i class="bx bx-heart"></i>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products11.png" alt="Products" />
            <div class="inner">
              <h3>
                <a href="single-product.html">Wooden Wardrobe</a>
              </h3>
              <span>$180.00</span>
            </div>
          </div>
          <div class="bottom">
            <a class="cart-text" href="#">Add To Cart</a>
            <i class="bx bx-plus"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="products-item">
          <div class="top">
            <a class="wishlist" href="#">
              <i class="bx bx-heart"></i>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products12.png" alt="Products" />
            <div class="inner">
              <h3>
                <a href="single-product.html">Three Door Wardrobe</a>
              </h3>
              <span>$170.00</span>
            </div>
          </div>
          <div class="bottom">
            <a class="cart-text" href="#">Add To Cart</a>
            <i class="bx bx-plus"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="products-item">
          <div class="top">
            <a class="wishlist" href="#">
              <i class="bx bx-heart"></i>
            </a>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/products13.png" alt="Products" />
            <div class="inner">
              <h3>
                <a href="single-product.html">Classic Wooden Table</a>
              </h3>
              <span>$190.00</span>
            </div>
          </div>
          <div class="bottom">
            <a class="cart-text" href="#">Add To Cart</a>
            <i class="bx bx-plus"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="testimonials-area pb-100">
  <div class="container">
    <div class="section-title">
      <h2>Our Client Testimonials</h2>
    </div>
    <div class="testimonials-slider owl-theme owl-carousel">
      <div class="testimonials-item">
        <i class="flaticon-quote"></i>
        <p>
          Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
          nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
          sed diam volu ptua
        </p>
        <h3>Adam Smith</h3>
        <span>Co-Founder Of Company</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial1.jpg" alt="Testimonial" />
      </div>
      <div class="testimonials-item">
        <i class="flaticon-quote"></i>
        <p>
          It is a long established fact that a reader will be distracted by the
          readable content of a page when looking at its layout. The point of
          using Lorem Ipsum
        </p>
        <h3>Jonathon Ronan</h3>
        <span>Director Of Company</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial2.jpg" alt="Testimonial" />
      </div>
      <div class="testimonials-item">
        <i class="flaticon-quote"></i>
        <p>
          Contrary to popular belief, Lorem Ipsum is not simply random text. It
          has roots in a piece of classical Latin literature from 45 BC, making
          it over 2000 years old
        </p>
        <h3>Sarp Cesmeli</h3>
        <span>Engineer Of Company</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial3.jpg" alt="Testimonial" />
      </div>
      <div class="testimonials-item">
        <i class="flaticon-quote"></i>
        <p>
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteration in some form, by injected
          humour, or randomised words
        </p>
        <h3>Tom Henry</h3>
        <span>Staff Of Company</span>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial4.jpg" alt="Testimonial" />
      </div>
    </div>
  </div>
</div>

<div class="support-area pt-100 pb-70">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="support-item">
          <i class="flaticon-free-delivery"></i>
          <h3>Free Next Day Delivery</h3>
          <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/support-shape1.png" alt="Shape" />
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="support-item">
          <i class="flaticon-call-center"></i>
          <h3>24/7 Online Support</h3>
          <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/support-shape1.png" alt="Shape" />
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="support-item">
          <i class="flaticon-giftbox"></i>
          <h3>Weekly Gift Voucher</h3>
          <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/support-shape1.png" alt="Shape" />
        </div>
      </div>
    </div>
  </div>
</div>

<section class="blog-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h2>Read Latest Our News</h2>
    </div>
    <div class="row justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="blog-item">
          <div class="top">
            <a href="blog-details.html">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog1.jpg" alt="Blog" />
            </a>
            <span>26 Nov</span>
          </div>
          <div class="bottom">
            <h3>
              <a href="blog-details.html"
                >How To Decorate Your Living Room With Minimal Furniture</a
              >
            </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
              recusandae praesentium dolor atque debitis aspernatur quaerat
            </p>
            <a class="blog-btn" href="blog-details.html">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="blog-item">
          <div class="top">
            <a href="blog-details.html">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog2.jpg" alt="Blog" />
            </a>
            <span>27 Nov</span>
          </div>
          <div class="bottom">
            <h3>
              <a href="blog-details.html"
                >Luxurious Furniture Aren't Expensive All The Time</a
              >
            </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
              recusandae praesentium dolor atque debitis aspernatur quaerat
            </p>
            <a class="blog-btn" href="blog-details.html">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="blog-item">
          <div class="top">
            <a href="blog-details.html">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog3.jpg" alt="Blog" />
            </a>
            <span>28 Nov</span>
          </div>
          <div class="bottom">
            <h3>
              <a href="blog-details.html"
                >How Can I Choose A Comfortable Bed For My Bedroom</a
              >
            </h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
              recusandae praesentium dolor atque debitis aspernatur quaerat
            </p>
            <a class="blog-btn" href="blog-details.html">
              Read More
              <i class="bx bx-plus"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer-area pt-100 pb-70">
  <div class="footer-shape">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-right-shape.png" alt="Shape" />
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape5.png" alt="Shape" />
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-lg-4">
        <div class="footer-item">
          <div class="footer-logo">
            <a class="logo" href="index-2.html">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo" />
            </a>
            <ul>
              <li>
                <i class="flaticon-pin"></i>
                <a href="#">2750 Quadra Street, Victoria, Canada</a>
                <a href="#">345-659 Birmingham Street, England</a>
              </li>
              <li>
                <i class="flaticon-phone-call"></i>
                <a href="tel:9908314326">+990-831-4326</a>
                <a href="tel:5465486325">+546-548-6325</a>
              </li>
              <li>
                <i class="flaticon-email"></i>
                <a
                  href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#a9c1ccc5c5c6e9cccac6d987cac6c4"
                  ><span
                    class="__cf_email__"
                    data-cfemail="4e262b2222210e2b2d213e602d2123"
                    >[email&#160;protected]</span
                  ></a
                >
                <a
                  href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#553c3b333a1530363a257b363a38"
                  ><span
                    class="__cf_email__"
                    data-cfemail="d9b0b7bfb699bcbab6a9f7bab6b4"
                    >[email&#160;protected]</span
                  ></a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="footer-item">
          <div class="footer-services">
            <h3>Customer Services</h3>
            <ul>
              <li>
                <a href="return-policy.html">Return Policy</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="single-product.html">Single Product</a>
              </li>
              <li>
                <a href="order-tracking.html">Order Tracking</a>
              </li>
              <li>
                <a href="privacy-policy.html">Privacy Policy</a>
              </li>
              <li>
                <a href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4">
        <div class="footer-item">
          <div class="footer-links">
            <h3>Important Links</h3>
            <div class="row">
              <div class="col-6 col-sm-8 col-lg-8">
                <ul>
                  <li>
                    <a href="about.html">About Us</a>
                  </li>
                  <li>
                    <a href="blog.html">Blog</a>
                  </li>
                  <li>
                    <a href="#">Wishlist</a>
                  </li>
                  <li>
                    <a href="#">Checkout</a>
                  </li>
                  <li>
                    <a href="shop.html">Shop</a>
                  </li>
                  <li>
                    <a href="login.html">My Account</a>
                  </li>
                </ul>
              </div>
              <div class="col-6 col-sm-4 col-lg-4">
                <ul>
                  <li>
                    <a href="#">Cameras</a>
                  </li>
                  <li>
                    <a href="#">Laptops</a>
                  </li>
                  <li>
                    <a href="#">Headphones</a>
                  </li>
                  <li>
                    <a href="#">Smartwatch</a>
                  </li>
                  <li>
                    <a href="#">Microphones</a>
                  </li>
                  <li>
                    <a href="#">Computers</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-sm-6 col-lg-6">
        <div class="payment-cards">
          <ul>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment1.png" alt="Payment" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment2.png" alt="Payment" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment3.png" alt="Payment" />
              </a>
            </li>
            <li>
              <a href="#" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/payment4.png" alt="Payment" />
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-lg-6">
        <div class="social-links">
          <ul>
            <li>
              <a href="https://www.facebook.com/" target="_blank">
                <i class="bx bxl-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://www.twitter.com/" target="_blank">
                <i class="bx bxl-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/" target="_blank">
                <i class="bx bxl-linkedin"></i>
              </a>
            </li>
            <li>
              <a href="https://www.skype.com/" target="_blank">
                <i class="bx bxl-skype"></i>
              </a>
            </li>
            <li>
              <a href="https://www.youtube.com/" target="_blank">
                <i class="bx bxl-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="copyright-area">
  <div class="container">
    <div class="copyright-item">
      <p>
        © Ecop is Proudly Owned by
        <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
      </p>
    </div>
  </div>
</div>

<div
  class="modal fade modal-right popup-modal"
  id="exampleModal"
  tabindex="-1"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Shopping Cart <span>02 Items</span></h2>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="cart-table">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart/cart1.png" alt="Cart" />
                </th>
                <td>
                  <h3>White Comfy Stool</h3>
                  <span class="rate">$200.00 x 1</span>
                </td>
                <td>
                  <ul class="number">
                    <li>
                      <span class="minus">-</span>
                      <input type="text" value="1" />
                      <span class="plus">+</span>
                    </li>
                  </ul>
                </td>
                <td>
                  <a class="close" href="#">
                    <i class="bx bx-x"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart/cart2.png" alt="Cart" />
                </th>
                <td>
                  <h3>Yellow Armchair</h3>
                  <span class="rate">$180.00 x 1</span>
                </td>
                <td>
                  <ul class="number">
                    <li>
                      <span class="minus">-</span>
                      <input type="text" value="1" />
                      <span class="plus">+</span>
                    </li>
                  </ul>
                </td>
                <td>
                  <a class="close" href="#">
                    <i class="bx bx-x"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="total-amount">
            <h3>Total: <span>$380.00</span></h3>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <form>
          <input
            type="text"
            class="form-control"
            placeholder="Enter Coupon Code"
          />
          <button type="submit" class="btn common-btn">
            Proceed To Checkout
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<div
  class="modal fade modal-right popup-modal wishlist-modal"
  id="exampleModalWishlist"
  tabindex="-1"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Wishlist <span>02 Items</span></h2>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="cart-table">
          <table class="table">
            <tbody>
              <tr>
                <th scope="row">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart/cart1.png" alt="Cart" />
                </th>
                <td>
                  <h3>White Comfy Stool</h3>
                  <span class="rate">$200.00 x 1</span>
                </td>
                <td>
                  <a class="common-btn" href="shop.html">
                    Add To Cart
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
                  </a>
                </td>
                <td>
                  <a class="close" href="#">
                    <i class="bx bx-x"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <th scope="row">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cart/cart2.png" alt="Cart" />
                </th>
                <td>
                  <h3>Yellow Armchair</h3>
                  <span class="rate">$180.00 x 1</span>
                </td>
                <td>
                  <a class="common-btn" href="shop.html">
                    Add To Cart
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
                  </a>
                </td>
                <td>
                  <a class="close" href="#">
                    <i class="bx bx-x"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-subscribe" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="subscribe-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe-shape1.png" alt="Shape" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe-shape2.png" alt="Shape" />
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe-shape3.png" alt="Shape" />
      </div>
      <div class="modal-header border-0">
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center">
          <div class="col-sm-6 col-lg-6">
            <div class="subscribe-img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/subscribe-main1.png" alt="Subscribe" />
            </div>
          </div>
          <div class="col-sm-6 col-lg-6">
            <div class="subscribe-content">
              <h2>Subscribe Our Newsletter</h2>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidun
              </p>
              <form class="newsletter-form" data-toggle="validator">
                <input
                  type="email"
                  class="form-control"
                  placeholder="Enter Your Email"
                  name="EMAIL"
                  required
                  autocomplete="off"
                />
                <button class="btn common-btn" type="submit">
                  Subscribe
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape1.png" alt="Shape" />
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shape2.png" alt="Shape" />
                </button>
                <div id="validator-newsletter" class="form-result"></div>
                <div class="inner-check">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value
                      id="flexCheckDefault5"
                    />
                    <label class="form-check-label" for="flexCheckDefault5">
                      I accept all
                      <a href="terms-conditions.html">Terms & Conditions*</a>
                    </label>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value
                      id="flexCheckDefault6"
                    />
                    <label class="form-check-label" for="flexCheckDefault6">
                      Don't show this message again
                    </label>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="go-top">
  <i class="bx bxs-up-arrow-circle"></i>
  <i class="bx bxs-up-arrow-circle"></i>
</div>


<?php get_footer(); ?>
