<?php 



/*  @PACKAGE MYMOVIES
* 	USE: create metabox.
*	DESCRIPTION: 1. create metabox on my_movie post type only.
*/

function my_movie_meta_callback(){
	$sm_metavalues = get_post_meta(get_the_ID(), 'sm_metavalues', true);
	if(!$sm_metavalues){
		$sm_metavalues['sm_director'] = '';
		$sm_metavalues['sm_writer'] = '';
		$sm_metavalues['sm_stars'] = '';
		$sm_metavalues['sm_genre'] = '';
		$sm_metavalues['sm_runtime'] = '';
	}
	
	
	?>
		<div class="form-group">
			<label for="sm_director"><?php _e('Director', 'mymovies'); ?></label>
			<input value="<?php echo esc_attr($sm_metavalues['sm_director']);  ?>" id="sm_director" type="text" class="form-control" name="sm_director" />
		</div>
		<div class="form-group">
			<label for="sm_writer"><?php _e('Writer', 'mymovies'); ?></label>
			<input  value="<?php echo esc_attr($sm_metavalues['sm_writer']);  ?>" id="sm_writer" type="text" class="form-control" name="sm_writer" />
		</div>
		<div class="form-group">
			<label for="sm_stars"><?php _e('Stars', 'mymovies'); ?></label>
			<input  value="<?php echo esc_attr($sm_metavalues['sm_stars']);  ?>"  id="sm_stars" type="text" class="form-control" name="sm_stars" />
		</div>
		<div class="form-group">
			<label for="sm_genre"><?php _e('Genre', 'mymovies'); ?></label>
			<select name="sm_genre" id="sm_genre" class="form-control">
				<option <?php if($sm_metavalues['sm_genre'] == 'action'){ echo 'selected'; } ?> value="action"><?php _e('Action', 'mymovies'); ?></option>
				<option  <?php if($sm_metavalues['sm_genre'] == 'comedy'){ echo 'selected'; } ?>  value="comedy"><?php _e('Comedy', 'mymovies'); ?></option>
				<option  <?php if($sm_metavalues['sm_genre'] == 'thiller'){ echo 'selected'; } ?>   value="thiller"><?php _e('Thiller', 'mymovies'); ?></option>
				<option  <?php if($sm_metavalues['sm_genre'] == 'others'){ echo 'others'; } ?>   value="others"><?php _e('Others', 'mymovies'); ?></option>
			</select>
		</div>
		<div class="form-group">
			<label for="sm_runtime"><?php _e('Runtime', 'mymovies'); ?></label>
			<input  value="<?php echo esc_attr($sm_metavalues['sm_runtime']);  ?>"  id="sm_runtime"  type="text" class="form-control" name="sm_runtime" />
		</div>
	
	
	
	<?php
}