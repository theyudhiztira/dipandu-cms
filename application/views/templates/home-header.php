<html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css'); ?>"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/home.css'); ?>"  media="screen,projection"/>
      <script src="https://use.fontawesome.com/67d886c44f.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>DiPandu</title>
    </head>
    <body style="background-color: #F5F5F5;">
    <main>
      <div class="row header">
        <nav>
          <div class="nav-wrapper">
            <a href="<?php echo base_url(); ?>" class="brand-logo">Logo</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="<?php echo base_url(); ?>">HOME</a></li>
              <li><a href="<?php echo site_url('news/'); ?>">NEWS</a></li>
              <li><a href="<?php echo site_url('tutorial/'); ?>">TUTORIAL</a></li>
              <li><a href="<?php echo site_url('contact-us/'); ?>">CONTACT US</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="<?php echo base_url(); ?>">HOME</a></li>
              <li><a href="<?php echo site_url('news/'); ?>">NEWS</a></li>
              <li><a href="<?php echo site_url('tutorial/'); ?>">TUTORIAL</a></li>
              <li><a href="<?php echo site_url('contact-us/'); ?>">CONTACT US</a></li>
            </ul>
          </div>
        </nav>
      </div>
