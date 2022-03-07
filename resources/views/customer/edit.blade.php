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
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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
    <main id="main">

        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>
                        <a href="{{url('customers/')}}">
                        Me & Family
                        </a>
                    </h2>
                    <p>Edit the details of my family.</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="form-group my-2">
                            {{-- label for == input id --}}
                            <div class="my-1">
                                <label for="name">Name</label>
                            </div>
                            <input type="text" class="form-control" id="name" name="name"
                                value='{{ $customers[0]->name }}' placeholder="Enter name">
                        </div>
                        <div class="form-group my-2">
                            <div class="my-1">
                                <label for="age">Age</label>
                            </div>
                            <input type="number" class="form-control" id="age" name="age"
                                value='{{ $customers[0]->age }}' placeholder="Enter age">
                        </div>
                        <div class="form-group my-2">
                            <div class="my-1">
                                <label for="gender">Gender</label>
                            </div>
                            <input type="text" class="form-control" id="gender" name="gender"
                                value='{{ $customers[0]->gender }}' placeholder="Enter gender">
                        </div>
                        <div class="form-group my-2">
                            <div class="my-1">
                                <label for="address">Address</label>
                            </div>
                            <input type="text" class="form-control" id="address" name="address"
                                value='{{ $customers[0]->address }}' placeholder="Enter address">
                        </div>
                    </div>
                    <div class="col-md-12 text-center m-4">
                        <button type="button" class="btn btn-primary"
                            onclick="updating({{ $id }})">Submit</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container">
                <h3>MeFamily</h3>
                <p>Example of Website by using Laravel framework.</p>
                <div class="social-links">
                    <a href="https://twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/aina-minhalina-669933177/" class="linkedin"><i
                            class="bx bxl-linkedin"></i></a>
                </div>
                <div class="copyright">
                    &copy; Copyright <strong><span>MeFamily</span></strong>. All Rights Reserved
                </div>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ env('APP_URL') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ env('APP_URL') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ env('APP_URL') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ env('APP_URL') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ env('APP_URL') }}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ env('APP_URL') }}/assets/js/main.js"></script>

        {{-- Js --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            function updating(id) {
                $.ajax({
                        method: "PUT",
                        url: "{{ url('api/customers/update') }}/" + id,
                        data: {
                            name: $("#name").val(),
                            age: $("#age").val(),
                            gender: $("#gender").val(),
                            address: $("#address").val()
                        }
                    })
                    .done(function(msg) {
                        alert("Customer updated!");
                        window.location.href = "{{url('customers/')}}";
                    });
            }
        </script>
</body>

</html>
