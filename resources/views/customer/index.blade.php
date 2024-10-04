<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-2"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
            </nav>
        </div>
        <!-- Navbar & Hero End -->
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container pt-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Menu</h5>
                    <h1 class="mb-5">Restoran Putra Yummy</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    {{-- <small class="text-body">Popular</small> --}}
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    {{-- <small class="text-body">Special</small> --}}
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    {{-- <small class="text-body">Lovely</small> --}}
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="row g-4">
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/makanan 1.jpeg" alt="">
                                    </div>
                                    <h5 class="mb-0">menu Name</h5>
                                    <p class="mx-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                        Blanditiis, porro.</p>
                                    <small>Harga</small>
                                    <div class="btn-pesan d-flex justify-content-center mt-3 py-3">
                                        <a class="btn btn-square btn-primary py-1 px-5" href="">
                                            Pesann
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/makanan 1.jpeg" alt="">
                                    </div>
                                    <h5 class="mb-0">menu Name</h5>
                                    <small>Harga</small><br>
                                    <small id="status" class=>ada</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary mx-1" href="">+</a>
                                        <div class="btn btn-square btn-primary mx-1" href="">1</div>
                                        <a class="btn btn-square btn-primary mx-1" href="">-</a>
                                        <a class="btn btn-square btn-primary mx-1 px-5" href="">
                                            <p class="mt-4">pesan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/makanan 1.jpeg" alt="">
                                    </div>
                                    <h5 class="mb-0">menu Name</h5>
                                    <small>Harga</small><br>
                                    <small id="status" class=>ada</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary mx-1" href="">+</a>
                                        <div class="btn btn-square btn-primary mx-1" href="">1</div>
                                        <a class="btn btn-square btn-primary mx-1" href="">-</a>
                                        <a class="btn btn-square btn-primary mx-1 px-5" href="">
                                            <p class="mt-4">pesan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item text-center rounded overflow-hidden">
                                    <div class="rounded-circle overflow-hidden m-4">
                                        <img class="img-fluid" src="img/makanan 1.jpeg" alt="">
                                    </div>
                                    <h5 class="mb-0">menu Name</h5>
                                    <small>Harga</small><br>
                                    <small id="status" class=>ada</small>
                                    <div class="d-flex justify-content-center mt-3">
                                        <a class="btn btn-square btn-primary mx-1" href="">+</a>
                                        <div class="btn btn-square btn-primary mx-1" href="">1</div>
                                        <a class="btn btn-square btn-primary mx-1" href="">-</a>
                                        <a class="btn btn-square btn-primary mx-1 px-5" href="">
                                            <p class="mt-4">pesan</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><svg width="24"
                height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.1213 11.2332H16.8891C17.3088 11.2332 17.6386 10.8863 17.6386 10.4679C17.6386 10.0392 17.3088 9.70248 16.8891 9.70248H14.1213C13.7016 9.70248 13.3719 10.0392 13.3719 10.4679C13.3719 10.8863 13.7016 11.2332 14.1213 11.2332ZM20.1766 5.92762C20.7861 5.92762 21.1858 6.14192 21.5855 6.61136C21.9852 7.08079 22.0551 7.75433 21.9652 8.36561L21.0159 15.0602C20.8361 16.347 19.7569 17.2951 18.4879 17.2951H7.58639C6.25742 17.2951 5.15828 16.2552 5.04837 14.9081L4.12908 3.78353L2.62026 3.51819C2.22057 3.44676 1.94079 3.04876 2.01073 2.64056C2.08068 2.22317 2.47038 1.94661 2.88006 2.00886L5.2632 2.37522C5.60293 2.43747 5.85274 2.7222 5.88272 3.06917L6.07257 5.35511C6.10254 5.68269 6.36234 5.92762 6.68209 5.92762H20.1766ZM7.42631 18.908C6.58697 18.908 5.9075 19.6019 5.9075 20.4592C5.9075 21.3062 6.58697 22.0001 7.42631 22.0001C8.25567 22.0001 8.93514 21.3062 8.93514 20.4592C8.93514 19.6019 8.25567 18.908 7.42631 18.908ZM18.6676 18.908C17.8282 18.908 17.1487 19.6019 17.1487 20.4592C17.1487 21.3062 17.8282 22.0001 18.6676 22.0001C19.4969 22.0001 20.1764 21.3062 20.1764 20.4592C20.1764 19.6019 19.4969 18.908 18.6676 18.908Z"
                    fill="white" />
            </svg>
        </a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
