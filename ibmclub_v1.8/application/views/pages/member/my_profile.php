<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Benim Profilim</title>
  <!-- base_url('/css/indexpage.css'); -->
  <link rel="apple-touch-icon" href="<?php echo base_url(''); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../assets/css/site.min.css">
  
  <link rel="stylesheet" href="../assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  
  <!-- Page -->
  <link rel="stylesheet" href="../assets/css/../fonts/weather-icons/weather-icons.css">
  <link rel="stylesheet" href="../assets/css/dashboard/v1.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/brand-icons/brand-icons.min.css">
  <!--<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>--> <!-- ORJİNAL FONT -->
  <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>


  <!--[if lt IE 9]>
    <script src="../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="../assets/vendor/modernizr/modernizr.js"></script>
    <script src="../assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
    Breakpoints();
    </script>
  </head>
  <body class="dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
            data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
          </button>
          <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
          data-toggle="collapse">
          <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
        data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="../assets/images/logo.png" title="IBM"> 
        <span class="navbar-brand-text"> IBM CLUB APP</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse --> <!--
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <a href="#" class="btn btn-info btn-small">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
      </p>
    -->
  </div>
  <!-- End Navbar Collapse -->

  <!-- Site Navbar Seach -->
  <div class="collapse navbar-search-overlap" id="site-navbar-search">
    <form role="search">
      <div class="form-group">
        <div class="input-search">
          <i class="input-search-icon wb-search" aria-hidden="true"></i>
          <input type="text" class="form-control" name="site-search" placeholder="Search...">
          <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
          data-toggle="collapse" aria-label="Close"></button>
        </div>
      </div>
    </form>
  </div>
  <!-- End Site Navbar Seach -->
</div>
</nav>
<div class="site-menubar">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu">
          <li class="site-menu-category"><?php $temp=$this->session->userdata('user');echo $temp['name'].' '.$temp['surname'];  ?></li>
          <li class="site-menu-item has-sub active open">
            <a href="javascript:void(0)" data-slug="dashboard">
              <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
              <span class="site-menu-title">Üyelik İşlemleri</span>
              <div class="site-menu-badge">
               <!-- <span class="badge badge-success">2</span> -->
             </div>
           </a>
           <ul class="site-menu-sub">
            <li class="site-menu-item active">
              <a class="animsition-link" href="<?php echo site_url('member/my_profile') ?>" data-slug="dashboard-v1">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Profilim</span>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('member/my_events') ?>" data-slug="dashboard-v2">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Katıldığım Etkinlikler</span>
              </a>
            </li>

          </ul>
        </li>


        <li class="site-menu-item has-sub">
          <a href="javascript:void(0)" data-slug="uikit">
            <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
            <span class="site-menu-title">Etkinlik İşlemleri</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('member/dashboard') ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Etkinlik Listesi</span>
              </a>
            </li>
          </div>
        </div>
      </div>

      <div class="site-menubar-footer">
        <a href="<?php echo site_url('member/dashboard') ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
        data-original-title="Anasayfa">
        <span class="icon wb-home" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="<?php echo site_url('pages/logout?type=user') ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>

  <!-- Page -->
  <div class="page">
    <div class="page-content padding-30  container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-6 col-md-12">
          <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
            <div class="widget-content widget-radius text-center bg-white">
              <!-- Row start -->
              <div class="col-md-6 col-xs-12 masonry-item">
                <div class="widget">
                  <div class="widget-header white bg-cyan-600 padding-30 clearfix">
                    <a class="avatar avatar-100 pull-left margin-right-20" href="javascript:void(0)">
                      <img src="../assets/images/ben.png" alt="">
                    </a>
                    <div class="pull-left">
                      <div class="font-size-20 margin-bottom-15"><?php $temp=$this->session->userdata('user');echo $temp['name'].' '.$temp['surname'];  ?></div>
                      <p class="margin-bottom-5 text-nowrap"><i class="icon wb-map margin-right-10" aria-hidden="true"></i>
                        <span
                        class="text-break">Bilkent Universitesi</span> <!-- Buraya Member kendi adresini yazacak -->
                      </p>
                      <p class="margin-bottom-5 text-nowrap"><i class="icon wb-envelope margin-right-10" aria-hidden="true"></i>
                        <span
                        class="text-break"><?php $temp=$this->session->userdata('user');echo $temp['email'];  ?></span>
                      </p>
                      <?php $id = $this->session->userdata('user')['id']; ?>
                     <a href="<?php echo site_url('member/edit_profile?id='.$id) ?>"><button type="button" class="btn btn-danger margin-bottom-5 text-nowrap"><span class="fa fa-gear"></span> Profil Düzenle </button></a>
                    </div>
                  </div>
                  <div class="widget-content bg-white container-fluid">
                    <div class="row no-space padding-vertical-20 padding-horizontal-30 text-center">
                      <div class="col-xs-6">
                        <div class="counter">
                          <span style="color:red"; class="counter-number"><?php echo $number_rows; ?></span> <!-- Database'den çekip yazacağız-->
                          <div class="counter-label">Katıldığım Etkinlikler</div>
                        </div>
                      </div>
                      <div class="col-xs-6">
                        <div class="counter">
                          <span style="color:yellow; font-size:18px; font-weight: bold;" class="counter-number"><?php echo $this->session->userdata('user')['point']; ?></span> <!-- Database'den çekip yazacağız-->
                          <div class="counter-label">Puan</div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- Row end -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015-2016</span>
    <div class="site-footer-right">
     CTIS TEAM 12
   </div>
 </footer>

 <!-- Core  -->
 <script src="../assets/vendor/jquery/jquery.js"></script>
 <script src="../assets/vendor/bootstrap/bootstrap.js"></script>
 <script src="../assets/vendor/animsition/jquery.animsition.js"></script>
 <script src="../assets/vendor/asscroll/jquery-asScroll.js"></script>
 <script src="../assets/vendor/mousewheel/jquery.mousewheel.js"></script>
 <script src="../assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
 <script src="../assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

 <!-- Plugins -->
 <script src="../assets/vendor/switchery/switchery.min.js"></script>
 <script src="../assets/vendor/intro-js/intro.js"></script>
 <script src="../assets/vendor/screenfull/screenfull.js"></script>
 <script src="../assets/vendor/slidepanel/jquery-slidePanel.js"></script>

 <script src="../assets/vendor/skycons/skycons.js"></script>
 <script src="../assets/vendor/chartist-js/chartist.min.js"></script>
 <script src="../assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
 <script src="../assets/vendor/jvectormap/jquery-jvectormap.min.js"></script>
 <script src="../assets/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>
 <script src="../assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

 <!-- Scripts -->
 <script src="../assets/js/core.js"></script>
 <script src="../assets/js/site.js"></script>

 <script src="../assets/js/sections/menu.js"></script>
 <script src="../assets/js/sections/menubar.js"></script>
 <script src="../assets/js/sections/sidebar.js"></script>

 <script src="../assets/js/configs/config-colors.js"></script>
 <script src="../assets/js/configs/config-tour.js"></script>

 <script src="../assets/js/components/asscrollable.js"></script>
 <script src="../assets/js/components/animsition.js"></script>
 <script src="../assets/js/components/slidepanel.js"></script>
 <script src="../assets/js/components/switchery.js"></script>
 <script src="../assets/js/components/matchheight.js"></script>
 <script src="../assets/js/components/jvectormap.js"></script>

 <script>
 $(document).ready(function($) {
  Site.run();
    });
</script>

</body>
</html>