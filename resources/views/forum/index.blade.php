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
            <a class="nav-link" href="blog-grid.html">Create Account</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="blog-grid.html">Logout</a>
            </li>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-center">
            <strong>{{ Session::get('username') }}</strong>
            <p>  <a href="mortgages"> Mortgages </a>/<a href="deals"> Deals </a>/<a href="events"> Events/</a><a href="careers"> Careers </a>
            @foreach ( $posts as $post)
          <h3><a href="#">{{ $post->category  }} </a></h3>
        </p>  
        @if (Session::has('forum'))
            <div class="alert alert-success">
              <strong> {{ Session::get('forum') }} </strong>
            </div>
        @endif
          <div class="content">
            
                <h5><a href="{{route('forum.show',$post->id) }}" class="title">{{ $post->title  }}</a></h5>
                <div class="content-info">
                    <a href="" class="username">{{ $post->user  }}>>></a>
                </div>
                <hr>
            </div>
            <hr>
        @endforeach
        </div>
        <div class="col-md-5">
          <div class="container">
            <div class="row">
              @if (!Session::has('user'))
                <div class="col-md-12">
                    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field()}}
                    <div class="form-group has-feedback">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
                    </div>
                    <div class="form-group has-feedback">
                            <label>Password</label>
                            <input type="password" class="form-control"  name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                    </div>
                    <!-- /.col -->
                    </div>
                </form>
                </div>
                @endif
                <div class="col-md-10">
                  <div class="block">
                    <h3>Categories</h3>
                    <div class="list-group">
                        <a href="topics.php" class="list-group-item"><span>General</span></a>
                        <a href="mortgages" class="list-group-item"><span class="badge pull-left">Mortgages</span></a>
                        <a href="deals" class="list-group-item"><span class="badge pull-left">Deals</span></a>
                        <a href="events" class="list-group-item"><span class="badge pull-left">Events</span></a>
                        <a href="careers" class="list-group-item"><span class="badge pull-left">Career</span></a>
                    </div>
            </div>               
               </div>
            </div>
            </div>
          </div>
        </div>
      
    </div>
  </section>
  <!--/ Property End /-->


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
