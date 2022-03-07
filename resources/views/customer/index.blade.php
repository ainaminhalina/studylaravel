    <!DOCTYPE html>
    <html lang="en">
    
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title>Our Story - MeFamily Bootstrap Template</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
    
      <!-- Favicons -->
      <link href="{{ env('APP_URL') }}/assets/img/favicon.png" rel="icon">
      <link href="{{ env('APP_URL') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="{{ env('APP_URL') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="{{ env('APP_URL') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="{{ env('APP_URL') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
      <link href="{{ env('APP_URL') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href="{{ env('APP_URL') }}/assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="{{url('customers/')}}">Me &amp; Family</a></h1>

            <nav id="navbar" class="navbar">
                <ul>
                  <li><a class="active" href="{{url('customers/')}}">Home</a></li>
                  <li><a href="{{ env('APP_URL') }}/customers/create/">Add Members</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->
        
            </div>
          </header><!-- End Header -->
        
    <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <section id="about" class="about">
        <div class="container">
  
          <div class="section-title">
            <h2>Me & Family</h2>
            <p>Here is the list of my family.</p>
          </div>

                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $key => $value)
                                    <tr>
                                        <td>
                                            {{$value->id}}
                                        </td>
                                        <td>
                                            <a href = "{{ env('APP_URL') }}/customers/display/{{$value->id}}">
                                            {{$value->name}}
                                            </a>
                                        </td>
                                        <td>
                                            {{$value->age}}
                                        </td>
                                        <td>
                                            {{$value->gender}}
                                        </td>
                                        <td>
                                            {{$value->address}}
                                        </td>
                                        <td>
                                            <button class="btn btn-danger" onclick="deleting('{{$value->id}}')">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
    <div class="container">
      <h3>MeFamily</h3>
      <p>Example of Website by using Laravel framework.</p>
      <div class="social-links">
        <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/in/aina-minhalina-669933177/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="{{ env('APP_URL') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ env('APP_URL') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>


        {{-- Javascript --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            // $(function(){
               function deleting(id){
                $.ajax({
                method: "DELETE",
                url:"{{url('api/customers/delete')}}/" + id,
                // data: { name: "John", location: "Boston" }
                })
                .done(function( msg ) {
                    alert("Customer deleted!");
                    window.location.href = "{{url('customers/')}}";
                 });
               }
            // });
        </script>
    </body>
</html>