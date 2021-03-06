<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vincente
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <title>Arin Webber-Wisely | St. Louis Realtor</title>
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vincente' ); ?></a>

	<header id="masthead" class="site-header container">
    <div class="row flex-sm-row-reverse">
      <div class="col-12 col-sm-6">
        <nav id="site-navigation" class="main-navigation">
			    <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'vincente' ); ?></button> -->
          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'primary-menu',
          ) );
          ?>
        </nav><!-- #site-navigation -->
      </div>
      <div class="col-12 col-sm-6">
        <div class="site-branding">

            <div class="site-title">
            <?php
          the_custom_logo();
          if ( is_front_page() && is_home() ) :
            ?>
              <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
              </h1>
              <a href="tel:1-314-280-8301" id="header-phone">Let's Chat! 314-280-8301</a>

            <?php
          else :
            ?>

            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <a href="tel:1-314-280-8301" id="header-phone">Let's Chat! 314-280-8301</a>
            <?php
          endif;
          $vincente_description = get_bloginfo( 'description', 'display' );
          if ( $vincente_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $vincente_description; /* WPCS: xss ok. */ ?></p>
          <?php endif; ?>
          </div>
        </div><!-- .site-branding -->
      </div>
    </div>
	</header><!-- #masthead -->
  <!-- <?php the_header_image_tag(); ?> -->

	<div id="content" class="site-content">
