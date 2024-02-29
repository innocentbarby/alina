<?php
require_once("components/top.php");
?>
  <body>
    <div class="page-holder">
      <!-- navbar-->
      <?php
require_once("components/navbar.php");
?>
     
     
      <!-- HERO SECTION-->
      <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(img/hero-banner-alt.jpg)">
          <div class="container py-5">
            <div class="row px-4 px-lg-5">
              <div class="col-lg-6">
                <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark" href="shop.php">Browse collections</a>
              </div>
            </div>
          </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
          <header class="text-center">
            <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
            <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
          </header>
          <div class="row">
            <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-1.jpg" alt=""/><strong class="category-item-title">Clothes</strong></a>
            </div>
            <div class="col-md-4"><a class="category-item mb-4" href="shop.php"><img class="img-fluid" src="img/cat-img-2.jpg" alt=""/><strong class="category-item-title">Shoes</strong></a><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-3.jpg" alt=""/><strong class="category-item-title">Watches</strong></a>
            </div>
            <div class="col-md-4"><a class="category-item" href="shop.php"><img class="img-fluid" src="img/cat-img-4.jpg" alt=""/><strong class="category-item-title">Electronics</strong></a>
            </div>
          </div>
        </section>
        <!-- TRENDING PRODUCTS-->
        <section class="py-5">
          <header>
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
          </header>
          <div class="row">
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-1.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Kui Ye Chen’s AirPods</a></h6>
                <p class="small text-muted">$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-primary">Sale</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-2.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Air Jordan 12 gym red</a></h6>
                <p class="small text-muted">$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-3.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Cyan cotton t-shirt</a></h6>
                <p class="small text-muted">$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-info">New</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-4.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Timex Unisex Originals</a></h6>
                <p class="small text-muted">$351</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-danger">Sold</div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-5.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Red digital smartwatch</a></h6>
                <p class="small text-muted">$250</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-6.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Nike air max 95</a></h6>
                <p class="small text-muted">$300</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-7.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Joemalone Women prefume</a></h6>
                <p class="small text-muted">$25</p>
              </div>
            </div>
            <!-- PRODUCT-->
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="product text-center">
                <div class="position-relative mb-3">
                  <div class="badge text-white bg-"></div><a class="d-block" href="detail.php"><img class="img-fluid w-100" src="img/product-8.jpg" alt="..."></a>
                  <div class="product-overlay">
                    <ul class="mb-0 list-inline">
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#!"><i class="far fa-heart"></i></a></li>
                      <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li class="list-inline-item me-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-bs-toggle="modal"><i class="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a class="reset-anchor" href="detail.php">Apple Watch</a></h6>
                <p class="small text-muted">$351</p>
              </div>
            </div>
          </div>
        </section>
        <!-- SERVICES-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row text-center gy-3">
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#delivery-time-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Free shipping</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#helpline-24h-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="d-inline-block">
                  <div class="d-flex align-items-end">
                    <svg class="svg-icon svg-icon-big svg-icon-light">
                      <use xlink:href="#label-tag-1"> </use>
                    </svg>
                    <div class="text-start ms-3">
                      <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                      <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- NEWSLETTER-->
        <section class="py-5">
          <div class="container p-0">
            <div class="row gy-3">
              <div class="col-lg-6">
                <h5 class="text-uppercase">Let's be friends!</h5>
                <p class="text-sm text-muted mb-0">Nisi nisi tempor consequat laboris nisi.</p>
              </div>
              <div class="col-lg-6">
                <form action="#">
                  <div class="input-group">
                    <input class="form-control form-control-lg" type="email" placeholder="Enter your email address" aria-describedby="button-addon2">
                    <button class="btn btn-dark" id="button-addon2" type="submit">Subscribe</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="bg-dark text-white">
        <div class="container py-4">
          <div class="row py-5">
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Customer services</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Help &amp; Contact Us</a></li>
                <li><a class="footer-link" href="#!">Returns &amp; Refunds</a></li>
                <li><a class="footer-link" href="#!">Online Stores</a></li>
                <li><a class="footer-link" href="#!">Terms &amp; Conditions</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
              <h6 class="text-uppercase mb-3">Company</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">What We Do</a></li>
                <li><a class="footer-link" href="#!">Available Services</a></li>
                <li><a class="footer-link" href="#!">Latest Posts</a></li>
                <li><a class="footer-link" href="#!">FAQs</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h6 class="text-uppercase mb-3">Social media</h6>
              <ul class="list-unstyled mb-0">
                <li><a class="footer-link" href="#!">Twitter</a></li>
                <li><a class="footer-link" href="#!">Instagram</a></li>
                <li><a class="footer-link" href="#!">Tumblr</a></li>
                <li><a class="footer-link" href="#!">Pinterest</a></li>
              </ul>
            </div>
          </div>
          <div class="border-top pt-4" style="border-color: #1d1d1d !important">
            <div class="row">
              <div class="col-md-6 text-center text-md-start">
                <p class="small text-muted mb-0">&copy; 2021 All rights reserved.</p>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <p class="small text-muted mb-0">Template designed by <a class="text-white reset-anchor" href="https://bootstrapious.com/p/boutique-bootstrap-e-commerce-template">Bootstrapious</a></p>
                <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- JavaScript files-->
     <?php
     require_once("components/footer.php");
     ?>