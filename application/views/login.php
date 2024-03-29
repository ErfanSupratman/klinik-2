<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title><?php echo $page; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="<?php echo base_url('pages');?>/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('pages');?>/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('pages');?>/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('pages');?>/ico/152.png">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('pages');?>/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url('assets');?>/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets');?>/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets');?>/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('pages');?>/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url('pages');?>/css/pages.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url('pages');?>/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
    
  <body class="fixed-header   ">
    <!-- START PAGE-CONTAINER -->
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?php echo base_url('assets');?>/img/demo/cantik.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					Medical Beauty Skin and Body Treatment</h2>
          <p class="small">
            Derma Esthetic Centre (DEC) adalah klinik kecantikan yang berdiri sejak tahun 2006 yang berbasis medis aesthetic dengan menggunakan bahan-bahan alami (herbal) dipadukan dengan metode perawatan modern sehingga menjadikan kulit sehat, bersih dan cerah alami.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="<?php echo base_url('assets');?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets');?>/img/logo.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_2x.png" width="78" height="22">
          <p class="p-t-35">Masuk dengan akun anda</p>
          <!-- START Login Form -->
            <?php 
                $data = array('id' => 'form-login', 'class' => 'p-t-15', 'role' => 'form');
                echo form_open('login/do_login', $data);
            ?>
          <!--<form id="form-login" class="p-t-15" role="form" action="index.html">-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="User Name" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" class="form-control" value="<?php echo set_value('password'); ?>" name="password" placeholder="Credentials" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding">
              </div>
              <div class="col-md-6 text-right">
              </div>
            </div>
            <!-- END Form Control-->
            <button class="btn btn-primary btn-cons m-t-10" type="submit">Masuk</button>
          </form>
          <!--END Login Form-->
          <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
              <div class="col-sm-3 col-md-2 no-padding">
                <!--<img alt="" class="m-t-5" data-src="<?php // echo base_url('assets');?>/img/demo/pages_icon.png" data-src-retina="assets/img/demo/pages_icon_2x.png" height="60" src="<?php // echo base_url('assets');?>/img/demo/pages_icon.png" width="60"> -->
              </div>
              <div class="col-sm-9 no-padding m-t-10">
                <p><small> Alamat : Jl. Margorejo Indah 115A, Surabaya<br><a href="#" class="text-info"> Telp : </a> or <a href="#" class="text-info"> 031 8433950 / 031 8416042</a></small>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url('assets');?>/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets');?>/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets');?>s/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url('assets');?>/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="p<?php echo base_url('pages');?>/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url('assets');?>/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>