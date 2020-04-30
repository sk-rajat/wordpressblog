<!-----------------------HEADER  information STARTS HERE----------->
<div class="container-fluid main"><!---COVER ALL DIVS AND FOOTER----------->
<div class="container-fluid pt-5">
	<?php
	$blog_info = get_bloginfo('description');
	if (! empty($blog_info)) {
		echo '<h4 class="text-center d-block font-weight-lighter text-gray mt-5">'.$blog_info.'</h4>';
	}
	else { ?>
		<h4 class="text-center d-block font-weight-lighter text-gray mt-5">Freelance Web Designer & Developer based in Kolding, Denmark.<br><span class="d-none d-sm-block d-sm-none d-md-block">Highly experienced in designing & developing custom Wordpress websites</span>
	</h4>
<?php
	}
	?>
	
</div>
<hr>
<!------------------------HEADER information ENDS HERE----------------->