<form class="text-center text-monospace" action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	<?php
		if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 
			echo '<select name="categoryfilter" class="rounded-pill shadow-none p-1 text-primary border border-primary"><option value="">Select category...</option>';
			foreach ( $terms as $term ) :
				echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
			endforeach;
			echo '</select>';
		endif;
	?>
	<!-------OLDEST AND NEWEST POST starts here---------->
	<label>
		<span class="text-primary px-2 font-weight-bold">Oldest</span> <input type="radio" name="date" value="ASC" />
	</label>
	<label>
		<span class="text-primary px-2 font-weight-bold">Latest</span><input type="radio" name="date" value="DESC" selected="selected" />
	</label>
	<!-------OLDEST AND NEWEST POST ends here---------->
	<!-------if FEATURED IMAGE, then display html code----------->
	<label class="px-2"> 
		<span class="text-primary px-2 font-weight-bold">Only posts with featured images</span> <input type="checkbox" name="featured_image" /> 
	</label>
	<!-------if FEATURED IMAGE ends here----------->
	<button class="border-0 custom-background bg-primary rounded-pill text-white px-2 font-weight-bold py-1" id="apply-filter">Apply</button>
	<input type="hidden" name="action" value="myfilter">
</form>
<!--------(RESPONSE DIV)-After clicking on APPLY FILTER, following div will be targeted------->
<div id="response" class="container-fluid">
</div>
<!-----------RESPONSE DIV ends here---------->
