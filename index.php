<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rumah Tadabbur Qur'an Kuningan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="dashboard_admin/images/logo/logo3.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
                <small><i class="fa fa-map-marker-alt me-2"></i>Jl.Cendrawasih, Kuningan, Jawa Barat</small>
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>rtqkuningan</small>
            </div>
            <div class="col-lg-6 px-5 text-end">
                <small>Ikuti kami:</small>
                <a class="text-white-50 ms-3" href="https://www.instagram.com/rtqkuningan/"><i class="fab fa-instagram"></i></a>
                <a class="text-white-50 ms-3" href="pages_login/login.php"><i class="fa fa-envelope"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.php" class="navbar-brand ms-4 ms-lg-0 d-flex">
                <img src="dashboard_admin/images/logo/logortq1.png" style="height :45px;" alt="">
                <p class="judul">Rumah Tadabbur Qur'an <br> Ciporang Kuningan Jawa Barat</p>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">Tentang</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                        <div class="dropdown-menu m-0">
                            <a href="programs.php" class="dropdown-item">Kegiatan</a>
                            <a href="team.php" class="dropdown-item">Team</a>
                            <a href="testimoni.php" class="dropdown-item">Testimoni</a>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="https://api.whatsapp.com/send?phone=6282312027262&text=Halo%20boleh%20nanya%20tentang%20RTQ%20kuningan">
                        Hubungi Kami
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/hero2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Membangun Masyarakat Qur'ani</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Bersama Membentuk Pribadi-Pribadi berkarakter Al-Quran  </p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="#tentang-rtq">
                                        Tentang RTQ
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/hero1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Membangun Peradaban Dengan Al-Qur'an</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Bersama Menebarkan Rahmat Terbesar Allah Yaitu Al-Qur'an</p>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="#tentang-rtq">
                                        Tentang RTQ
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div id="tentang-rtq" class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/tentang1.jpeg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/tentang2.jpeg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Tentang RTQ</div>
                        <h1 class="display-6 mb-5">APA ITU RTQ?</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Rumah Tadabbur Qur'an (RTQ) adalah lembaga resmi dibawah payung AQL Islamic Center yang dipimpin oleh KH.Bachtiar Nasir yang bergerak membangun komunitas/masyarakat islami berbasis pendidikan dan pengajaran al-Qur'an dengan berbagai macam bentuknya, serta berjuang mengamalkannya  dalam berbagai bentuk kegiatan untuk membangun masyarakat islami dan membangun peradaban Qur'an.  </p>
                            
                        </div>
                        <!-- <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> -->
                        <a class="btn btn-primary py-2 px-3 me-3" href="https://www.instagram.com/rtqkuningan/">
                            Media Sosial
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="https://api.whatsapp.com/send?phone=6282312027262&text=Halo%20boleh%20nanya%20tentang%20RTQ%20kuningan">
                            Hubungi Kami
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Program</div>
                <h1 class="display-6 mb-5">Program Dan Kegiatan</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <?php
                    include("dashboard_admin/config.php");
                    $sql = "SELECT * FROM kegiatan";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($query);
                    $no = 1;

                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)){
                ?>


                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-3 bg-white" src="dashboard_admin/images/kegiatan/<?php echo $data['foto'] ?>" alt=""> 
                            <h4 class="mb-2"><?php echo $data['nama_kegiatan']; ?></h4>
                            <p class="mb-4">
                                <?php 
                                    $tampil_sebagian = substr($data['keterangan'], 0, 70);
                                    echo $tampil_sebagian, "..."; 
                                ?>
                            </p>
                            <a class="btn btn-outline-primary px-3" href= "kegiatan_rincian.php?id=<?php echo $data['id']; ?>">
                                Baca Selengkapnya
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Team</div>
                <h1 class="display-6 mb-5">Lembaga Dan Yayasan</h1>
            </div>
            <div class="row g-4">

                <?php
                    $sql = "SELECT * FROM anggota";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($query);
                    $no = 1;

                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)){
                ?>


                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item  position-relative rounded overflow-hidden" style="box-shadow: 0 6px 16px rgba(0, 0, 0, .1);">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="dashboard_admin/images/anggota/<?php echo $data['foto'] ?>" alt="" style="object-fit: cover; width: 100%;height: 350px;"> 
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5><?php echo $data['nama']; ?></h5>
                            <p class="text-primary"><?php echo $data['jabatan']; ?></p>
                            <div class="team-social text-center">
                                <a class="btn btn-square" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Testimoni</div>
                <h1 class="display-6 mb-5">Apa Kata Mereka</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"> 
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimoni11.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>RTQ Kuningan, Meski nampaknya sederhana namun SDM pengajarnya begitu luar biasa mampu hidup apa adanya dan bisa membantu masyarakat setempat, sehingga banyak yang mendapatkan efek positif karenanya.</p>
                        <h5 class="mb-1">Laode Muhammad Al-Fatih</h5>
                        <span class="fst-italic">Mahasiswa</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimoni2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Setiap hal yang besar diawali oleh sebuah langkah yang kecil.</p>
                        <h5 class="mb-1">Farhan Alfaraby</h5>
                        <span class="fst-italic">Mahasiswa</span>
                    </div>
                </div>
                <div class="testimonial-item text-center"> 
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimoni11.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>RTQ Kuningan, Meski nampaknya sederhana namun SDM pengajarnya begitu luar biasa mampu hidup apa adanya dan bisa membantu masyarakat setempat, sehingga banyak yang mendapatkan efek positif karenanya</p>
                        <h5 class="mb-1">Laode Muhammad Al-Fatih</h5>
                        <span class="fst-italic">Mahasiswa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">

                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Alamat</h5>
                    <p>Komplek Puri Asri 1, Jalan Cendrawasih blok A no 17,  RT.41 RW 07, kel. Ciporang kec. Kuningan, kab. Kuningan Jawa Barat, kode pos 45514</p>
                </div>
                <div class="col-lg-4 col-md-4" style="text-align: center;">
                    <img class="navbar-logo" src="img/logo2.png" alt="" style="width: 150px;">
                    <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
                        <h1 class="fw-bold text-green1 m-0">RTQ KUNINGAN<span class="text-white"></span></h1>
                        <p class="fw-bold navbar-subtitle" style="font-size: 1rem; margin-top: -13px; margin-left: 3px; margin-bottom: 0; color: #aeaeae;">RTQ KUNINGAN</p>
                    </a>
                    <!-- <h1 class="fw-bold text-green1 mb-4">Chari<span class="text-white">Team</span></h1> -->
                    <!-- <p style="text-align: justify;">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p> -->
                    <div class="d-flex pt-2" style="justify-content: center !important;">
                        <!-- <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a> -->
                        <a class="btn btn-square me-1" href="https://www.instagram.com/rtqkuningan/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-0" href="https://www.instagram.com/rtqkuningan/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5 class="text-light mb-4">Kontak</h5>
                    <p><a class="btn btn-link-2" href="https://goo.gl/maps/hbYT8vFwyuYfa6RQA"><i class="fa fa-map-marker-alt me-3"></i>Jl.Cendrawasih, kuningan, Jawa Barat</a></p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62 813-8865-1821</p>
                    <p><i class="fa fa-envelope me-3"></i>rtqkuningan@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0"> Copyright
                        &copy; 2023, Created with <i class="fa fa-heart"></i> by a_by
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <a href="#">Rumah Tadabbur Qur'an Kuningan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>