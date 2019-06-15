<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Open House Nigeria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  
  <link href="{{ url('EstateAgency/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ url('EstateAgency/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url('EstateAgency/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ url('EstateAgency/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ url('EstateAgency/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{  url('EstateAgency/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url ('EstateAgency/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Types</option>
                <option>For Rent</option>
                <option>For Sale</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All</option>
                <option>Lagos</option>
                <option>Abuja</option>
                <option>Plateau</option>
                <option>Kaduna</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Any price</option>
                <option>N500,000</option>
                <option>N1,000000</option>
                <option>$3,000000</option>
                <option>12,000000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Open <span class="color-b">House</span></a>
      <button type="button" class="btn btn-liHousenk nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog-grid.html">Forum</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
             Property
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="blog-single.html">Sale</a>
              <a class="dropdown-item" href="agents-grid.html">Rent</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <!--/ Nav End /-->


  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">{{ $property->name }}</h1>
            <span class="color-text-a">{{ $property->state }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Single Star /-->
  <section class="property-single nav-arrow-b">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
            <div class="carousel-item-b">
                    <img src="{{ URL::to('/') }}/uploads/images/{{ $property->image }}">
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5 col-lg-4">
              <div class="property-price d-flex justify-content-center foo">
                <div class="card-header-c d-flex">
                  <div class="card-box-ico">
                    <span class="ion-money">N</span>
                  </div>
                  <div class="card-title-c align-self-center">
                    <h5 class="title-c">{{ $property->price }}</h5>
                  </div>
                </div>
              </div>
              <div class="property-summary">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d section-t4">
                      <h3 class="title-d">Quick Summary</h3>
                    </div>
                  </div>
                </div>
                <div class="summary-list">
                  <ul class="list">
                    <li class="d-flex justify-content-between">
                      <strong>Property ID:</strong>
                      <span>{{ $property->id }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Location:</strong>
                      <span>{{ $property->state }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Property Type:</strong>
                      <span>House</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Status:</strong>
                      <span>Sale</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-lg-7 section-md-t3">
              <div class="row">
                <div class="col-sm-12">
                  <div class="title-box-d">
                    <h3 class="title-d">Property Description</h3>
                  </div>
                </div>
              </div>
              <div class="property-description">
                <p class="description color-text-a">
                  {{ $property->description }}
                </p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row section-t3">
            <div class="col-sm-12">
              <div class="title-box-d">
                <h3 class="title-d">Contact Agent</h3>
              </div>
            </div>
          </div>
         
          <div class="row">
            @foreach ($agents as $agent )
            <div class="col-md-6 col-lg-4">
              <img src="{{ URL::to('/') }}/uploads/agents/{{ $agent->image }}" height="300px" width="250px">
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="property-agent">
                <h4 class="title-agent">{{ $agent->name }}</h4>
                <p class="color-text-a">
                  {{ $agent->about }}
                </p>
                <ul class="list-unstyled">
                  <li class="">
                    <strong>Phone:</strong>
                    <span class="color-text-a">{{ $agent->contact }}</span>
                  </li>
                  <li class="">
                    <strong>Email:</strong>
                    <span class="color-text-a">{{ $agent->email }}</span>
                  </li>
                </ul>
                <div class="socials-a">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="{{ $agent->facebook }}">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{ $agent->twiter }}">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="{{ $agent->instagram }}">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-md-12 col-lg-4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property Single End /-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Open House Nigeria</span> All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{ url('EstateAgency/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ url('EstateAgency/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ url('EstateAgency/lib/popper/popper.min.js')}}"></script>
  <script src="{{ url('EstateAgency/lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ url('EstateAgency/lib/easing/easing.min.js')}}"></script>
  <script src="{{ url('EstateAgency/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{  url('EstateAgency/lib/scrollreveal/scrollreveal.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ url('EstateAgency/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ url('EstateAgency/js/main.js')}}"></script>

</body>
</html>


