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
        .datepicker{z-index:10000 !important}
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
            </a>
            <span class="icon-thumbnail "><i class="fa fa-wheelchair"></i></span>
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
            <span class="details">Data Treatment</span>
            </a>
            <span class="icon-thumbnail bg-success"><i class="fa fa-user"></i></span>
          </li>

          <li class="">
            <a href="<?php echo site_url();?>/admin/obat" class="detailed">
            <span class="title">OBAT</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-medkit"></i></span>
          </li>

          <!--<li class="">
            <a href="<?php //echo site_url();?>/admin/user" class="detailed">
            <span class="title">USER</span>
            </a>
            <span class="icon-thumbnail "><i class="fa fa-users"></i></span>
          </li>-->

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
                <li><a href="#"><i class="pg-settings_small"></i> Akun</a>
                </li>
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
      <!-- END HEADER -->0
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper">
        <!-- MODAL STICK UP  -->
        <div class="modal fade stick-up" id="reg_pasien" tabindex="-1" role="dialog" aria-labelledby="reg_pasien" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header clearfix ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <h4 class="p-b-5"><span class="semi-bold">Tambah</span> Treatment</h4>
              </div>
            <form role="form" action="<?php echo site_url();?>/admin/tambahtreatment" method="POST" name="regpasien">
              <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Nama Treatment</label>
                        <input name="namatreatment" type="text" class="form-control" placeholder="Nama Treatment">
                      </div>
                    </div>
                  </div>
                  
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group form-group-default">
                        <label>Kategori Treatment</label>
                        <select name="kategoritreatment" class="cs-select cs-skin-slide" data-init-plugin="cs-select">
                          <option value="-"> -- Pilih Kategori -- </option>
                          <option value="Body Treatment">Body Treatment</option>
                          <option value="Face Treatment">Face Treatment</option>
                        </select>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button name="tambahtreatment" type="submit" class="btn btn-primary  btn-cons">Tambah</button>
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
                  <li><a href="#" class="active">Daftar Treatment</a>
                  </li>
                </ul>
                <!-- END BREADCRUMB -->
                <div class="row">
                  <div class="col-lg-7 col-md-6 ">
                    <!-- START PANEL -->
                    <div class="full-height">
                      <div class="panel-body text-center">
                        <img class="image-responsive-height demo-mw-600" src="<?php echo base_url('assets');?>/img/demo/tables.jpg" alt="">
                      </div>
                    </div>
                    <!-- END PANEL -->
                  </div>
                  <div class="col-lg-5 col-md-6 ">
                    <!-- START PANEL -->
                    <div class="panel panel-transparent">
                      <div class="panel-heading">
                        <div class="panel-title">DERMA CLINIC
                        </div>
                      </div>
                      <div class="panel-body">
                        <h3>Medical Beauty Skin and Body Treatment</h3>
                        <p>Derma Esthetic Centre (DEC) adalah klinik kecantikan yang berdiri sejak tahun 2006 yang berbasis medis aesthetic dengan menggunakan bahan-bahan alami (herbal) dipadukan dengan metode perawatan modern sehingga menjadikan kulit sehat, bersih dan cerah alami.</p>
                        <p class="small hint-text m-t-5">Jl. Margorejo Indah 115A, Surabaya
                          <br> 031 8433950 / 031 8416042</p>
                        <br>
                      </div>
                    </div>
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
                <div class="panel-title">Daftar Treatment
                </div>
                <div class="pull-right">
                  <div class="col-xs-6">
                    <button class="btn btn-primary btn-cons" id="registpasien">Tambah Treatment</button>
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
                        <th class="center" style="width:15%">No</th>
                        <th class="center" style="width:50%">Nama Treatment</th>
                        <th class="center" style="width:20%">Kategori</th>
                        <th class="center" style="width:15%">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($listreatment)){
                      $i = 0;
                        foreach($listreatment as $listret){?>
                        <?php $i=$i+1?>
                    <tr class="gradeA">
                      <td class="center"><?php echo $i; ?></td>
                      <td class="center"><?php echo $listret['NAMATREATMENT'] ?></td>
                      <td class="center"><?php echo $listret['KATEGORITREATMENT'] ?></td>
                        <td class="center">
                        <div class="btn-group btn-group-xs">
                        <button type="button" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                        <a href="<?php echo site_url().'/admin/deletetreatment/'.$listret['IDTREATMENT'];?>" class="btn btn-danger" onClick="return delconfirm();"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    <?php } }
                      ?>
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
      <script>
      function delconfirm(){
        job=confirm("Apakah anda yakin ingin menghapus data ini?");
        if(job!=true){
          return false;
        }
      }
      </script>
    
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