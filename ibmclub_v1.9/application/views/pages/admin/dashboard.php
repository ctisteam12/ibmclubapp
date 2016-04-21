<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>IBM CLUB APP | Admin Ekranı</title>

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
  <link rel="stylesheet" href="../assets/vendor/morris-js/morris.css">

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
        <div class="navbar-brand navbar-brand-center" data-toggle="gridmenu">
          <img class="navbar-brand-logo" src="../assets/images/ibmlogo.png" title="IBM">
          <span class="navbar-brand-text"></span>
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
              <li class="site-menu-item has-sub active open">
                <a href="javascript:void(0)" data-slug="dashboard">
                  <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                  <span class="site-menu-title">Üyeler</span>
                  <span class="site-menu-arrow"></span>
                  <div class="site-menu-badge">
                   <!-- <span class="badge badge-success">2</span> -->
                 </div>
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
                     <span class="badge badge-success"><?php $num= $this->session->userdata('number'); echo $num;?></span>
                   </div>
                 </a>
               </li>
             </ul>
           </li>

           <!--<li class="site-menu-category">Etkinlik YÖnetimi</li> -->
           <li class="site-menu-item has-sub open">
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
            </li>
          </div>
        </div>
      </div>
      <div class="site-menubar-footer">
        <a href="<?php echo site_url('admin/dashboard') ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Anasayfa">
          <span class="icon wb-home" aria-hidden="true"></span>
        </a>
        <a href="<?php echo site_url('pages/logout?type=admin') ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon wb-power" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Boş">
          <span class="icon wb-eye-close" aria-hidden="true"></span>
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
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <p style="text-transform: uppercase;"><?php echo "Hoş Geldiniz Sayın"." ".$temp['surname']; ?></p>
                </div>
                <!-- TOPLAM ÜYE VE ETKİNLİK SAYISI -->
                <div class="col-xlg-3 col-md-12">
                  <div class="row height-full">

                    <div class="col-xlg-12 col-md-6" style="height:50%;">
                      <div class="widget widget-shadow">
                        <div class="widget-content widget-radius padding-30 bg-blue-600 white">
                          <div class="counter counter-lg counter-inverse text-center">
                            <div class="counter-label margin-bottom-20">
                              <div style="font-size:18px;">Toplam Üye Sayısı</div>
                            </div>
                            <a class="div-link" href="<?php echo site_url('admin/member_list'); ?>"></a>
                            <div class="counter-number-group margin-bottom-15">
                              <span class="counter-number"><?php $num= $this->session->userdata('number_of_member'); echo $num;?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xlg-12 col-md-6" style="height:50%;">
                      <div class="widget widget-shadow">
                        <div class="widget-content widget-radius padding-30 bg-green-600 white">
                          <div class="counter counter-lg counter-inverse text-center">
                            <div class="counter-label margin-bottom-20">
                              <div style="font-size:18px;">Toplam Etkinlik Sayısı</div>
                            </div>
                            <a class="div-link" href="<?php echo site_url('events/event_list'); ?>"></a>
                            <div class="counter-number-group margin-bottom-15">
                              <span class="counter-number"><?php $num= $this->session->userdata('number_of_event'); echo $num;?></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-xlg-12 col-md-6" style="height:50%;">
                  <div class="widget widget-shadow">
                    <div class="widget-content widget-radius padding-30 bg-orange-600 white">
                      <div class="counter counter-lg counter-inverse text-center">
                        <div class="counter-label margin-bottom-20">
                          <div style="font-size:18px;">Bugünkü Etkinlikler</div>
                          <div class="blue-200"><!-- --></div>
                        </div>
                        <div class="counter-number-group margin-bottom-15">
                          <?php 
                          foreach ($events as $key) {
                            $name = $key->event_name;
                            ?>
                            <?php 
                                if(empty($name)){
                                $name = "Etkinlik Yok";
                            }
                             ?>
                            <span class="counter-number" style="font-size:18px;"><?php echo $name; ?></span><br>
                            <?php 
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xlg-12 col-md-6" style="height:50%;">
                  <div class="widget widget-shadow">
                    <div class="widget-content widget-radius padding-30 bg-red-600 white">
                      <div class="counter counter-lg counter-inverse text-center">
                        <div class="counter-label margin-bottom-20">
                          <div style="font-size:18px;">Onay Bekleyen Hesaplar</div>
                          <div class="blue-200"><!-- --></div>
                        </div>
                        <a class="div-link" href="<?php echo site_url('admin/approval_show'); ?>"></a>
                        <div class="counter-number-group margin-bottom-15">
                          <span class="counter-number"><?php $num= $this->session->userdata('number'); echo $num;?></span>
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
   <script src="../assets/vendor/morris-js/morris.min.js"></script>
   <script src="../assets/vendor/raphael/raphael-min.js"></script>

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
   <script>
   (function() {
    Morris.Bar({
      element: 'exampleMorrisBar',
      data: [{
        y: '2013-6',
        a: 350,
        b: 410
      }, {
        y: '2013-7',
        a: 110,
        b: 300
      }, {
        y: '2013-8',
        a: 460,
        b: 130
      }, {
        y: '2013-9',
        a: 250,
        b: 310
      }
            // { y: '2013-10', a: 50, b: 40 },
            // { y: '2013-11', a: 75, b: 65 },
            // { y: '2013-12', a: 100, b: 90 }
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            barGap: 6,
            barSizeRatio: 0.35,
            smooth: true,
            gridTextColor: '#474e54',
            gridLineColor: '#eef0f2',
            goalLineColors: '#e3e6ea',
            gridTextFamily: $.configs.get('site', 'fontFamily'),
            gridTextWeight: '300',
            numLines: 6,
            gridtextSize: 14,
            resize: true,
            barColors: [$.colors("red", 500), $.colors("blue-grey", 300)]
          });
})();

</script>
</body>

</html>