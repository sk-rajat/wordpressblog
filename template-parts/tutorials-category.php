<!------  TUTORIALS ALL CATEGORIES ON COL-4 STARTS HERE----------------->
<?php
	// Get the taxonomy's terms
			$terms = get_terms(
			array(
			'taxonomy'   => 'topic',
			'hide_empty' => false,
			)
			);
	// Check if any term exists
	if ( ! empty( $terms ) && is_array( $terms ) ) { ?>
	<div class="wrapper tutorials-sidebar-second-section box mx-auto text-center p-2">
		<ul class="list-group list-unstyled">
			<h4 class="py-3 text-monospace">Topics</h4>
			<?php
			// Run a loop and print(arg)t them all
			foreach ( $terms as $term ) { ?>
			<li class="list-group-item d-flex justify-content-between"><a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="text-capitalize"> <?php echo $term->name; ?></a><i class="fa fa-chevron-circle-right fa-align-right text-primary"></i></li>
			<?php
			}
			?>
		</ul>
		<a href="<?php echo get_post_type_archive_link('tutorials'); ?>" class="btn btn-lg custom-background btn-block my-4 py-3 text-white d-flex justify-content-around border-0 font-weight-bold">View All Tutorials<i class="fa fa-chevron-circle-right fa-align-right"></i></a>
		<?php
		} 
		?>
	</div>

<!------  TUTORIALS ALL CATEGORIES ON COL-4 ENDS HERE----------------->