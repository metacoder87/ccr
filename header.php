<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php wp_head(); ?>
    <title>Clay Curts Racing | Indiana Race Team</title>
        <link rel="icon" type = "image/png" href="<?php echo get_template_directory_uri(); ?>/img/ccr logo 2.png">
  
  </head>

<body>
    <div id="slideout-menu">
      <ul>
        <li>
            <a href="<?php echo site_url(''); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/blog'); ?>">Blog</a>
          </li>
          <li>
            <a href="<?php echo site_url('/schedule'); ?>">Schedule</a>
          </li>
          <li>
            <a href="<?php echo site_url('/team'); ?>">Team</a>
          </li>
          <li>
            <a href="<?php echo site_url('/photos'); ?>">Photos</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
        <div class="searchbox-slide-menu">
          <?php get_search_form(); ?>
        </div>
      </ul>
    </div>

    <nav>
      <div id="logo-img">
          <a href="<?php echo site_url(''); ?>">
              <img src='<?php echo get_template_directory_uri(); ?>/img/ccr logo 1.png' alt='Clay Curts Racing Logo'>
          </a>
      </div>
      <div id="menu-icon">
          <i class="fas fa-bars"></i>
      </div>
        <ul>
          <li>
            <a href="<?php echo site_url(''); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/blog'); ?>">Blog</a>
          </li>
          <li>
            <a href="<?php echo site_url('/schedule'); ?>">Schedule</a>
          </li>
          <li>
            <a href="<?php echo site_url('/team'); ?>">Team</a>
          </li>
          <li>
            <a href="<?php echo site_url('/photos'); ?>">Photos</a>
          </li>
          <li>
            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
          </li>
          <li>
            <div id="search-icon">
              <i class="fas fa-search"></i>
            </div>
          </li>
        </ul>
     </nav>

     <div id="searchbox">
       <?php get_search_form(); ?>
     </div>

     <?php if(!is_front_page()) { ?>
        <main>
     <?php } ?>
