<?php
    echo $mode;
    echo session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ujian : Electronic Bloomcard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('public/')?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

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
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo base_url()?>">E-bloomcard</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home')?>#services">Cara Ujian</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home')?>#about">Tentang</a>
                    </li>
                     <?php
                    
                    $data_login = $this->session->userdata('get_login_siswa');
                    //echo $data_login;
                    if(!empty($data_login)){
                        ?>
                    <li>
                        <a class="page-scroll active" href="<?php echo site_url('home/ujian')?>">Ujian</a>
                    </li>  
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home/logout')?>">Logout</a>
                    </li>
                <?php
                    }else{                  
                    ?>
                    
                    <li>
                        <a class="page-scroll" href="<?php echo site_url('home')?>#contact">Login</a>
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

   
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="padding-top: 50px">
                    <?php if($mode=='ujian'){ ?>
                    <h2 class="section-heading">Ujian</h2>
                    <h3 class="section-subheading text-muted">Selamat mengerjakan!</h3>
                    <?php }else{
                        $sess_id = session_id();
                       $anl = $this->db->get_where('nilai',array('session_id'=>$sess_id,'siswa_id'=>$this->session->userdata('siswa_id')))->row();
                        ?>
                        <h2 class="section-heading">Hasil</h2>
                        <h3 class="section-subheading text-muted">Terima kasih anda telah mengerjakan soal.</h3>
                        <h2 class="section-heading">
                            Nilai Anda : <?php  echo isset($anl) ? $anl->nilai : '0'?>
                        </h2>
                        <?php
                    }
                    ?>
                </div>
                <?php
                   
                ?>
                <div class="row">
                    <?php
                    $huruf = array('A','B','C','D','E');
                    $sess_id = session_id();
                                if($mode=='ujian'){ ?>
                    <div class="col-md-12"><h4 id="display_timer"></h4></div>
                    <?php }?>
                    <div class="col-md-4">

                        <div class="panel panel-primary">
                          <div class="panel-heading">Pilih Soal</div>
                          <div class="panel-body">
                          <?php
                          $i=0;
                          if(isset($data_soal) && count($data_soal)>0){
                            foreach ($data_soal as $soal) {
                                $i++;
                                $tipe = 'primary';
                                $data_pilih = '0';
                                if($i==1){
                                    $tipe='warning';
                                    $data_pilih = '1';
                                }
                                echo '<a href="javascript:void(0)" style="margin-right:5px;margin-bottom:5px;" class="pilih_soal btn btn-md btn-'.$tipe.'" data-pilih="'.$data_pilih.'" data-id="'.$soal->soal_id.'" >'.$i.'</a>';
                            }
                          }
                          ?>
                          </div>
                          
                        </div>
                    </div>
                    <div class="col-md-8">
                        <form id="form_soal" name="form_soal" method="post" action="<?php echo site_url('home/submit_ujian')?>">
                        <div class="panel panel-primary">
                          <div class="panel-heading">Soal</div>
                          <div class="panel-body">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <?php
                                if($mode=='ujian'){
                                    $huruf = array('A','B','C','D','E');
                                    $i=0;
                                    foreach($data_soal as $soal){
                                        $tipe = '';
                                        $i++;
                                        if($i!=1){
                                            $tipe='hidden';
                                        }
                                        $this->db->order_by('jawaban_kode','RANDOM');
                                        $detail = $this->db->get_where('jawaban_soal',array('soal_id'=>$soal->soal_id))->result_array();

                                        $jawaban = '<table>';
                                        $j=0;
                                        foreach($detail as $d){
                                            $jawaban.='<tr>
                                                <td><input style="font-weight:normal !important;" type="radio" name="jawab['.$d['soal_id'].']" value="'.$d['jawaban_id'].'"/></td>
                                                <td>&nbsp;'.$huruf[$j].'. &nbsp;</td>
                                                <td>'.$d['jawaban'].'</td>
                                            </tr>';
                                            $j++;
                                        }
                                        $jawaban .= '</table>';
                                        unset($detail);
                                        echo '<div id="data-soal-id-'.$soal->soal_id.'" class="soal '.$tipe.'">'.$soal->isi_soal.'
                                            <div style="display:block;">
                                            '.$jawaban.'
                                            </div>
                                        </div>';
                                        unset($jawaban);
                                    }
                                }else{
                                    $i=0;
                                    foreach($data_soal as $soal){
                                        $tipe = '';
                                        $i++;
                                        if($i!=1){
                                            $tipe='hidden';
                                        }
                                        $this->db->order_by('jawaban_kode','RANDOM');
                                        $detail = $this->db->get_where('jawaban_soal',array('soal_id'=>$soal->soal_id))->result_array();

                                        $jawaban = '<table>';
                                        $j=0;
                                         $a = $this->db->get_where('jawaban_siswa',array('session_id'=>$sess_id,'siswa_id'=>$this->session->userdata('siswa_id'),'soal_id'=>$soal->soal_id));
                                        $b_jwab = NULL;
                                        if($a->num_rows()>0){
                                            $b_jwab = $a->row();
                                        }
                                        foreach($detail as $d){
                                            if($b_jwab!=NULL){
                                                if($d['jawaban_id']==$b_jwab->jawaban_id){
                                                    $jawab = '<b>'.$d['jawaban'].'</b>';
                                                }else{
                                                    $jawab = $d['jawaban'];
                                                }
                                            }else{
                                                $jawab = $d['jawaban'];
                                            }
                                            $bnr = '';
                                            if($d['benar']=='1'){
                                                $bnr='<i class="fa fa-check"></i>';
                                            }
                                            $jawaban.='<tr>
                                                <td>'.$bnr.'</td>
                                                <td>&nbsp;'.$huruf[$j].'. &nbsp;</td>
                                                <td>'.$jawab.'</td>
                                            </tr>';
                                            $j++;
                                        }
                                        unset($b_jwab);
                                        $jawaban .= '</table>';
                                        unset($detail);
                                        echo '<div id="data-soal-id-'.$soal->soal_id.'" class="soal '.$tipe.'">'.$soal->isi_soal.'
                                            <div style="display:block;">
                                            '.$jawaban.'
                                            </div>
                                        </div>';
                                        unset($jawaban);
                                    }
                                }
                                    ?>
                                </div>
                            
                            </div>
                                    
                          </div>
                          
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#submitModal" data-toggle="modal" class="btn btn-xl">Kirim Jawaban</a>
                                <!-- Portfolio Modal 6 -->
                                <div class="portfolio-modal modal fade" id="submitModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="close-modal" data-dismiss="modal">
                                                <div class="lr">
                                                    <div class="rl">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-8 col-lg-offset-2">
                                                        <div class="modal-body">
                                                            <!-- Project Details Go Here -->
                                                            <h2>Peringatan!</h2>
                                                            <p class="item-intro text-muted">Apakah anda yakin sudah mengerjakan semua soal dengan benar?</p>
                                                            
                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>    
                </div>
            </div>     
        </div>
    </section>


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
    <script src="<?php echo base_url('public/')?>js/ujian.js"></script>
    

    <!-- Theme JavaScript -->
    
    <?php
    if(!empty($this->session->flashdata('alert'))){
        ?>
        <script type="text/javascript">
            setInterval(function(){

            },5000);
            alert('<?php echo $this->session->flashdata('alert');?>');</script>
        <?php
    }
    ?>
</body>

</html>
