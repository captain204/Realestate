<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Open House Nigeria</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  
  <link href="EstateAgency/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="EstateAgency/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="EstateAgency/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="EstateAgency/lib/animate/animate.min.css" rel="stylesheet">
  <link href="EstateAgency/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="EstateAgency/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="EstateAgency/css/style.css" rel="stylesheet">

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


  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h2 class="title-a text-center">Latest Properties</h2>
        </div>
        @foreach($property as $p)
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
                <img src="{{ URL::to('/') }}/uploads/images/{{ $p->image }}" class="img-" height="500px" width="500px">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">{{ $p->description }}
                      <br /> {{ $p->state }}</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Price | N {{ $p->price }}</span>
                  </div>
                  <a href="{{ route('home.show',$p->id) }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Contact</h4>
                      <span>{{ $p->contact }}</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      
      <h3 class="pull-right">{{ $property->links()}}</h3>
    </div>
  </section>
  <!--/ Property End /-->

  <!--/ Agents Star /-->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Top Agents</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ( $agent as $agents )
        <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
                <img src="{{ URL::to('/') }}/uploads/agents/{{ $agents->image }}" class="img-" height="400px" width="400px">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="agent-single.html" class="link-two">{{ $agents->name}}</a>
                  </h3>
                </div>
              </div>
              <div class="card-body-d">
                <p class="content-d color-text-a">
                  {{ $agents->about }}
                </p>
                <div class="info-agents color-a">
                  <p>
                    <strong>Phone: </strong> {{ $agents->contact }}</p>
                  <p>
                    <strong>Email: </strong> {{ $agents->email }}</p>
                </div>
              </div>
              <div class="card-footer-d">
                <div class="socials-footer d-flex justify-content-center">
                  <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="www.{{ $agents->facebook}}.com" class="link-one">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="www.{{ $agents->twiter}}.com" class="link-one">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="www.{{ $agents->instagram}}.com" class="link-one">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <h3 class="pull-right">{{ $agent->links()}}</h3>
    </div>
  </section>
  <!--/ Agents End /-->


  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 text-center">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Open House Nigeria</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                                
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +2347067653476</li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> openhousenigeria.com</li>
              </ul>
            </div>
          </div>
        </div>
  </section>
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
  <script src="EstateAgency/lib/jquery/jquery.min.js"></script>
  <script src="EstateAgency/lib/jquery/jquery-migrate.min.js"></script>
  <script src="EstateAgency/lib/popper/popper.min.js"></script>
  <script src="EstateAgency/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="EstateAgency/lib/easing/easing.min.js"></script>
  <script src="EstateAgency/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="EstateAgency/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="EstateAgency/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="EstateAgency/js/main.js"></script>

</body>
</html>
