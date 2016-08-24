<?php
$menues = SCF::get( 'menu-group' );

if ( $menues ) :
?>
	<table class="menu-table">
		<tr>
			<th>メニュー名</th>
			<th>価格</th>
		</tr>
<?php 
	foreach ( $menues as $menu ) :
?>
		<tr>
			<td><strong><?php echo esc_html( $menu['menu'] ); ?></strong><br><span class="comment"><?php echo esc_html( $menu['menu_comment'] ); ?></span></td>
			<td><?php echo number_format( $menu['price'] ); ?>円</td>
		</tr>
<?php
	endforeach;
?>
	</table>
<?php
endif;
