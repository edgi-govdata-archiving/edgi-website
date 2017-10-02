<?php

/*

Template Name: DataRescue

*/
	get_header();
?>

  <div id="map"></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

      <div id="map_info" class="page type-page status-publish hentry">
		      <h1 class="title-post entry-title">Guerrilla Archiving Toronto</h1>
		      <h4>Toronto, Ontario</h4>
		      <h4>2016/12/17</h4>
		      <h4>Est Attendees: 150</h4>
		      <h4><a href="https://technoscienceunit.wordpress.com/2016/12/04/guerrilla-archiving-event-saving-environmental-data-from-trump/" target="_blank">Website</a></h4>
		      <p>Call to Action: Care about Trump, data, or the environment?<br />Join us for a full day of hackathon activities in preparation for the Trump presidency. <br />Date: 10am-4pm, December 17, 2016 <br />Location: Bissell Building, 4th Floor, 140 St. George St. University of Toronto <br />RSVP and up-to-date information: https://www.facebook.com/events/1828129627464671/</p>
      </div>

			<script src="https://envirodatagov.org/wp-includes/js/d3/d3.v4.min.custom.js"></script>
			<script src="https://envirodatagov.org/wp-includes/js/slick.min.js"></script>
			<script src="https://envirodatagov.org/wp-includes/js/datarescue.js"></script>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
