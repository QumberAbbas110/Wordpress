<?php
if ( ! is_active_sidebar( 'hoot-sub-footer' ) )
	return;
?>
<div <?php hybridextend_attr( 'sub-footer', '', 'inline-nav' ); ?>>
	<div class="hgrid">
		<div class="hgrid-span-12">
			<?php dynamic_sidebar( 'hoot-sub-footer' ); ?>
		</div>
	</div>
</div>