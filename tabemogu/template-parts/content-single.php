<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
$endpoints = array(
	'' => '店舗トップ',
	'menu' => 'メニュー・プラン',
	'photo' => '写真ギャラリー',
	'review' => '口コミ・評価',
	'map' => '地図・クーポン',
);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( is_singular( 'shop' ) ) : ?>
	<ul>
	<?php foreach ( $endpoints as $slug => $tab_name ) : ?>
		<li class="tab-menu<?php echo is_endpoint_page( $slug ) ? ' current' : ''; ?>"><a href="<?php echo get_ep_permalink( $post, $slug ); ?>"><?php echo esc_html( $tab_name ); ?></a></li>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>

	<?php twentysixteen_excerpt(); ?>

	<?php // twentysixteen_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
			$ep_page = false;
			foreach ( $endpoints as $slug => $tab_name ) {
				if ( is_endpoint_page( $slug ) ) {
					get_template_part( 'template-parts/endpoint', $slug );
				}
			}
			
			if ( ! $ep_page ) {
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			}

			if ( '' !== get_the_author_meta( 'description' ) ) {
				get_template_part( 'template-parts/biography' );
			}
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
