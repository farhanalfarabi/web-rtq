<?php 
    include("config.php");

    $id = $_GET['id'];
    $sql = "SELECT * FROM kegiatan WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    $load_driver = mysqli_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Admin Rumah Tadabbur Qur'an Kuningan</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- site icon -->
        <link rel="icon" href="images/fevicon.png" type="image/png" />
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- site css -->
        <link rel="stylesheet" href="style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!-- color css -->
        <link rel="stylesheet" href="css/colors.css" />
        <!-- select bootstrap -->
        <link rel="stylesheet" href="css/bootstrap-select.css" />
        <!-- scrollbar css -->
        <link rel="stylesheet" href="css/perfect-scrollbar.css" />
        <!-- custom css -->
        <link rel="stylesheet" href="css/custom.css" />
        <!-- calendar file css -->
        <link rel="stylesheet" href="js/semantic.min.css" />
        <!-- fancy box js -->
        <link rel="stylesheet" href="css/jquery.fancybox.css" />
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>
    <body class="inner_page tables_page">
        <div class="full_container">
            <div class="inner_container">
                <!-- Sidebar  -->
                <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        <div class="logo_section">
                        <a href="#"><img class="logo_icon img-responsive" src="images/logo/logortq.png" alt="#" /></a>
                        </div>
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/logo/logo4.png" alt="#" /></div>
                            <div class="user_info">
                            <h6>Santri Wakaf</h6>
                            <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>General</h4>
                    <ul class="list-unstyled components">
                    <li><a href="index.php"><i class="fa fa-table purple_color2"></i> <span>Anggota</span></a></li>
                    <li><a href="kegiatan.php"><i class="fa fa-table purple_color2"></i> <span>Kegiatan</span></a></li>
                    </ul>
                </div>
                </nav>
                <!-- end sidebar -->
                <!-- right content -->
                <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                            <a href="#"><img class="img-responsive" src="images/logo/logo2.png" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                            <div class="icon_info">
                                <ul>
                                    <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                    <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                    <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                </ul>
                                <ul class="user_profile_dd">
                                    <li>
                                    <a href="../pages_login/login.php"><img class="img-responsive rounded-circle" src="images/logo/logo5.jpg" alt="#" /><span class="name_user">Log out</span></a>
                                    </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                            <div class="page_title">
                            <h2>Admin Update Kegiatan Rumah Tadabbur Qur'an Kuningan</h2>
                            </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <!-- table section -->
                            <div class="col-md-12">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Ubah Data Kegiatan</h2>
                                    </div>
                                </div>
                                <div class="table_section padding_infor_info">
                                    <form action="kegiatan_update_act.php?id=<?php echo $load_driver['id']; ?>" method="POST" enctype="multipart/form-data">
                                        <div class="input-group mb-3">
                                            <input type="text" name="nama_kegiatan" value="<?php echo $load_driver['nama_kegiatan']?>" class="form-control" placeholder="Nama_kegiatan" aria-label="Nama" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <p class="label3" style="padding-top: 9px;padding-bottom: 12px;">Keterangan :</p>
                                            <textarea class="ckeditor" id="ckedtor" type="text" name="keterangan" value="<?php echo $load_driver['keterangan']?>"><?php echo $load_driver['keterangan']?></textarea>
                                            <script>
                                                    CKEDITOR.replace( 'ckedtor' );
                                            </script>
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="file" name="foto" class="form-control" placeholder="Foto" aria-label="Foto" aria-describedby="basic-addon1" required>
                                        </div>
                                        <div class="input-group mb-3">
                                            <button type="submit" class="btn btn-primary mb-3">Kirim</button>                                    
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>                      
                    </div>                      
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                        <p>Copyright © 2023 Designed with <i class="fa fa-heart"> </i> by a_by.</p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
                </div>
            </div>
            <!-- model popup -->
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Modal Heading</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
                </div>
            </div>
            <!-- end model popup -->
        </div>
        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- wow animation -->
        <script src="js/animate.js"></script>
        <!-- select country -->
        <script src="js/bootstrap-select.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.js"></script> 
        <!-- chart js -->
        <script src="js/Chart.min.js"></script>
        <script src="js/Chart.bundle.min.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/analyser.js"></script>
        <!-- nice scrollbar -->
        <script src="js/perfect-scrollbar.min.js"></script>
        <script>
            var ps = new PerfectScrollbar('#sidebar');
        </script>
        <!-- fancy box js -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
        <!-- calendar file css -->    
        <script src="js/semantic.min.js"></script>
    </body>
    </html>