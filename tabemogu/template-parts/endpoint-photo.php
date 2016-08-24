<?php
$gallery = SCF::get( 'gallery' );

if ( $gallery ) :
?>
	<ul>
<?php
	foreach ( $gallery as $menu_image ) :
?>
		<li>
			<?php echo wp_get_attachment_image( $menu_image['menu_images'], 'thumbnail' ); ?>
		</li>
<?php
	endforeach;
?>
	</ul>
<?php
endif;
