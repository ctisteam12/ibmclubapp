<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>ADMİN GİRİŞİ</title>

  

  <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/site.min.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/flag-icon-css/flag-icon.css">


  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/pages/login.css"> <!--arka plan resmi koyuyor -->

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/breakpoints/breakpoints.js"></script>
    <script>
    Breakpoints();
    </script>
  </head>
  <body class="page-login layout-full">

    <!-- Page -->
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
    data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle">
      <div class="brand">
        <img class="brand-img" src="<?php echo base_url(); ?>assets/images/ibmlogo.png" alt="...">
        <h2 class="brand-text">IBM CLUB APP ADMİN GİRİŞ EKRANI 12314  </h2>
      </div>
      <!-- <p>IBM CLUB APP'e AGiriş Yapınız</p> -->
      <?php echo form_open('pages/login'); ?>
      <div class="form-group">
        <label class="sr-only" for="member_id">E-mail</label>
        <input type="text" class="form-control" id="member_id" name="member_id" placeholder="E-mail">
      </div>

      <div class="form-group">
        <label class="sr-only" for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password"
        placeholder="Parola">
      </div>

      <div class="form-group clearfix">
        <div class="checkbox-custom checkbox-inline pull-left">
          <input type="checkbox" id="inputCheckbox" name="checkbox">
          <label for="inputCheckbox">Beni Hatırla</label>
        </div>
        <a class="pull-right" href="#">Şifre mi unuttum</a>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
    </form>
    
    <p>Bugün IBM CLUB'a katıl. Hemen <a href="<?php echo site_url('member/member') ?>">Kayıt ol</a></p>
    

      <footer class="page-copyright">
        <p>CTIS | TEAM 12</p>
        <p>© 2015. All RIGHT RESERVED.</p>
        <!-- End Page -->


        <!-- Core  -->
        <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/animsition/jquery.animsition.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/asscroll/jquery-asScroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

        <!-- Plugins -->
        <script src="<?php echo base_url(); ?>assets/vendor/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/intro-js/intro.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/screenfull/screenfull.js"></script>
        <script src="<?php echo base_url(); ?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>

        <script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

        <!-- Scripts -->
        <script src="<?php echo base_url(); ?>assets/js/core.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/site.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/sections/menu.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sections/menubar.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/sections/sidebar.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/configs/config-colors.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/configs/config-tour.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/components/asscrollable.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/animsition.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/slidepanel.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/switchery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/components/jquery-placeholder.js"></script>

        <script>
        (function(document, window, $) {
          'use strict';

          var Site = window.Site;
          $(document).ready(function() {
            Site.run();
          });
        })(document, window, jQuery);
        </script>

      </body>

      </html>