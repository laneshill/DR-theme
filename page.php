<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

<?php /* Creates a menu for pages beneath the level of the current page */
	if (is_page() and ($notfound != '1') and !is_front_page()) {
		$current_page = $post->ID;

		while($current_page) {
			$page_query = $wpdb->get_row("SELECT ID, post_title, post_status, post_parent FROM $wpdb->posts WHERE ID = '$current_page'");
			
			$current_page = $page_query->post_parent;
		}

		$parent_id = $page_query->ID;

		$parent_title = $page_query->post_title;

		if ($wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_parent = '$parent_id' AND post_status != 'attachment'")) { ?>
			<div id="subpage-menu">
				<ul>
					<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=&child_of='. $parent_id); ?>
				</ul>
			</div>
<?php } } ?>

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
