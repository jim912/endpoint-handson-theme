<?php
$map    = SCF::get( 'map' );
$coupon = SCF::get( 'coupon' );

if ( $map ) :
?>
	<h2>アクセスマップ</h2>
	<?php echo wp_get_attachment_image( $map, 'full' ); ?>
<?php
endif;
?>
	<h2>クーポン</h2>
	<?php echo wp_get_attachment_image( $coupon, 'full' ); ?>
<?php
if ( $coupon ) :
endif;
