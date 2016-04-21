<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Yeni Etkinlik Oluştur</title>

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="../assets/css/site.min.css">

  <link rel="stylesheet" href="../assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="../assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="../assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="../assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="../assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="../assets/vendor/flag-icon-css/flag-icon.css">

  <!-- Plugin -->
  <link rel="stylesheet" href="../assets/vendor/formvalidation/formValidation.css">

  <!-- Page -->
  <link rel="stylesheet" href="../assets/css/../fonts/weather-icons/weather-icons.css">
  <link rel="stylesheet" href="../assets/css/dashboard/v1.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

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
            <li class="site-menu-category"><?php $temp=$this->session->userdata('admin');echo $temp['name'].' '.$temp['surname'];  ?></li>
            
            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Üyeler</span>
                <span class="site-menu-arrow"></span>
                <div class="site-menu-badge">
                 <!-- <span class="badge badge-success">2</span> -->
               </div>
             </a>
           </a>
           <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('admin/member_list') ?>">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Üye Listesi</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('admin/create_member') ?>" data-slug="dashboard-v1">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Üye Kaydı Oluştur</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('admin/approval_show') ?>" data-slug="dashboard-v2">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span style="font-size:13px;" class="site-menu-title">Onay Bekleyen Hesaplar</span>
                <div class="site-menu-badge">
                </div>
              </a>
            </li>
          </ul>
        </li>

        <li class="site-menu-item has-sub active open">
          <a href="javascript:void(0)" data-slug="uikit">
            <i class="site-menu-icon wb-bookmark" aria-hidden="true"></i>
            <span class="site-menu-title">Etkinlikler</span>
            <span class="site-menu-arrow"></span>
          </a>
          <ul class="site-menu-sub">
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('events/event_list') ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Etkinlik Listesi</span>
              </a>
            </li>
            <li class="site-menu-item active">
              <a class="animsition-link" href="<?php echo site_url('events/create_event') ?>" data-slug="uikit-colors">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Etkinlik Oluştur</span>
              </a>
            </li>
            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo site_url('events/edit_event') ?>" data-slug="uikit-dropdowns">
                <i class="site-menu-icon " aria-hidden="true"></i>
                <span class="site-menu-title">Etkinlik Düzenle</span>
              </a>
            </li>
          </li>
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="<?php echo site_url('admin/dashboard') ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
        data-original-title="Anasayfa">
        <span class="icon wb-home" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="<?php echo site_url('pages/logout?type=admin') ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
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
              <!-- Üye Kaydı Oluşturma Paneli -->
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Yeni Etkinlik Oluştur</h3>
                </div>
                <div class="panel-body padding-30">
                 <?php $id = $array = array('id' => 'create_event', 'class' => 'form-horizontal');?>
                 <?php echo form_open('events/new_create_event', $id); ?>
                 <!--  <form class="form-horizontal" id="uyekaydi" autocomplete="off"> -->
                 <!-- Etkinlik İsmi -->
                 <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik İsmi:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="event_name" />
                  </div>
                </div>
                <!-- Etkinlik Tarihi -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik Tarihi:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="event_date" placeholder="YYYY/MM/DD"/>
                  </div>
                </div>
                <!-- Etkinlik Yeri -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik Yeri:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="event_place" />
                  </div>
                </div>

                <!-- Etkinlik Kotası -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik Kotası:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="event_kota" />
                  </div>
                </div>
                <!-- Etkinlik Puanı -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik Puanı:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="event_point" />
                  </div>
                </div>
                <!-- Etkinliğin İçeriği -->
                <div class="form-group">
                  <label class="col-sm-2 control-label">Etkinlik İçeriği:</label>
                  <div class="col-sm-8">
                     <textarea class="form-control" name="event_description" rows="5"></textarea>
                  </div>
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-info center-block" id="create_member1">Etkinliği Oluştur</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Panel Standard Mode -->

        </div>
        <!-- Row end -->


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

<script src="../assets/vendor/formvalidation/formValidation.min.js"></script>
<script src="../assets/vendor/formvalidation/framework/bootstrap.min.js"></script>

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

<!-- Üye Formu Validation -->
<script type="text/javascript">

(function() {
  $('#create_event').formValidation({
    framework: "bootstrap",
    button: {
      selector: '#create_member1',
      disabled: 'disabled'
    },
    icon: null,
    fields: {
      event_name: {
        validators: {
          notEmpty: {
            message: 'Etkinlik İsmi boş bırakılamaz!'
          }
        }
      },
      event_date: {
        validators: {
          notEmpty: {
            message: 'Etkinlik Tarihi boş bırakılamaz!'
          },
          date: {
            format: 'YYYY/MM/DD'
          }
        }
      },
      event_place: {
        validators: {
          notEmpty: {
            message: 'Etkinlik Yeri Boş bırakılamaz!'
          },
        }
      },
      event_kota: {
        validators: {
          notEmpty: {
            message: 'Etkinlik Kotası Boş bırakılamaz!'
          },
          integer: {
            message: 'Lütfen sayısal bir değer giriniz!'
          }
        }
      },
      event_point: {
        validators: {
          notEmpty: {
            message: 'Etkinlik Puanı Boş bırakılamaz!'
          },
          integer: {
            message: 'Lütfen sayısal bir değer giriniz!'
          }
        }
      },
      event_description: {
        validators: {
          notEmpty: {
            message: 'Etkinlik Puanı Boş bırakılamaz!'
          },
          stringLength: {
            max: 300,
            message: 'Etkinlik içeriği 300 karakterden az olmalı!'
          }
        }
      },

    }
  });
})();

</script>

<script>
$(document).ready(function($) {
  Site.run();
});
</script>

</body>

</html>