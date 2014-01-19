<p>
	<label for="<?php echo $metaKey?>"><?php echo $label; ?></label><br /> 
	<select name="<?php echo $metaKey?>" id="<?php echo $metaKey?>" class="widefat">
	   <option></option>
	   <?php foreach($shows as $show):?>
	       <option value="<?php echo $show->ID?>" <?php echo get_post_meta( $post->ID, $metaKey, true ) == $show->ID?'selected="selected"':'';?> ><?php echo $show->post_title?></option>
	   <?php endforeach;?>
	</select>
</p>