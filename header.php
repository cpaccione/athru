<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package athrupartners
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	 <!-- Global site tag (gtag.js) - Google Analytics -->
	 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133926305-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-133926305-1');
  </script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-P3KTSB6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'athrupartners' ); ?></a>

	<nav class="nav">
    <div class="logo">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_template_directory_uri() );?>/images/logo.svg" alt="Athru Partners"></a>
    </div>

		<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	 => 'menu',
				'container'		 => '',
			) );
		?>
    <!--     <span class="mobile-menu" style="font-size: 3.5rem; cursor: pointer; color: #ffffff; position: absolute; right: 20px;" onclick="openNav()">&#9776;</span> -->

    <button class="btn-menu mobile-menu" style="cursor: pointer; color: #ffffff; position: absolute; right: 20px;">
      <span class="bar"></span>
    </button>

    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn">&times;</a>
      <div class="overlay-content">
	  <?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				'menu_class'	 => 'mobile-list',
				'container'		 => 'overlay-content',
			) );
			?>
      </div>
    </div>

  </nav>
	

	<div id="content" class="site-content">
