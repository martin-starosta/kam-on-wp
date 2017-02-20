<?php
/**
 * Template Name: Jobs listing page
 *
 * @package refur
 */

get_header(); ?>

	<div id="primary" class="content-area col-xs-12">
		<main id="main" class="site-main" role="main">
		<?php 
		$args = array(
			'posts_per_page' => 25,
			'offset'           => 0,
			'orderby'          => 'date',
			'order'            => 'DESC',
			'post_type'        => 'jobs',
			'post_status'      => 'publish',
			'suppress_filters' => true,
		);
		$jobs_array = get_posts( $args );
		?>

		<?php foreach ( $jobs_array as $job ) : ?>
			<div class="row">
				<div class="col-xs-12 job-tile">
					<h3>
						<a href="<?php echo esc_html( get_post_meta( $job->ID, 'url', true ) ); ?>" target="_blank">
							<?php echo esc_html( $job->post_title ); ?>
						</a>
					</h3>
					<p><?php echo esc_html( get_post_meta( $job->ID, 'company', true ) ); ?></p>
				</div>
			</div>
		<?php endforeach; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
