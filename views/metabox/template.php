<?php wp_nonce_field( basename( __FILE__ ), $linkMetaKey . '_nonce' ); ?>
<p>
    <?php echo $description ?>
</p>
<?php foreach($metaKeys as $key): ?>
<p>
	<label for="<?php echo $key?>"><?php echo $labels[$key]; ?></label><br /> 
	<input class="widefat" type="text" name="<?php echo $key?>" id="<?php echo $key?>" value="<?php echo esc_attr( get_post_meta( $post->ID, $key, true ) ); ?>" size="30" />
</p>
<?php endforeach; ?>