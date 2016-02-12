<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="top">
	<div class="container-lion">
		<ul id="scene" class="scene">
			<li class="layer" data-depth="0.20"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.png"></li>
		</ul>
	</div>
	<div class="contenu">
		<div class="contenu-texte">
			<div id="logo">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="">
			</div>
			<div><h1>Webdesigner, développeur et intégrateur</h1></div>
			<div><h2>Inspiré et inspirant, découvrez mon portfolio</h2></div>
		</div>
	</div>
</div>

<div class="marge">dzedze</div>

<!-- DEBUT CORPS -->
<div class="wrapped">
  <div class="menu">
      <ul>
        <li><a href="#">Site web</a></li>
        <li><a href="#">Print</a></li>
        <li><a href="#">Illustrations</a></li>
        <li><a href="#">Photographies</a></li>
        <li><a href="#">Le BLOG webdesign</a></li>
      </ul>
      <hr>
  </div>
  <div class="last-crea">
    <h2>Mes dernières créations</h2>
    <hr>
    <div class="rond"></div>
    <div class="subRond">Pour vous donner un aperçu de ce que je sais faire</div>
    <div class="row">
      <div class="large-3 medium-6 columns"><img src="http://placehold.it/650x650"></div>
      <div class="large-3 medium-6 columns"><img src="http://placehold.it/650x650"></div>
      <div class="large-3 medium-6 columns"><img src="http://placehold.it/650x650"></div>
      <div class="large-3 medium-6 columns"><img src="http://placehold.it/650x650"></div>
    </div>
    <div class="all" style="display:none;">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/crea.png" alt="">
      <br><div class="bouton"><a href="">Voir toutes mes créations</a></div>
    </div>
  </div>
  <div class="skewed">
    <div class="fond">
      <div class="fond-photo"><div class="image"></div></div>
    </div>
  </div>
  <div class="competence">
    <h2>Créations de site</h2>
    <hr>
    <div class="rond"></div>
    <div class="subRond">Motivé et toujours disponible pour réaliser votre projet !</div>
    <div class="row contain">
      <div class="large-4 columns">
        <div class="round">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico3.png" alt="">
        </div>
        <div class="grey">
          <h3>CMS</h3>
          <hr>
          <div class="red">Pour administrer votre site</div>
          <div class="marge">
            Les CMS vous permettent de gérer vous-même et avec grande facilité tout le contenu de votre site internet pour votre plus grand bonheur !
          </div>
        </div>
      </div>
      <div class="large-4 columns">
        <div class="round">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico2.png" alt="">
        </div>
        <div class="grey">
          <h3>Design</h3>
          <hr>
          <div class="red">Pour le plaisir des yeux</div>
          <div class="marge">
            Créatif de nature, mes créations sont le reflet de ma passion pour le design.
Un beau site internet est la garantie d’un visiteur comblé
          </div>
        </div>
      </div>
      <div class="large-4 columns">
        <div class="round">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico1.png" alt="">
        </div>
        <div class="grey">
          <h3>Intégration / DEV.</h3>
          <hr>
          <div class="red">Pour que tout soit parfait</div>
          <div class="marge">
            Toujours au courant des nouvelles technologies du web, votre site internet sera à la pointe de ce qui se fait en ce moment.
          </div>
        </div>
      </div>
    </div>

    <h2>Cinq</h2>
    <hr>
    <div class="rond"></div>
    <div class="subRond">bonnes raisons de travailler ensemble</div>
    <div class="contain-2">
      <div class="row contain">
        <div class="small-6 columns">
          <div class="grey">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x4.png" alt="">
            L'assurance d'un design propre et réussi</div>
        </div>
        <div class="small-6 columns">
          <div class="grey">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x3.png" alt="">
            Le professionnalisme d'un passioné</div>
        </div>
        <div class="small-6 columns">
          <div class="grey">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x2.png" alt="">
            Toujours à l'écoute de vos besoins</div>
        </div>
        <div class="small-6 columns">
          <div class="grey">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x5.png" alt="">
            Sourire et bonne humeur 24h/24</div>
        </div>
        <div class="small-12 columns">
          <div class="grey" style="text-align:center;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/x1.png" alt="">
            Et en plus je suis certifié</div>
        </div>
      </div>
    </div>

  </div>

  <div class="crea-wrap">
    <div class="image"><div class="fondu">
      <div class="texte">
        <h1>Créations</h1>
          <h2>L'univers d'un Homme aux grandes ambitions</h2>
          <hr>
          <div class="slogan">Je me livre à vous sans tabou et en toute transparence.</div>
      </div>
    </div></div>
  </div>

</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/deploy/parallax.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/jquery.js"></script>
<script>

// Pretty simple huh?
var scene = document.getElementById('scene');
var parallax = new Parallax(scene);

</script>

<script>
$(document).ready(function() {

  /* Every time the window is scrolled ... */
  $(window).scroll( function(){

      /* Check the location of each desired element */
      $('.hideme').each( function(i){

          var bottom_of_object = $(this).offset().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();

          /* If the object is completely visible in the window, fade it it */
          if( bottom_of_window > bottom_of_object ){

              $(this).animate({'opacity':'1'},1000);

          }

      });

  });

});
</script>

<?php get_footer(); ?>
