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
      <div class="section-box">
        <ul class="section-sidemenu">
          <!-- @TODO: add text inside each link from WP to make it semantic -->
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="section-info-container">
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

    <section class="experience">
      <div class="section-box">
        <ul class="section-sidemenu">
          <!-- @TODO: add text inside each link from WP to make it semantic -->
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>
        <div class="section-info-container">
          <h2>EXPERIENCE</h2>
          <p>
            I'm a Digital Designer who is passionate about the "black magic" of visual arts.
            Two survival kits are important to me: a sketchpad with a fine-tipped pen, and
            my Wacom with a fully-charged laptop! There is no project or client who is able
            to resist such creativity and focus.
          </p>
          <p>
            I have more than 10 years experience with online and print design, 3D and
            concept. I've worked on numerous websites, apps, books, campaigns on social
            media, characters, brands for different market sectors, games and much more.
          </p>
          <p>
            My coworkers say that I have an energetic personality, positive attitude, high
            enthusiasm, and that I'm a diligent and responsible person.
            I'm fluent in Portuguese and advanced in English.
          </p>
        </div>
        <div class="experience-round-shade experience-round-shade1"></div>
        <div class="experience-round-shade experience-round-shade2"></div>
        <div class="experience-round-shade experience-round-shade3"></div>
        <div class="experience-round experience-round-gradient-border"></div>
        <div class="experience-round experience-round-container">
          <div class="experience-round-content">
            <h2>SOME OF MY CLIENTS</h2>
            <p>
              FIFA, Coca-Cola Brasil, Trousseau, 20th Century Fox, TNT, FIAT, IMT Media Lab, SEED Startups and Entrepreneurship Ecosystem Development of Minas Gerias, Empório Santa Maria, St Marche Supermercado, Estado de Minas, Grupo EPO, Governo de Minas Gerais, AuDITIONS Brasil,  AngloGold Ashant, Ricardo Eletro, Globo Minas, Grupo Séculus, Construtora Caparaó, Escola Brasileira de Psicanálise, Fundação Clóvis Salgado, Orquestra Filarmônica de Minas Gerais, Sada Cruzeiro, Luiz Lanza Arquitetura + Design, Construtora Neocasa, Escola Sesi, Nordweg,  Sistema Mineiro de Informação, Cursos Soma, Condomínio Vila da Serra,  Carta Consulta, TWM, Queijos São Vicente, Aneethun, Le Biscuit, Self Shop, Ciências Médicas Minas Gerais, Universidade Tiradentes, StreetBike Shop,
              Boline Bolos Caseiros, BH Eventos, CellSeq Solutions, Criasol, Data Viva, Brasil LAB, Pré-UFMG, Portal do Incentivo, Taiyang Editora, Uai Courier, Vale do Rio Doce, Atelier Sugar Design, Projeto Brasil,  Centro de Oftalmologia Avançada.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="contact">
      <div class="section-box">
        <div class="left-container">
          <h2>LET'S TALK</h2>
          <p>
            Feel free to ping me to discuss your idea, feedback or<br>
            potential work opportunities
          </p>
          <br>
          <a href="#">
            <span>
              SEND ME AN EMAIL
            </span>
          </a>
          <br>
          <a href="#">
            <span>
              CONNECT ON LINKEDIN
            </span>
          </a>
          <br>
          <a href="#">
            <span>
              FOLLOW ME ON TWITTER
            </span>
          </a>
          <br>
          <a href="#">
            <span>
              HELLO! +1 604 352 6809
            </span>
          </a>
        </div>
        <div class="right-container">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/nothing-can-stop-a-good-idea.png" alt="Nothing Can Stop A Good Idea">
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
