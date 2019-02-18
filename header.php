<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvstart_underscore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'cvstart' ); ?></a>

	<header id="masthead" class="site-header">
		<div class='container'>
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
<<<<<<< HEAD
				

					<h1 class="school-logo-text float-left"><a href="<?php echo esc_url( home_url( 'home' ) ); ?>"><strong>Fictional</strong> University</a></h1>

=======
					<h1 class="school-logo-text float-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong>Fictional</strong> University</a></h1>
>>>>>>> 5726aade2523194c68f0e89b5fcf41f0b86e4fa4
					<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
					<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
    			<?php
				else :
					?>
<<<<<<< HEAD
					<h1 class="school-logo-text float-left"><a href="<?php echo esc_url( home_url( 'home' ) ); ?>"><strong>Fictional</strong> University</a></h1>

=======
					<h1 class="school-logo-text float-left"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><strong>Fictional</strong> University</a></h1>
>>>>>>> 5726aade2523194c68f0e89b5fcf41f0b86e4fa4
					<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
					<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
					
					<?php
				endif;
				$cvstart_description = get_bloginfo( 'description', 'display' );
				if ( $cvstart_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $cvstart_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<div class="site-header__menu group">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'cvstart' ); ?></button>
					<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Programs</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Campuses</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
					
					<!-- <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?> -->
				</nav><!-- #site-navigation -->
				<div class="site-header__util">
          <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
          <a href="#" class="btn btn--small  btn--dark-orange float-left">Sign Up</a>
          <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        </div>
			</div>	<!-- .site-header__menu group -->
		</div>		<!-- .container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class='container'>
