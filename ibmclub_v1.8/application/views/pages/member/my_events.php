<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Katıldığım Etkinlikler</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
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
  <link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/datatables-responsive/dataTables.responsive.css">


  
  <!-- Inline -->
  <style>
  @media (max-width: 480px) {
    .panel-actions .dataTables_length {
      display: none;
    }
  }

  @media (max-width: 320px) {
    .panel-actions .dataTables_filter {
      display: none;
    }
  }

  @media (max-width: 767px) {
    .dataTables_length {
      float: left;
    }
  }

  #exampleTableAddToolbar {
    padding-left: 30px;
  }
  </style>

  <style>
  .lightbox-block {
    max-width: 600px;
    padding: 15px 20px;
    margin: 40px auto;
    overflow: auto;
    background: #fff;
    border-radius: 3px;
  }
  </style>

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
        <img class="navbar-brand-logo" src="../assets/images/logo.png" title="Remark">
        <span class="navbar-brand-text"> IBM CLUB APP</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">


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
          <li class="site-menu-item has-sub avtive open">
            <a href="javascript:void(0)" data-slug="dashboard">
              <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
              <span class="site-menu-title">Üyelik İşlemleri</span>
              <div class="site-menu-arrow">
               <!-- <span class="badge badge-success">2</span> -->
             </div>
           </a>
           <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('member/my_profile') ?>" data-slug="dashboard-v1">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Profilim</span>
              </a>
            </li>
            <li class="site-menu-item active">
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
                <div class="panel panel-success">
                  <header class="panel-heading">
                    <div class="panel-actions"></div>
                    <h3 class="panel-title">Katıldığım Etkinlikler</h3>
                  </header>
                  <div class="panel-body padding-30">
                    <table class="table table-bordered table-hover dataTable table-striped width-full" data-plugin="dataTable">
                      <thead>
                        <tr>
                          <th>Etklinlik İsmi</th>
                          <th>Etlinlik Tarihi</th>
                          <th>Etkinlik Yeri</th>
                          <th>Etkinlik Kotası</th>
                          <th>Kalan Kota Sayısı</th>
                          <th>Etkinlik Puanı</th>
                          <th>Etkinlik Açıklaması</th>
                          <th>Etkinliğe Katıl</th>
                        </tr>
                      </thead>

                      <tbody>
                       <?php 
                       foreach($events as $event){ 
                         $name =  $event->event_name;
                         $id = $event->event_id;
                         ?>
                         <tr>
                          <td style="font-weight:bold; color:black;"><?php echo $name; ?></td>
                          <td style="color:blue; font-weight:bold;"><?php echo $event->event_date; ?></td>
                          <td style="font-weight:bold; color:black;"><?php echo $event->event_place; ?></td>
                          <td style="color: red; font-weight:bold;"><?php echo $event->event_quota; ?></td>
                          <td style="color: red; font-weight:bold;"><?php echo $event->available_quota; ?></td>
                          <td style="color: orange; font-weight:bold;"><?php echo $event->event_point; ?></td>
                          <td style="font-weight:bold; color:black;"><?php echo $event->event_description; ?></td>

                          <td><a href="<?php echo site_url('member/attend_event?id='.$id) ?>"><button type="button" class="btn btn-danger">Vazgeç</button></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
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

   <script src="../assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>

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
   <!-- DataTable Script -->
   <script src="../assets/js/components/datatables.js"></script>
   <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
   <script src="../assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
   <script src="../assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
   <script src="../assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

   <script>
   (function(document, window, $) {
    'use strict';

    var Site = window.Site;

    $(document).ready(function($) {
      Site.run();
    });

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "../assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

    })(document, window, jQuery);
    </script>

  </body>

  </html>