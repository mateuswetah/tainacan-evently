<?php get_header(); ?>

<div class="bt_bb_wrapper">
	<div class="bt_bb_fe_wrap">
		<div class="bt_bb_section">
			<br>
			<section class="bt_bb_section gutter bt_bb_vertical_align_top">
				<div class="bt_bb_port port">
					<div class="bt_bb_cell">
						<div class="bt_bb_cell_inner">
							<div class="bt_bb_row">
								<div class="bt_bb_column">
									<div class="bt_bb_column_content">
										<?php tainacan_the_collection_description(); ?>
									</div><!-- /rowItemContent -->
								</div><!-- /rowItem -->
							</div><!-- /boldRow -->
						</div><!-- boldCellInner -->
					</div><!-- boldCell -->
				</div>
			</section>
			<br>
			<div class="bt_bb_port">
			<?php 
				tainacan_the_faceted_search([
					'default_view_mode' => 'masonry',
					'default_items_per_page' => 12,
					'hide_filters' => false,
					'hide_hide_filters_button' => false,
					'hide_search' => false,
					'hide_advanced_search' => false,
					'hide_sort_by_button' => false,
					'hide_exposers_button' => false,
					'hide_items_per_page_button' => false,
					'hide_go_to_page_button' => false,
					'show_filters_button_inside_search_control' => false,
					'start_with_filters_hidden' => false,
					'filters_as_modal' => false,
					'show_inline_view_mode_options' => false,
					'show_fullscreen_with_view_modes' => false
				]); 
			?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
