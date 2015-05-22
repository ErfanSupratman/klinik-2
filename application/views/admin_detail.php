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
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?php echo base_url('assets');?>/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="<?php echo base_url('assets');?>/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets');?>/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets');?>/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('assets');?>/plugins/jquery-datatable/media/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets');?>/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url('pages');?>/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?php echo base_url('pages');?>/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
          window.onload = function(){
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url('pages');?>/css/windows.chrome.fix.css" />'
    }
    </script>

    <style>
        .datepicker{z-index:+10000 !important}
    </style>

  </head>
  <body class="fixed-header">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url('assets');?>/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url('assets');?>/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="<?php echo base_url('assets');?>/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="<?php echo base_url('assets');?>/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
        
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="<?php echo base_url('assets');?>/img/logo_white.png" alt="logo" class="brand" data-src="<?php echo base_url('assets');?>/img/logo_white.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
        
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="<?php echo site_url();?>/admin" class="detailed">
              <span class="title">PASIEN</span>
              <span class="details">Data Lengkap Pasien</span>
            </a>
            <span class="icon-thumbnail bg-success"><i class="fa fa-wheelchair"></i></span>
          </li>

          <li class="">
            <a href="<?php echo site_url();?>/admin/rekam" class="detailed">
              <span class="title">REK. MEDIS</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-stethoscope"></i></span>
          </li>

          <li class="">
            <a href="<?php echo site_url();?>/admin/treatment" class="detailed">
            <span class="title">TREATMENT</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-user"></i></span>
          </li>

          <li class="">
            <a href="<?php echo site_url();?>/admin/obat" class="detailed">
            <span class="title">OBAT</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-medkit"></i></span>
          </li>

          <!-- <li class="">
            <a href="<?php //echo site_url();?>/admin/user" class="detailed">
            <span class="title">USER</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-users"></i></span>
          </li> -->

        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <!-- LEFT SIDE -->
        <div class="pull-left full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="sm-action-bar">
            <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
              <span class="icon-set menu-hambuger"></span>
            </a>
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- RIGHT SIDE -->
        <div class="pull-right full-height visible-sm visible-xs">
          <!-- START ACTION BAR -->
          <div class="sm-action-bar">
          </div>
          <!-- END ACTION BAR -->
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table">
          <div class="header-inner">
            <div class="brand inline">
              <img src="<?php echo base_url('assets');?>/img/logo.png" alt="logo" data-src="<?php echo base_url('assets');?>/img/logo.png" data-src-retina="<?php echo base_url('assets');?>/img/logo_2x.png" width="78" height="22">
            </div>
          </div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold"><?php echo $this->session->userdata('username');?></span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url('assets');?>/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url('assets');?>/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <!--<li><a href="#"><i class="pg-settings_small"></i> Akun</a>
                </li>-->
                <li><a href="#"><i class="pg-outdent"></i> Ubah Password</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="<?php echo site_url();?>/login/do_logout" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- MODAL STICK UP  -->
        <div class="modal fade stick-up" id="reg_pasien" tabindex="-1" role="dialog" aria-labelledby="reg_pasien" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header clearfix ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <h4 class="p-b-5"><span class="semi-bold">Update</span> Pasien</h4>
              </div>
            <?php foreach($detailpasien as $detpas)?>
            <form role="form" action="<?php echo site_url();?>/admin/editpass" method="POST" name="regpasien">
            <input type="text" name="did" value="<?php echo $detpas['IDPASIEN'];?>" hidden>
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>nama lengkap</label>
                        <input name="namalengkap" type="text" class="form-control" value="<?php echo $detpas['NAMAPASIEN'];?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label class="col-sm-9 control-label">Jenis Kelamin</label>
                        <div class="col-sm-3">
                        <div class="radio radio-primary">
                          <input type="radio" value="L" name="gender" id="boy">
                            <label for="boy">Laki - laki</label>
                            <input type="radio" value="P" name="gender" id="girl">
                            <label for="girl">Perempuan</label>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Alamat</label>
                        <input value="<?php echo $detpas['ALAMATPASIEN'];?>" class="form-control" id="alamatpasien" name="alamat" required>
                      </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Kota</label>
                        <input id="kotapasien" name="kota" type="text" class="form-control" value="<?php echo $detpas['KOTAPASIEN'] ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Propinsi</label>
                        <select name="prop" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                          <option value="-"> -- Pilih Propinsi -- </option>
                          <option value="Aceh">Aceh</option>
                          <option value="Bali">Bali</option>
                          <option value="Banten">Banten</option>
                          <option value="Bengkulu">Bengkulu</option>
                          <option value="Gorontalo">Gorontalo</option>
                          <option value="Jakarta">Jakarta</option>
                          <option value="Jambi">Jambi</option>
                          <option value="Jawa Barat">Jawa Barat</option>
                          <option value="Jawa Tengah">Jawa Tengah</option>
                          <option value="Jawa Timur">Jawa Timur</option>
                          <option value="Kalimantan Barat">Kalimantan Barat</option>
                          <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                          <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                          <option value="Kalimantan Utara">Kalimantan Utara</option>
                          <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                          <option value="Kepulauan Riau">Kepulauan Riau</option>
                          <option value="Lampung">Lampung</option>
                          <option value="Maluku">Maluku</option>
                          <option value="Maluku Utara">Maluku Utara</option>
                          <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                          <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                          <option value="Papua">Papua</option>
                          <option value="Papua Barat">Papua Barat</option>
                          <option value="Riau">Riau</option>
                          <option value="Sulawesi Barat">Sulawesi Barat</option>
                          <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                          <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                          <option value="Sulawesi Utara">Sulawesi Utara</option>
                          <option value="Sumatera Barat">Sumatera Barat</option>
                          <option value="Sumatera Selatan">Sumatera Selatan</option>
                          <option value="Sumatera Utara">Sumatera Utara</option>
                          <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group form-group-default">
                        <label>Tempat Lahir</label>
                        <input name="tlahir" type="text" class="form-control" value="<?php echo $detpas['TEMPATLAHIR'];?>">
                      </div>
                    </div>
                  
                    <div class="form-group form-group-default input-group col-sm-6">
                      <label>Tanggal Lahir</label>
                      <input name="tgllahir" type="text" class="form-control datepicker" value="<?php echo $detpas['TANGGALLAHIR'];?>" id="datepicker-component2" required>
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    </div>
                  </div>

                  <div class="row">
                  <div class="col-sm-6">
                      <div class="form-group form-group-default input-group">
                        <label>No Handphone</label>
                        <input name="hp" type="text" class="form-control" value="<?php echo $detpas['HPPASIEN'];?>">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      </div>
                      </div>
                  
                    <div class="form-group form-group-default input-group col-sm-6">
                      <label>Pin BBM</label>
                      <input name="bbm" type="text" class="form-control" value="<?php echo $detpas['BBMPASIEN'];?>">
                      <span class="input-group-addon"><i class="fa fa-comment-o"></i></span>
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button name="regpasien" type="submit" class="btn btn-primary  btn-cons">Update</button>
                <button type="button" class="btn btn-cons" data-dismiss="modal">Batal</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- END MODAL STICK UP  -->
        
        <!-- START PAGE CONTENT -->
        <div class="content">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  <li>
                    <p>Administrator</p>
                  </li>
                  <li><a href="#" class="active">Daftar Pasien</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="row">

                  <div class="col-lg-6 col-md-6 ">

                  <div class="panel panel-default hover-stroke">
                  <div class="panel-heading">
                        <div class="panel-title">Data Pasien
                        </div>
                  </div>
                  <div class="panel-body">
                  <?php foreach($detailpasien as $detpas)?>
                  <h3><?php echo $detpas['NAMAPASIEN'];?> | <button class="btn btn-danger" id="registpasien"><span><i class="fa fa-pencil"></i></span></button></h3>
                    <div class="container-sm-height">
                      <div class="row row-sm-height">
                        <div class="col-sm-4 col-sm-height padding-20 col-top">
                          <p class="font-montserrat bold">TANGGAL LAHIR</p>
                        </div>
                        <div class="col-sm-8 col-sm-height col-middle bg-master-lighter">
                        <p><?php echo $detpas['TEMPATLAHIR'];?>, <?php echo $detpas['TANGGALLAHIR'];?></p>
                        </div>
                      </div>

                      <div class="row row-sm-height">
                        <div class="col-sm-4 col-sm-height padding-20 col-top">
                          <p class="font-montserrat bold">JENIS KELAMIN</p>
                        </div>
                        <div class="col-sm-8 col-sm-height col-middle bg-master-lighter">
                        <p><?php echo $detpas['JENISKELAMIN'];?></p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                    <!-- START PANEL -->
                    
                    <!-- END PANEL -->
                  </div>

                  <div class="col-lg-6 col-md-6 ">

                  <div class="panel panel-default hover-stroke">
                  <div class="panel-heading">
                        <div class="panel-title">Kontak
                        </div>
                  </div>
                  <div class="panel-body">
                  <?php foreach($detailpasien as $detpas)?>
                    <div class="container-sm-height">
                      <div class="row row-sm-height">
                        <div class="col-sm-4 col-sm-height padding-20 col-top">
                          <p class="font-montserrat bold">TANGGAL LAHIR</p>
                        </div>
                        <div class="col-sm-8 col-sm-height col-middle bg-master-lighter">
                        <p><?php echo $detpas['TEMPATLAHIR'];?>, <?php echo $detpas['TANGGALLAHIR'];?></p>
                        </div>
                      </div>

                      <div class="row row-sm-height">
                        <div class="col-sm-4 col-sm-height padding-20 col-top">
                          <p class="font-montserrat bold">ALAMAT</p>
                        </div>
                        <div class="col-sm-8 col-sm-height col-middle bg-master-lighter">
                        <p><?php echo $detpas['ALAMATPASIEN'];?> - <?php echo $detpas['KOTAPASIEN'];?>, <?php echo $detpas['PROPINSIPASIEN'];?></p>
                        </div>
                        </div>

                      <div class="row row-sm-height">
                        <div class="col-sm-4 col-sm-height padding-20 col-top">
                          <p class="font-montserrat bold">TELPON / BBM</p>
                        </div>
                        <div class="col-sm-8 col-sm-height col-middle bg-master-lighter">
                        <p><?php echo $detpas['HPPASIEN'];?> / <b><?php echo $detpas['BBMPASIEN'];?></b></p>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                    <!-- START PANEL -->
                    
                    <!-- END PANEL -->
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg bg-white">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading">
                <div class="panel-title">Rekam Medis
                </div>
                <div class="pull-right">
                  <div class="col-xs-6">
                    <a href="<?php echo site_url()?>/admin/loadformrekam/<?php echo $detpas['IDPASIEN'];?>" class="btn btn-primary btn-cons" id="">Tambah</a>
                  </div>
                </div>
                <div class="pull-right">
                  <div class="col-xs-12">
                    <input type="text" id="search-table" class="form-control pull-right" placeholder="Cari">
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <table class="table table-hover demo-table-search" id="tableWithSearch">
                  <thead>
                    <tr>
                        <th class="center" style="width:2%">No</th>
                        <th class="center" style="width:20%">Tanggal</th>
                        <th class="center" style="width:35%">Treatment</th>
                        <th class="center" style="width:35%">Obat</th>
                        <!-- <th class="center" style="width:20%">Action</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php echo $detailrekam;?>
                    <!-- <tr class="gradeA">
                      <td class="center"><?php //echo $i; ?></td>
                      <td class="center"><?php //echo $listpas['TANGGAL'] ?></td>
                      <td class="center"><?php //echo $listpas['JENISKELAMIN'] ?></td>
                        <td class="center">
                        <div class="btn-group btn-group-xs">
                        <a href="" class="btn btn-complete"><i class="fa fa-search"></i></a>
                        <a class="btn btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="<?php //echo site_url().'/admin/deletepas/'.$listpas['IDPASIEN'];?>" class="btn btn-danger" onClick="return delconfirm();"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr> -->
                    
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END PANEL -->
          </div>
          <!-- END CONTAINER FLUID -->
          
        </div>
        <!-- END PAGE CONTENT -->

        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright © 2015 </span>
              <span class="font-montserrat">Derma Clinic</span>.
              <span class="hint-text">All rights reserved. </span> 
            </p>

            <p class="small no-margin pull-right sm-pull-reset">
              <a href="#">Powered by JalaBit</a> <span class="hint-text">&amp; Brother ®</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
      

      <!--SCRIPT-->
      <script>
      function delconfirm(){
        job=confirm("Apakah anda yakin ingin menghapus data ini?");
        if(job!=true){
          return false;
        }
      }
      </script>
      <!--SCRIPT-->
    
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
    <script src="<?php echo base_url('assets');?>/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/classie/classie.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/datatables-responsive/js/datatables.responsive.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/datatables-responsive/js/lodash.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?php echo base_url('assets');?>/js/form_elements.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/js/scripts.js" type="text/javascript"></script>
    <script src="<?php echo base_url('pages');?>/js/pages.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?php echo base_url('assets');?>/js/datatables.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets');?>/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>