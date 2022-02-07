<?php get_header(); ?>

<div class="mkdf-container">         
    <div class="mkdf-container-inner clearfix">
        <div class="mkdf-grid-row  mkdf-grid-large-gutter">
	        <div class="mkdf-page-content-holder mkdf-grid-col-12">
		        <div class="mkdf-blog-holder mkdf-blog-single mkdf-blog-single-standard">
			        <article id="post-<?php echo get_the_ID()?>" class="post-<?php echo get_the_ID() ?> tnc_col_11527_item type-tnc_col_11527_item status-publish format-standard has-post-thumbnail hentry">
                        <div class="mkdf-post-content">
                            <div class="mkdf-post-text">
                                <div class="mkdf-post-text-inner tainacan-single-item--columns">
                                    <div class="tainacan-single-item--column-1">
                                        <div class="wpb_wrapper">
                                            <h6 class="mkdf-st-tagline" style="margin-bottom: 0;">
                                                <a href="<?php echo tainacan_get_source_item_list_url(); ?>">
                                                    <?php tainacan_the_collection_name(); ?>
                                                </a>
                                            </h6>
                                            <h1 itemprop="name" class="entry-title mkdf-post-title"><?php echo single_post_title(); ?></h1>
                                            <div class="vc_separator"></div>
                                        </div>
                                        <?php
                                            include(TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'template-parts/tainacan-item-single-metadata.php' );
                                            do_action( 'tainacan-evently-single-item-after-metadata' );
                                        ?>
                                    </div>
                                    <div class="tainacan-single-item--column-2">
                                        <?php
                                            include(TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'template-parts/tainacan-item-single-attachments.php' );
                                            do_action( 'tainacan-evently-single-item-after-attachments' );
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <?php tainacan_evently_item_navigation(); ?>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

