<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>UKM LABBAIK</title>
    <link rel="shortcut icon" href="{{ asset('/assets/images/logo_labbaik.png') }}">
    <!-- Favicons -->
    <link href="{{ asset('user/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/users/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/users/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/users/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/users/assets/css/style.css') }}" rel="stylesheet">
    <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <main id="main">
        <section id="team" class="team section-bg" style="padding-top:5rem;">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Departement Kominfo</h2>
                </div>
                <div class="row">
                    @foreach ($kominfo as $k)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $k->foto) }}" {{-- class="img-fluid" --}}
                                        alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $k->nama }}</h4>
                                    <span>{{ $k->departement }}</span>
                                    <p>{{ $k->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="section-title mt-5">
                    <h2>Departement Syiar</h2>
                </div>
                <div class="row">
                    @foreach ($syiar as $s)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $s->foto) }}" {{-- class="img-fluid" --}}
                                        alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $s->nama }}</h4>
                                    <span>{{ $s->departement }}</span>
                                    <p>{{ $s->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row justify-content-center">
                    @foreach ($syiarr as $ss)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $ss->foto) }}" {{-- class="img-fluid" --}}
                                        alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $ss->nama }}</h4>
                                    <span>{{ $ss->departement }}</span>
                                    <p>{{ $ss->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="section-title mt-5">
                    <h2>Departement Kemuslimahan</h2>
                </div>
                <div class="row">
                    @foreach ($kemuslimahan as $km)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $km->foto) }}"
                                        {{-- class="img-fluid" --}} alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $km->nama }}</h4>
                                    <span>{{ $km->departement }}</span>
                                    <p>{{ $km->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="section-title mt-5">
                    <h2>Departement PSDM</h2>
                </div>
                <div class="row">
                    @foreach ($psdm as $p)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $p->foto) }}" {{-- class="img-fluid" --}}
                                        alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $p->nama }}</h4>
                                    <span>{{ $p->departement }}</span>
                                    <p>{{ $p->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="section-title mt-5">
                    <h2>Departement KWU</h2>
                </div>
                <div class="row">
                    @foreach ($kwu as $kw)
                        <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member d-flex align-items-start">
                                <div class=""><img src="{{ url('storage/' . $kw->foto) }}"
                                        {{-- class="img-fluid" --}} alt=""
                                        style="height: 155px !important; object-fit: cover; width:110px; border-radius: 20px;">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $kw->nama }}</h4>
                                    <span>{{ $kw->departement }}</span>
                                    <p>{{ $kw->moto }}</p>
                                    <div class="social">
                                        <a href=""><i class="ri-twitter-fill"></i></a>
                                        <a href=""><i class="ri-facebook-fill"></i></a>
                                        <a href=""><i class="ri-instagram-fill"></i></a>
                                        <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Team Section -->



    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top section-bg" id="section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>UKM Labbaik</h3>
                        <p>
                            Jl. Mastrip <br>
                            POBOX 164 Sumbersari<br>
                            Jember<br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> labbaikpolije01@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Penting</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#home">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Visi Misi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#artikel">Artikel</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Kegiatan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Mengaji</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Belajar</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Sosialisasi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Wirausaha</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Silaturahim</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sosial Media</h4>
                        <p>Yuk sobat polije join dan subscribe media sosial labbaik</p>
                        <div class="social-links mt-3">
                            {{-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a> --}}
                            <a href="https://instagram.com/ukmlabbaik?igshid=MTUxeHM1bXg1dHhsdw==" target="_blank"
                                class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="https://youtu.be/Wk1Hg7Ehj_A?si=SsY4yU5wLn3plPqo" target="_blank"
                                class="youtube">
                                <i class="bx bxl-youtube"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>UKM Labbaik</span></strong>
            </div>
            <div class="credits">
                Development by <a href="https://www.linkedin.com/in/ahmad-hidayat-a6120b220/">Ahmad Hidayat</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ URL::asset('users/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ URL::asset('users/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ URL::asset('users/assets/js/main.js') }}"></script>

</body>

</html>
