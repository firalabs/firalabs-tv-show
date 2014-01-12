<?php wp_nonce_field( basename( __FILE__ ), $linkMetaKey . '_nonce' ); ?>
<p>
    <?php _e($description, 'firalabs-tv-show'); ?>
</p>
<p>
	<label for="<?php echo $linkMetaKey?>"><?php _e('Link', 'firalabs-tv-show'); ?></label><br /> 
	<input class="widefat" type="text" name="<?php echo $linkMetaKey?>" id="<?php echo $linkMetaKey?>" value="<?php echo esc_attr( get_post_meta( $post->ID, $linkMetaKey, true ) ); ?>" size="30" />
</p>

<p>
	<label for="<?php echo $imageMetaKey?>"><?php _e( 'Image', 'firalabs-tv-show' ); ?></label><br /> 
	<input class="widefat" type="text" name="<?php echo $imageMetaKey?>" id="<?php echo $imageMetaKey?>" value="<?php echo esc_attr( get_post_meta( $post->ID, $imageMetaKey, true ) ); ?>" size="30" />
</p>