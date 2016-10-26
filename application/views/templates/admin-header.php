<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css'); ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/admin-panel.css'); ?>"  media="screen,projection"/>
      <script src="https://use.fontawesome.com/67d886c44f.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <title>Control Panel</title>
    </head>
    <body style="background-color: #EEEEEE;">
    <main>
      <div class="fixed-action-btn" style="bottom: 15px; left: 15px;">
        <a class="btn-floating btn-large red button-collapse" data-activates="mobile-demo">
          <i class="fa fa-bars"></i>
        </a>
      </div>

      <ul class="side-nav" id="mobile-demo">
        <li><a href="<?php echo base_url('dp-admin/dashboard'); ?>"><i class="fa fa-home"></i>Dashboard</a></li>
        <li><a href="<?php echo site_url('dp-admin/news'); ?>"><i class="fa fa-newspaper-o"></i>News</a></li>
        <li><a href="<?php echo site_url('tutorial/'); ?>">TUTORIAL</a></li>
        <li><a href="<?php echo site_url('contact-us/'); ?>">CONTACT US</a></li>
      </ul>
