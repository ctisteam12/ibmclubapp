<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Etkinlik Listesi</title>

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
  <link rel="stylesheet" href="../assets/vendor/formvalidation/formValidation.css">

  <!-- Page -->
  <link rel="stylesheet" href="../assets/css/../fonts/weather-icons/weather-icons.css">
  <link rel="stylesheet" href="../assets/css/dashboard/v1.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="../assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="../assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


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
                <a class="animsition-link" href="<?php echo site_url('admin/edit_member') ?>" data-slug="dashboard-v2">
                  <i class="site-menu-icon " aria-hidden="true"></i>
                  <span class="site-menu-title">Üye Kaydı Düzenle</span>
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

         <li class="site-menu-item has-sub">
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
              <li class="site-menu-item">
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
      <?php 
      foreach ($members as $member) {
        $id = $member->id;
        $name = $member->name;
        $surname = $member->surname;
        $email = $member->email;
      }
      ?>
      <!-- Page -->
      <div class="page">
        <div class="page-content padding-30 container-fluid">
          <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xlg-6 col-md-12">
              <div class="widget widget-shadow widget-responsive" id="widgetLineareaColor">
                <div class="widget-content widget-radius text-center bg-white">
                  <!-- Row start -->
                  <div class="panel panel-success">
                    <div class="panel-heading">
                      <h3 class="panel-title">Puan Ekle</h3>
                    </div>
                    <div class="panel-body padding-30">
                     <?php $css = $array = array('id' => 'addpoint', 'class' => 'form-horizontal');?>
                     <?php echo form_open('admin/add_point?id='.$id, $css); ?>
                     <!--  <form class="form-horizontal" id="uyekaydi" autocomplete="off"> -->
                     <!-- Üye ismi -->
                     <div class="form-group">
                      <label class="col-sm-3 control-label">Üye Adı</label>
                      <div class="col-sm-9">
                        <!--<input type="text" class="form-control" name="member_name" /> -->
                        <?php echo $name ?>
                      </div>
                    </div>
                    <!-- Üye Soyismi -->
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Üye Soyadı</label>
                      <div class="col-sm-9">
                       <?php echo $surname ?>
                     </div>
                   </div>
                   <!-- Üye Email -->
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Üye Email</label>
                    <div class="col-sm-9">
                     <?php echo $email ?>
                   </div>
                 </div>
                  <!-- Üye Puanı -->
                   <div class="form-group">
                    <label class="col-sm-3 control-label">Üye Puanı</label>
                    <div class="col-sm-9">
                     <p style="color: red; font-weight: bold; font-size: 24px;"><?php echo $total ?></p>
                   </div>
                 </div>
                 <!-- Üye Puanı -->
                 <div class="form-group">
                  <label class="col-sm-3 control-label">Üye Puanı Ekle</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="member_point" data-fv-stringlength="true"
                        data-fv-stringlength-max="4" data-fv-stringlength-min="2"
                        data-fv-stringlength-message="Lütfen en az 2 en fazla  4 basamaklı puan giriniz!"
                        placeholder="Puan giriniz...">
                  </div>
                </div>



                <div class="text-right">
                  <button type="submit" class="btn btn-success center-block" id="create_member1">Puanı Ekle</button>
                </div>
              </form>
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

<script src="../assets/vendor/formvalidation/formValidation.min.js"></script>
<script src="../assets/vendor/formvalidation/framework/bootstrap.min.js"></script>

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
  Site.run(); });
</script>

<!-- Üye Formu Validation -->
<script type="text/javascript">

(function() {
  $('#addpoint').formValidation({
    framework: "bootstrap",
    button: {
      selector: '#create_member1',
      disabled: 'disabled'
    },
    icon: null,
    fields: {
      member_point: {
        validators: {
          notEmpty: {
            message: 'Üye Puanı boş bırakılamaz!'
          },
          integer: {
            message: 'Lütfen sayısal bir değer giriniz!'
          }
        }
      },
    }
  });
})();

</script>

</body>

</html>