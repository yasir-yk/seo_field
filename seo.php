<?php if ( get_field( 'meta_title' ) ): ?>
			<?php $meta_title = get_field( 'meta_title' ); else: $meta_title = ''; ?>
		<?php endif; ?>
		<title><?php echo $meta_title ?></title>
		<?php if ( get_field( 'meta_description' ) ): ?>
			<?php $meta_description = get_field( 'meta_description' ); else: $meta_description = ''; ?>
		<?php endif; ?>
		<meta name="description" content="<?php echo $meta_description ?>">
		<?php if ( get_field( 'meta_keyword' ) ): ?>
			<?php $meta_keyword = get_field( 'meta_keyword' ); else: $meta_keyword = '' ?>
		<?php endif; ?>
		<meta name="keywords" content="<?php echo $meta_keyword; ?>">
		<?php if ( get_field( 'meta_box' ) ): ?>
			<?php the_field( 'meta_box' ); ?>
		<?php endif; ?>
		<?php if ( get_field( 'meta_open_graphs' ) ): ?>
			<?php the_field( 'meta_open_graphs' ); ?> 
		<?php endif; ?>