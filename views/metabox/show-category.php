<?php wp_nonce_field( basename( __FILE__ ), $metaKey . '_nonce' ); ?>
<p>
	<label for="<?php echo $metaKey?>"><?php echo $label; ?></label><br /> 
	<select name="<?php echo $metaKey?>" id="<?php echo $metaKey?>" class="widefat">
	   <option></option>
	   <?php foreach($categories as $category):?>
	       <option value="<?php echo $category->term_id?>" <?php echo get_post_meta( $post->ID, $metaKey, true ) == $category->term_id?'selected="selected"':'';?> ><?php echo $category->name?></option>
	   <?php endforeach;?>
	</select>
</p>