<!doctype html>
<html lang="en">


<!-- Mirrored from cube.webuildthemes.com/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 05:01:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6YWB4ECCWW"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() { dataLayer.push(arguments); }
      gtag('js', new Date());

      gtag('config', 'G-6YWB4ECCWW');
  </script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{url('Frontend/assets/images/favicon.ico')}}" type="image/x-icon" />

  <!-- Libs CSS -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/libs.bundle.css')}}" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="{{url('Frontend/assets/css/index.bundle.css')}}" />

  <!-- Title -->
  <title>Shop</title></head>

<body>


  <!-- navbar -->
  <nav id="mainNav" class="navbar navbar-expand-lg navbar-sticky navbar-dark">
    <div class="container">
      <a href="index.html" class="navbar-brand"><img src="{{url('Frontend/assets/images/logo/logo-light.svg')}}" alt="Logo"></a>

      <!-- secondary -->
      <ul class="navbar-nav navbar-nav-secondary order-lg-3">
        {{-- <li class="nav-item">
          <a class="nav-link nav-icon" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button"
            aria-controls="offcanvasCart">
            <i class="bi bi-cart2"></i>
          </a>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link nav-icon" href="" role="button" data-bs-toggle="collapse" data-bs-target="#userNav"
            aria-expanded="false">
            <i class="bi bi-person"></i>
          </a>
        </li> --}}
{{-- ------------cart------------------- --}}

{{-- {{count(cart::content())}} --}}
        {{-- <a href="{{route('view.cart')}}"><span class="badge badge-success">Cart</span></a> --}}
        {{-- new------------------------------------------------------------------------------------------------------ --}}
        <a href="{{route('new.cart.get')}}"><span class="badge badge-success">Cart({{session()->has('cart') ? count(session()->get('cart')):0}})</span></a>



        <li class="nav-item dropdown dropdown-hover d-none d-lg-block">
          <a class="nav-link nav-icon" role="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-person"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            {{-- <li><a class="dropdown-item " href="{{route('employee.profile')}}">Profile</a></li> --}}
            <li><a class="dropdown-item "
                href="">Orders</a></li>
            <li><a class="dropdown-item "
                href="">Transaction History</a></li>

            <li><a class="dropdown-item text-red" href="{{route('employee.logout')}}">({{auth()->user()->role}})| Log Out</a></li>
          </ul>
        </li>
        <li class="nav-item d-lg-none">
          <a class="nav-link nav-icon" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bi bi-list"></span>
          </a>
        </li>

      </ul>

      <!-- primary -->
      {{-- <div class="collapse navbar-collapse" id="navbar" data-bs-parent="#mainNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-1" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Landings
            </a>

            <ul class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDropdown-1">
              <li><a class="dropdown-item "
                  href="startup.html">Startup</a></li>
              <li><a class="dropdown-item " href="saas.html">Saas</a>
              </li>
              <li><a class="dropdown-item "
                  href="coworking.html">Coworking</a></li>
              <li><a class="dropdown-item "
                  href="job-board.html">Job Board</a></li>
              <li><a class="dropdown-item "
                  href="agency.html">Agency</a>
              </li>
              <li><a class="dropdown-item " href="blog.html">Blog</a>
              </li>
              <li><a class="dropdown-item "
                  href="product.html">Product</a></li>
              <li><a class="dropdown-item " href="app.html">App</a>
              </li>
              <li><a class="dropdown-item active" href="shop.html">Shop</a>
              </li>
              <li><a class="dropdown-item "
                  href="event.html">Event</a></li>
              <li><a class="dropdown-item "
                  href="course.html">Course</a>
              </li>
              <li><a class="dropdown-item "
                  href="service.html">Service</a></li>
              <li><a class="dropdown-item "
                  href="software.html">Software</a></li>
              <li><a class="dropdown-item "
                  href="documentation.html">Documentation</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarDropdown-2">
              <div class="row g-0">
                <div class="col-6">
                  <div class="p-4">
                    <span class="dropdown-label">Company</span>
                    <a class="dropdown-item "
                      href="about.html">About</a>
                    <a class="dropdown-item "
                      href="pricing.html">Pricing</a>
                    <a class="dropdown-item " href="faq.html">FAQ</a>
                    <a class="dropdown-item "
                      href="terms.html">Terms</a>
                    <a class="dropdown-item "
                      href="services.html">Services</a>
                    <a class="dropdown-item "
                      href="job-listing.html">Job Listing</a>
                    <a class="dropdown-item "
                      href="job-post.html">Job Post</a>
                    <span class="dropdown-label">Portfolio</span>
                    <a class="dropdown-item "
                      href="portfolio-grid.html">Grid</a>
                    <a class="dropdown-item "
                      href="portfolio-list.html">List</a>
                    <a class="dropdown-item "
                      href="case-study.html">Case Study</a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="p-4">
                    <span class="dropdown-label">Blog</span>
                    <a class="dropdown-item "
                      href="blog-listing.html">Listing</a>
                    <a class="dropdown-item "
                      href="blog-post.html">Post</a>
                    <span class="dropdown-label">Contact</span>
                    <a class="dropdown-item "
                      href="contact.html">Classic</a>
                    <a class="dropdown-item "
                      href="contact-location.html">Location</a>
                    <span class="dropdown-label">Utilities</span>
                    <a class="dropdown-item " href="404.html">404</a>
                    <a class="dropdown-item "
                      href="coming-soon.html">Coming Soon</a>
                  </div>
                </div>

              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-3" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside">
              Account
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown-3">
              <li><a class="dropdown-item "
                  href="">Profile</a></li>
              <li><a class="dropdown-item "
                  href=""></a></li>
              <li><a class="dropdown-item "
                  href="account-orders.html">Orders</a></li>
              <li><a class="dropdown-item "
                  href="account-billing.html">Billing</a></li>
              <li><a class="dropdown-item " href="sign-in.html">Sign
                  in</a></li>
              <li><a class="dropdown-item "
                  href="register.html">Register</a></li>
              <li><a class="dropdown-item "
                  href="forgot-password.html">Forgot Password</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-4" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" data-bs-auto-close="outside">
              Shop
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown-4">
              <li><a class="dropdown-item "
                  href="shop-product.html">Product</a></li>
              <li class="dropend dropend-hover">
                <a class="dropdown-item dropdown-toggle  "
                  href="#" id="navbarDropend-1" data-bs-toggle="dropdown" aria-expanded="false"
                  data-bs-auto-close="outside">Listing</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropend-1">
                  <li><a class="dropdown-item "
                      href="shop-listing.html">Full width</a></li>
                  <li><a class="dropdown-item "
                      href="shop-listing-sidebar.html">Sidebar</a></li>
                </ul>
              </li>
              <li><a class="dropdown-item "
                  href="shop-cart.html">Cart</a></li>
              <li><a class="dropdown-item "
                  href="shop-checkout.html">Checkout</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-5" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Docs
            </a>
            <ul class="dropdown-menu dropdown-menu-detailed" aria-labelledby="navbarDropdown-5">
              <li><a class="dropdown-item " href="docs/index.html">
                  <span>
                    <i class="bi bi-book"></i>
                    Get Started
                    <small>Customising and building</small>
                  </span>
                </a>
              </li>
              <li><a class="dropdown-item "
                  href="docs/accordion.html">
                  <span>
                    <i class="bi bi-grid"></i>
                    Components
                    <small>Full list of components</small>
                  </span>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </div> --}}



      <!-- mobile user menu -->
      {{-- <div class="collapse account-collapse" id="userNav" data-bs-parent="#mainNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " type="button" href="employee.profile">Profile</a>

          <li class="nav-item">
            <a class="nav-link " href="#">Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">Transaction History</a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link text-red" type="button" href="{{('employee.logout')}}">Log Out</a> --}}
          {{-- </li>
        </ul>
      </div> --}}




    </div>
  </nav>


  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCart">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasCartLabel">Shopping Cart</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-unstyled">
        <li>
          {{-- fdshfjdfhghdfh --}}
          <div class="row g-2 g-lg-3 align-items-center">
            <a href="#" class="col-3"><img class="img-fluid" src="{{url('Frontend/assets/images/products/product-1.jpg')}}"
                alt="Product"></a>
            <div class="col">
              <a href="#" class="text-black text-primary-hover lead">Bluetooth Speaker</a>
              <ul class="list-inline text-muted">
                <li class="list-inline-item">Price: <span class="text-secondary">$90</span></li>
                <li class="list-inline-item">Color: <span class="text-secondary">Blue</span></li>
                <li class="list-inline-item">Qty:
                  <div class="counter text-secondary" data-counter="qty-1">
                    <span class="counter-minus bi bi-dash"></span>
                    <input type="number" name="qty-1" class="counter-value" value="0" min="0" max="10">
                    <span class="counter-plus bi bi-plus"></span>
                  </div>
                </li>
              </ul>
              <a href="#" class="text-red underline">Remove</a>
            </div>
          </div>
        </li>
        <li class="mt-4">
          <div class="row g-2 g-lg-3 align-items-center">
            <a href="#" class="col-3"><img class="img-fluid" src="{{url('Frontend/assets/images/products/product-2.jpg')}}"
                alt="Product"></a>
            <div class="col">
              <a href="#" class="text-black text-primary-hover lead">Bluetooth Speaker</a>
              <ul class="list-inline text-muted">
                <li class="list-inline-item">Price: <span class="text-secondary">$90</span></li>
                <li class="list-inline-item">Color: <span class="text-secondary">Blue</span></li>
                <li class="list-inline-item">Qty:
                  <div class="counter text-secondary" data-counter="qty-1">
                    <span class="counter-minus bi bi-dash"></span>
                    <input type="number" name="qty-1" class="counter-value" value="0" min="0" max="10">
                    <span class="counter-plus bi bi-plus"></span>
                  </div>
                </li>
              </ul>
              <a href="#" class="text-red underline">Remove</a>
            </div>
          </div>
        </li>
        <li class="mt-4">
          <div class="row g-2 g-lg-3 align-items-center">
            <a href="#" class="col-3"><img class="img-fluid" src="{{url('Frontend/assets/images/products/product-3.jpg')}}"
                alt="Product"></a>
            <div class="col">
              <a href="#" class="text-black text-primary-hover lead">Bluetooth Speaker</a>
              <ul class="list-inline text-muted">
                <li class="list-inline-item">Price: <span class="text-secondary">$90</span></li>
                <li class="list-inline-item">Color: <span class="text-secondary">Blue</span></li>
                <li class="list-inline-item">Qty:
                  <div class="counter text-secondary" data-counter="qty-1">
                    <span class="counter-minus bi bi-dash"></span>
                    <input type="number" name="qty-1" class="counter-value" value="0" min="0" max="10">
                    <span class="counter-plus bi bi-plus"></span>
                  </div>
                </li>
              </ul>
              <a href="#" class="text-red underline">Remove</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="offcanvas-footer">
      <div class="d-grid gap-1">
        <a href="#" class="btn btn-outline-light rounded-pill">View Cart</a>
        <a href="#" class="btn btn-primary rounded-pill">Proceed to Checkout</a>
      </div>
    </div>
  </div>


  <div class="offcanvas-wrap">

    <!-- hero -->
    <section class="cover overflow-hidden inverted bg-black">
      <div class="d-flex flex-column min-vh-75 container py-10 level-1">
        <div class="row justify-content-center my-auto">
          <div class="col-md-8 text-center">
            <span class="eyebrow text-secondary"></span>
            <h1 class="display-2 lh-sm fw-bold">AssetsBud.
            </h1>
            <a href="#" class="btn btn-outline-white rounded-pill">Product Collection</a>
          </div>
        </div>
        <div class="row text-center">
          <div class="col">
            <small class="text-secondary">
              Which product do you need ?
            </small>
          </div>
        </div>
      </div>
      <div class="background background-overlay" data-aos="zoom-out" data-aos-delay="200">
        <video data-video playsinline autoplay muted loop>
          <source src="{{url('Frontend/assets/video/video-2.mp4')}}" type="video/mp4" />
        </video>
      </div>
    </section>
{{-- messafe-------------------------------- --}}
{{-- @if(session()->has('success'))
<p class="alert alert-success">
  {{session()->get('success')}}
</p>
@endif

@if ($errors->any())
<div class="alert alert-warning" role="alert">
<ul>
@foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
@endforeach
</ul>
</div>
@endif

{{-- -------css carousel-------- --}}
<style>
  #used{
    width: 100%;
  }
  .products-single{
    background-color: #fff;
    border: none;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 10%), 0 8px 16px rgb(0 0 0 / 10%);
    box-sizing: border-box;
    margin: 10px;

    padding: 10px;
    width: 320px;
  }
  .btn{
    background-color: rgb(15, 95, 15);
    padding: 3px;
    border-radius: 4px;
    margin-left: 48px;
    color: #fcf7f7

  }
  .btn:hover{
    background-color: rgb(207, 216, 216);
  }
  .img-fluid{
    margin-left: 3px;
  }
  .pname{
    font-size: 19px;
    margin: 10px;
    font-family: Dongle;
    color: #353333;

  }
</style> --}}

    <!-- product carousel -->

{{--
<div class="row special-list " id="used">


    @foreach ($product as $key=>$item )
<div class="col-lg-3 col-md-6 special-grid best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">

            </div>
            <img style="height: 200px" name="image" src="{{url('/uploads/products/'. $item->image)}}" class="img-fluid" alt="Image">
            <div class="mask-icon"> --}}
                {{-- <ul>
                    <li><a href="{{route('Carousel.product',$item->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                </ul> --}}
            {{-- </div>
        </div>
        <div class="why-text">
            <h4 class="name">product name: {{$item->name}}</h4>
            <span class="pname">description: {{$item->details}} </span><br>
            <a href="" class="btn">Details</a>
            <a href="{{route('add.cart',$item->id)}}" class="btn">Add to Cart</a>

        </div>
    </div>
</div>
    @endforeach


</div>
</div>
</div>
 --}}





{{-- new cart--------------------------------------------------------------------------------------------  --}}
<div class="row special-list " id="used">


    @foreach ($product as $key=>$item )
<div class="col-lg-3 col-md-6 special-grid best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">

            </div>
            <img style="height: 200px" name="image" src="{{url('/uploads/products/'. $item->image)}}" class="img-fluid" alt="Image">
            <div class="mask-icon">
                {{-- <ul>
                    <li><a href="{{route('Carousel.product',$item->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                </ul> --}}
            </div>
        </div>
        <div class="why-text">
            <h4 class="name">product name: {{$item->name}}</h4>
            <span class="pname">description: {{$item->details}} </span><br>
            <a href="" class="btn">Details</a>
            <a href="{{route('new.cart',$item->id)}}" class="btn">Add to Cart</a>

        </div>
    </div>
</div>
    @endforeach


</div>
</div>
</div>
    {{-- <section class="overflow-hidden pt-3 pt-xl-4">
      <div class="container">
        <div class="carousel carousel-visible">
          <div data-carousel='{"nav": false,"mouseDrag": true, "gutter": 32, "loop": true, "responsive": {"0": {"items": 1}, "768": {"items": 2}, "992": {"items": 2}, "1200": {"items": 3}}}'>
            <div>



              <div class="product">
                @foreach ($product as $item)
                <figure class="product-image">
                  <a href="#!">
                    <img class="img-fluid img-thumbnail img-responsive" src="{{url('/uploads/products/'.$item->image)}}" alt="Image" />

                  </a>
                </figure>
                <a class="{{$item->name}}" href="#!"></a>
                <span class="{{$item->category}}"> </span>
                <span class="{{$item->details}}"> </span>
                @endforeach
              </div>

           </div>
            {{-- <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-2.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-2-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Black Karlo Backpack</a>
                <span class="product-price">$88 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-3.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-3-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Black Closca Helmet</a>
                <span class="product-price">$132 </span>
              </div>
              </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-4.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-4-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Speaker</a>
                <span class="product-price">$100 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-5.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-5-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Gravel Black Sigg Water Bottle</a>
                <span class="product-price">$23 <s class="text-muted">$34</s></span>
              </div>             --}}
            {{-- </div>
          </div>
        </div>
      </div>


    </section> --}}


    {{-- <!-- categories -->
    <section class="py-15 py-xl-20">
      <div class="container">
        <div class="row mb-5">
          <div class="col text-center">
            <h2 class="fw-bold mb-0">Categories</h2>
          </div>
        </div>
        <div class="row g-3 g-xl-4" data-masonry>
          <div class="col-md-6" data-aos="fade-up">
            <a href="#" class="card equal-md-1-1 card-hover-gradient">
              <div class="card-wrap">
                <div class="card-footer my-auto">
                  <div class="text-center text-shadow">
                    <h3 class="mb-0 fw-bold text-white">Pullovers</h3>
                  </div>
                </div>
              </div>
              <figure class="background" style="background-image: url('Frontend/assets/images/shop-1.jpg')"></figure>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up">
            <a href="#" class="card equal-md-16-9 card-hover-gradient">
              <div class="card-wrap">
                <div class="card-footer my-auto">
                  <div class="text-center text-shadow">
                    <h3 class="mb-0 fw-bold text-white">Trainers</h3>
                  </div>
                </div>
              </div>
              <figure class="background" style="background-image: url('Frontend/assets/images/shop-2.jpg')"></figure>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up">
            <a href="#" class="card equal-md-1-1 card-hover-gradient">
              <div class="card-wrap">
                <div class="card-footer my-auto">
                  <div class="text-center text-shadow">
                    <h3 class="mb-0 fw-bold text-white">Jeans</h3>
                  </div>
                </div>
              </div>
              <figure class="background" style="background-image: url('Frontend/assets/images/shop-3.jpg')"></figure>
            </a>
          </div>
          <div class="col-md-6" data-aos="fade-up">
            <a href="#" class="card equal-md-16-9 card-hover-gradient">
              <div class="card-wrap">
                <div class="card-footer my-auto">
                  <div class="text-center text-shadow">
                    <h3 class="mb-0 fw-bold text-white">Accessories</h3>
                  </div>
                </div>
              </div>
              <figure class="background" style="background-image: url('Frontend/assets/images/shop-4.jpg')"></figure>
            </a>
          </div>
        </div>
      </div>
    </section> --}}


    <!-- product carousel -->
    {{-- <section class="overflow-hidden">
      <div class="container">
        <div class="row align-items-end mb-5">
          <div class="col-lg-8 mb-2 mb-lg-0">
            <h2 class="fw-bold">Gadgets</h2>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a href="#" class="underline action">View all products <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
        <div class="carousel carousel-visible" data-aos="fade-left">
          <div
            data-carousel='{"nav": false,"mouseDrag": true, "gutter": 32, "loop": true, "responsive": {"0": {"items": 1}, "768": {"items": 2}, "992": {"items": 2}, "1200": {"items": 3}}}'>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-1.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-1-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Watch</a>
                <span class="product-price">$100 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-2.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-2-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Black Karlo Backpack</a>
                <span class="product-price">$88 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-3.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-3-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Black Closca Helmet</a>
                <span class="product-price">$132 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-4.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-4-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Speaker</a>
                <span class="product-price">$100 </span>
              </div>            </div>
            <div>
              <div class="product">
                <figure class="product-image">
                  <a href="#!">
                    <img src="{{url('Frontend/assets/images/products/product-5.jpg')}}" alt="Image" />
                    <img src="{{url('Frontend/assets/images/products/product-5-2.jpg')}}" alt="Image" />
                  </a>
                </figure>
                <a class="product-title" href="#!">Gravel Black Sigg Water Bottle</a>
                <span class="product-price">$23 <s class="text-muted">$34</s></span>
              </div>            </div>
          </div>
        </div>
      </div>
    </section>
 --}}

    <!-- text -->
    {{-- <section class="py-15 py-xl-20">
      <div class="container">
        <div class="row g-5 justify-content-center">
          <div class="col-8 col-md-4 text-center">
            <i class="bi bi-truck fs-4 mb-2"></i>
            <h6 class="mb-0 fw-normal fs-lg">Free Shipping</h6>
            <p class="text-muted">From all orders over $100</p>
          </div>
          <div class="col-8 col-md-4 text-center">
            <i class="bi bi-arrow-left-right fs-4 mb-2"></i>
            <h6 class="mb-0 fw-normal fs-lg">Free Returns</h6>
            <p class="text-muted">Return money within 30 days</p>
          </div>
          <div class="col-8 col-md-4 text-center">
            <i class="bi bi-bag-check fs-4 mb-2"></i>
            <h6 class="mb-0 fw-normal fs-lg">Secure Shopping</h6>
            <p class="text-muted">You’re in safe hands</p>
          </div>
        </div>
      </div>
    </section>
 --}}

    <!-- footer -->
    {{-- <footer class="py-15 py-xl-20 border-top">
      <div class="container">
        <div class="row g-4 g-lg-5 mb-10">
          <div class="col-md-3 text-center text-md-start">
            <a href="index.html" class="navbar-brand"><img src="{{url('Frontend/assets/images/logo/logo-dark.svg')}}" alt="Logo"></a>
          </div>
          <div class="col-md-4 col-lg-5 text-center text-md-start">
            <ul class="list-unstyled">
              <li class="mb-1"><a href="#" class="text-reset text-primary-hover">documentation</a></li>
              <li class="mb-1"><a href="#" class="text-reset text-primary-hover">components</a></li>
              <li class="mb-1"><a href="#" class="text-reset text-primary-hover">blocks</a></li>
              <li class="mb-1"><a href="#" class="text-reset text-primary-hover">changelog</a></li>
              <li><a href="#" class="text-reset text-primary-hover">roadmap</a></li>
            </ul>
          </div>
          <div class="col-md-5 col-lg-4">
            <div class="grouped-inputs border p-1 rounded-pill">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control rounded-pill px-3" aria-label="Text input"
                    placeholder="Your email">
                </div>
                <div class="col-auto">
                  <a href="#" class="btn btn-primary btn-icon rounded-circle"><i class="bi bi-arrow-return-left"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center g-1 g-lg-6 text-muted">
          <div class="col-md-6 col-lg-5 order-lg-2 text-center text-md-start">
            <ul class="list-inline small">
              <li class="list-inline-item"><a href="#" class="text-reset text-primary-hover">facebook</a></li>
              <li class="list-inline-item ms-1"><a href="#" class="text-reset text-primary-hover">twitter</a></li>
              <li class="list-inline-item ms-1"><a href="#" class="text-reset text-primary-hover">linkedin</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-4 text-center text-md-end order-lg-3">
            <span class="small">5th Avenue, New York USA 10255</span>
          </div>
          <div class="col-lg-3 order-lg-1 text-center text-md-start">
            <p class="small">Copyrights © 2021</p>
          </div>
        </div>
      </div>
    </footer>  </div> --}}


  <!-- javascript -->
  <script src="{{url('Frontend/assets/js/vendor.bundle.js')}}"></script>
  <script src="{{url('Frontend/assets/js/index.bundle.js')}}"></script></body>


<!-- Mirrored from cube.webuildthemes.com/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 05:01:56 GMT -->
</html>
