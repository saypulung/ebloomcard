<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Electronic Bloomcard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/')?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/')?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="<?php echo base_url('public/')?>css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">E-bloomcard</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Cara Ujian</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                     <?php
                    
                    $data_login = $this->session->userdata('get_login_siswa');
                    //echo $data_login;
                    if(!empty($data_login)){
                        ?>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home/ujian')?>">Ujian</a>
                    </li>  
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home/logout')?>">Logout</a>
                    </li>
                <?php
                    }else{                  
                    ?>
                    
                    <li>
                        <a class="page-scroll" href="#contact">Login</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
               
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cara Ujian</h2>
                    <h3 class="section-subheading text-muted">4 langkah mengikuti ujian</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-sign-in fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Login</h4>
                    <p class="text-muted">Login terlebih dahulu sesuai dengan kode dan password yang telah diberikan oleh pengawas.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Tes</h4>
                    <p class="text-muted">Ikuti tes yang ditampilkan pada halaman.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Submit</h4>
                    <p class="text-muted">Kirim jawaban apabila sudah yakin bahwa soal-soal telah dikerjakan seluruhnya.</p>
                </div>
                <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Hasil</h4>
                    <p class="text-muted">Terakhir, akan ditampilkan hasil dari jawaban yang telah dikerjakan.</p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- About Section -->
    <section id="about" style="border-top: 2px dotted #eee">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Deskripsi singkat tentang e-bloomcard.</h3>
                </div>
            </div>
            <div class="row">
                <!--div class="col-lg-12 text-center">
                    Bloomcard merupakan teknik ujian dengan memberikan kartu kepada setiap audien yang mengikuti ujian. Kartu tersebut berisikan soal-soal yang nantinya akan diberikan penilaian berdasarkan kesesuaian jawaban pada soal. Kini bloomcard telah menjadi elektronik dengan berbasis website yang dinamai electronic bloomcard (e-bloomcard).
                </div-->
                <div class="col-lg-12 text-center">
                    Elektronic Bloomcard adalah alat evaluasi belajar biologi digital, yang butir soalnya mengacu pada taksonomi bloom ranah kognitif berbasis berpikir kritis dan analisis.
                </div>
            </div>
        </div>
    </section>

    <?php
        $data_login = $this->session->userdata('get_login_siswa');
        //echo $data_login;
        if(!empty($data_login)){
            ?>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    
                    <h3 class="section-subheading text-muted">Anda sedang login, untuk memulai ujian silakan klik tombol UJIAN berikut.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="<?php echo site_url('home/ujian')?>" class="btn btn-primary btn-xl">UJIAN</a>
                </div>
            </div>
        </div>
    </section>
            <?php
        }else{


    ?>
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Login</h2>
                    <h3 class="section-subheading text-muted">Masukkan kode dan password pada kolom dibawah.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="<?php echo site_url('home/do_login')?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group text-center">
                                    <input type="text" class="form-control" placeholder="Kode" name="kode" required data-validation-required-message="Masukkan kode terlebih dahulu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required data-validation-required-message="Masukkan password terlebih dahulu.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12">
                                <div id="success"></div>
                                <button name="login" type="submit" class="btn btn-xl">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php }?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Electronic Bloomcard</span>
                </div>
                
            </div>
        </div>
    </footer>

    
    <!-- Portfolio Modal 6 -->
    

    <!-- jQuery -->
    <script src="<?php echo base_url('public/')?>vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('public/')?>vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url('public/')?>js/jqBootstrapValidation.js"></script>
    

    <!-- Theme JavaScript -->
    <script src="<?php echo base_url('public/')?>js/agency.min.js"></script>
    <?php
    if(!empty($this->session->flashdata('alert'))){
        ?>
        <script type="text/javascript">
            alert('<?php echo $this->session->flashdata('alert');?>');</script>
        <?php
    }
    ?>
</body>

</html>
