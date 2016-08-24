<?php
$reviews = SCF::get( 'reviews' );

if ( $reviews ) :
?>
	<ul>
<?php
	foreach ( $reviews as $review ) :
?>
		<li><?php echo nl2br( esc_html( $review['review'] ) ); ?></li>
<?php
	endforeach;
?>
	</ul>
<?php
endif;
