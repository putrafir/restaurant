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
        <div class="container-xxl position-relative p-0 ">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <!-- Order Button -->
                    <a href="/kasir" class="btn btn-primary py-2 px-3 mx-3">
                        <i class="fa fa-list-alt"></i>
                    </a>

                    <!-- Cart Button -->
                    <a href="/" class="btn btn-primary py-2 px-3">
                        <i class="fa fa-cart-plus"></i>
                    </a>
                </div>

            </nav>

            <!-- Menu Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">Order History</h5>
                        <h1 class="mb-5">Restoran Putra Yummy</h1>
                    </div>

                    <div class="d-flex justify-content-end my-4">
                        <button class="btn mx-2" style="background-color: #FFA500; color: black; font-size: 10px; padding: 1px 5px; border: none;">6 pelanggan hari ini</button>
                        <button class="btn mx-2" style="background-color: #FFA500; color: black; font-size: 10px; padding: 1px 5px; border: none;">32 item terjual hari ini</button>
                    </div>

                    <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

                        <!-- card pesanan -->
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/about-1.jpg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>001</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 12.00</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/about-2.jpg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>002</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 12.15</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/about-3.jpg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>003</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 12.45</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/about-4.jpg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>004</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 12.57</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/bg-hero.jpg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>005</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 13.01</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px; text-align: center;">
                                            <img src="{{asset('img/makanan 1.jpeg')}}" style="height: 100px; width: 100%; object-fit: cover;" alt="foto">
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <div>
                                                <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                    <span>006</span>
                                                </h5>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <small class="fst-italic">Pesanan ini dibuat pada pukul 13.35</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td style="text-align: center; vertical-align: middle; width: 100px;">
                                            <button class="btn btn-warning btn-sm">Detail</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Back to Top -->
    <div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script>
        // Tambahkan efek hover menggunakan JavaScript untuk membuat card timbul
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseover', function() {
                this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)'; // Efek bayangan
                this.style.transform = 'translateY(-2px)'; // Efek timbul
                this.style.transition = 'all 0.2s ease-in-out'; // Transisi yang halus
            });

            row.addEventListener('mouseout', function() {
                this.style.boxShadow = 'none'; // Hapus efek bayangan
                this.style.transform = 'translateY(0)'; // Kembali ke posisi semula
            });
        });
    </script>

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
