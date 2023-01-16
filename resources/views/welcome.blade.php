
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Home Page</title>
<style>
     .btn1{
        background:#5894d8;
        padding: 0.7%;
        top: 8px;
        color: #ffffff;
        position: absolute;
        right: 150px;
        border-radius: 3px;
        font-size: 18px;
        align-content: right;
        float: right;
    }
    .btn1:hover {
        color: black;
        background: #ffffff ;

        border: 100%;
    }

    .btn2{
        background:#5894d8 ;
        padding: 0.7%;
        top: 8px;
        color: white;
        position: absolute;
        right: 10px;
        border-radius: 3px;
        font-size: 18px;
        align-content: right;
        float: right;
    }
    .btn2:hover {
        color: black;
        background: #ffffff;

        border: 100%;
    }

</style>

  <link rel='stylesheet'  href="{{ url('/css/maicons.css')}}">
  <link rel='stylesheet'  href="{{ url('/css/bootstrap.css')}}">
  <link rel='stylesheet'  href="{{ url('/css/animate.css')}}">
  <link rel='stylesheet'  href="{{ url('/css/theme.css')}}">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header style="background-color:#5894d8; ">
      <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
         <p style="color:#ffffff; font-size: 22px;">IMMUNISATION NOTIFICATION MANAGEMENT SYSTEM</p>
        <a href="{{ route('auth.create') }}" class="btn1">SIGN IN</a>
        <a href="{{ route('auth.index') }}" class="btn2">SIGN UP</a>
       </div>
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image:url({{url('image/bg_image_1.jpg')}})">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your child life happier</span>
        <h1 class="display-4">Healthy Living</h1>
      </div>
    </div>
  </div><div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-left">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome To Our Portal</h1>
            <p class="text-grey mb-4">
                Vaccines are one of our most important tools for preventing outbreaks and keeping the world safe.
                 While most children today are being vaccinated, far too many are left behind.<br>
                Make sure as a parent your child is vaccinated to keep him or her in healthier and happier life.</p>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

<hr>
  <footer class="page-footer">
<center> <p id="copyright">Copyright &copy; 2022 Nyeri referral. All right reserved</p></center>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>

</body>
</html>
