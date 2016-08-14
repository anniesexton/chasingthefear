<?php
/**
 * Entry meta.
 *
 * @package Munsa Lite
 */
?>

<?php if ( 'post' == get_post_type() || is_search() ) : ?>
	<div class="entry-meta">
		<?php munsa_lite_posted_on(); ?>
	</div><!-- .entry-meta -->
<?php endif;