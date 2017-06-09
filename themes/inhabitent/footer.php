<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class ="footer-blocks-container">
					<div class ="footer-blocks-item">
						<div class= "contact">
							<h3>Contact info</h3>
							<p>
								<i class ="fa fa-envelope"></i>
								<a href ="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i class ="fa fa-phone"></i>
								<a href ="tel:5553434567891">778-456-7891</a>
							</p>
							<p>
								<span>
									<i class ="fa fa-facebook-square"></i>
								</span>
								<span>
									<i class ="fa fa-twitter-square"></i>
								</span>
								<span>
									<i class ="fa fa-google-plus-square"></i>
								</span>
							</p>              
						</div>
					</div>
					<div class ="footer-blocks-item">
						<div class= "business-hours">
							<h3>Business Hours</h3>
							<p>
								<span class="day-of-week">
									Monday-Friday:
								</span>
								9am to 5pm
							</p>
							<p>
								<span class="day-of-week">
									Saturday:
								</span>
								10am to 2pm
							</p>
							<p>
							<span class="day-of-week">
									Sunday:
								</span>
								Closed
							</p>
						</div>
					</div>
					<div class ="footer-blocks-item">
						<div class= "text-logo">
							<a href="<?php echo site_url();?>"><img src="<?php echo get_template_directory_uri()?>/project-04/images/logos/inhabitent-logo-text.svg" alt ="Inhabitent-logo-text"></a>
						</div>
					</div>
				</div>
				<div class="site-info">
					<p>COPYRIGHT &copy2016 INHABITNET</p>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	

	</body>
</html>
