<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cvstart_underscore
 */

?>
		</div>		<!-- container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-footer__inner container container--narrow">
			<div class="group">
				<div class="site-footer__col-one">
					<h1 class="school-logo-text school-logo-text--alt-color"><a href="#"><strong>Fictional</strong> University</a></h1>
					<p><a class="site-footer__link" href="#">555.555.5555</a></p>
        			<div class="site-info">
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cvstart' ) ); ?>">
							<?php
							/* translators: %s: CMS name, i.e. WordPress. */
							printf( esc_html__( 'Proudly powered by %s', 'cvstart' ), 'WordPress' );
							?>
						</a>
						<span class="sep"> | </span>
							<?php
							/* translators: 1: Theme name, 2: Theme author. */
							printf( esc_html__( 'Theme: %1$s by %2$s.', 'cvstart' ), 'cvstart', '<a href="http://bytub.com">Carsten Vilstrup</a>' );
							?>
					</div><!-- .site-info -->
				</div>	<!-- col one -->

				<div class="site-footer__col-two-three-group">
					<div class="site-footer__col-two">
						<h3 class="headline headline--small">Explore</h3>
						<nav class="nav-list">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Programs</a></li>
							<li><a href="#">Events</a></li>
							<li><a href="#">Campuses</a></li>
						</ul>
						</nav>
					</div>

					<div class="site-footer__col-three">
						<h3 class="headline headline--small">Learn</h3>
						<nav class="nav-list">
						<ul>
							<li><a href="#">Legal</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
						</nav>
					</div>
					</div>

					<div class="site-footer__col-four">
					<h3 class="headline headline--small">Connect With Us</h3>
					<nav>
						<ul class="min-list social-icons-list group">
						<li><a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
						<li><a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li><a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</nav>
				</div>
			</div/
		</div>		<!-- container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
