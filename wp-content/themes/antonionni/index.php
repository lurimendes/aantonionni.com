<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<html>
	<head>
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,500,700|Titillium+Web:300,400" rel="stylesheet">
	</head>
	<body>
    <div class="sidebar-top">ARMANDO ANTONNIONI</div>
    <div class="sidebar-middle">BELO HORIZONTE → VANCOUVER</div>
    <div class="sidebar-bottom">DIGITAL DESIGNER</div>

    <div class="logo">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/logo.svg"/>
    </div>

    <div class="menu">
      <div class="menu-icon">
        <div class="menu-icon-content">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/menu-icon.png"/>
        </div>
      </div>
      <ul class="menu-items">
        <li class="active">HOME</li>
        <li>PORTFOLIO</li>
        <li>ABOUT ME</li>
        <li>CONTACT</li>
      </ul>
    </div>
    
    <section class="home" style="height:1000px;">
      <div class="description">
        <span class="digital-desig>ner">I'M A DIGITAL DESIGNER</span> from Brazil living in Canada, where I work as
        an Interface Designer at Electronic Arts. With a background also in
        advertising and 3D modeling, my strength lies in interface design.
        <br /
        <br />
        If you want to know more about me, my work or if you're a lost soul who 
        wants to find the Neverland or offer me a lot of money, feel free to contact
        me on <a href="#">antonnioni at gmail.com</a>.
      </div>

      <div class="scroll">
        <span class="scroll-text">SCROLL</span>
        <div class="mouse-icon">
          <div class="inner-mouse-icon"></div>
        </div>
        <div class="scroll-line"></div>
      </div>
    </section>

    <section class="portfolio">
      <div class="portfolio-box">
        <ul class="portfolio-sidemenu">
          <!-- @TODO: add text inside each link from WP to make it semantic -->
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="project-info-container">
          <span class="">CLIENT EA Sports</span>
          <span class="">COMPANY EA Sports</span>
          <span class="">YEAR 2016</span>
          <h2>FIFA MOBILE</h2>
          <p>
            An all-new football experience built for the mobile player featuring Attack Mode, 
            daily live content, a fresh approach to squad building, and online leagues to 
            compete against players worldwide. Squad building, and online leagues to 
            compete against players worldwide.
          </p>
        </div>
        <div class="project-img">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/project1.png" alt="">
        </div>
      </div>
    </section>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.1/plugins/animation.gsap.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory'); ?>/assets/js/main.js"></script>
	</body>
</html>
