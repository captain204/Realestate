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
            <a class="nav-link active" href="home">Home</a>
          </li>
          @if (!Session::has('username'))
            <li class="nav-item">
              <a class="nav-link" href="register">Create Account</a>
            </li>
          @endif
          <li class="nav-item">
                <a class="nav-link" href="logout">Logout</a>
          </li>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->


  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
          <div class="col-md-10 offset-2">
              <h3 class="text-center"> Create new topic <h3>
            <form action="{{route('forum.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field()}}
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                        <input type="hidden" name="category" id="category" value="deals" class="form-control">
                </div>
                <div class="form-group">
                        <input type="hidden" name="user_id" id="user_id" value="{{ Session::get('username') }}" class="form-control">
                </div>
                <div class="form-group">
                        <label>Body</label>
                        <textarea id="body" rows="6" cols="80" class="form-control"
                        name="body" required></textarea>
                </div>
                <b>Optional</b>
                <div class="form-group">
                    <label for="image_one">Choose image</label>
                    <input type="file" name="image_one" id="image_one" class="form-control">
                </div>
                <div class="form-group">
                        <label for="image_two">Choose image</label>
                        <input type="file" name="image_two" id="image_two" class="form-control">
                </div>
                <div class="form-group">
                        <label for="image_one">Choose image</label>
                        <input type="file" name="image_three" id="image_three" class="form-control">
                </div>
                <button  type="submit" name="submit" class="btn btn-primary">Submit</button> 
            </form>  
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

