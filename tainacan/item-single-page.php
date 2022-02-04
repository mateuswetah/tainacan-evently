<?php get_header(); ?>

<article class="btPostSingleItemStandard gutter noPhoto post-<?php echo get_the_ID() ?> post type-post format-standard has-post-thumbnail hentry">
    <div class="entry-content">
        <div class="port">
            <div class="tainacan-item-breadcrumb bt_bb_headline_superheadline_outside">
                <span class="bt_bb_headline_superheadline">
                    <span class="btBreadCrumbs">
                        <span>
                            <a href="<?php echo get_home_url() ?>">Home</a>
                        </span>
                        <span>
                            <a href="<?php echo tainacan_get_source_item_list_url(); ?>">Acervo</a>
                        </span>
                    </span>
                </span>
            </div> 
            <div class="btPostContentHolder">
                <div class="btArticleContent">
                    <div class="bt_bb_wrapper">
                        <?php
                            include(TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'template-parts/tainacan-item-single-attachments.php' );
                            do_action( 'tainacan-evently-single-item-after-attachments' );
                        ?>
                        <br>
                        <hr>
                        <br>
                        <?php
                            include(TAINACAN_EVENTLY_PLUGIN_DIR_PATH . 'template-parts/tainacan-item-single-metadata.php' );
                            do_action( 'tainacan-evently-single-item-after-metadata' );
                        ?>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="btArticleShareEtc">
                    <div class="btShareColumn">
                        <div class="bt_bb_icon btIcoFacebook bt_bb_style_filled bt_bb_size_xsmall bt_bb_shape_circle">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>" target="_self" title="Share on Facebook" data-ico-fa="" class="bt_bb_icon_holder"></a>
                        </div>
                        <div class="bt_bb_icon btIcoTwitter bt_bb_style_filled bt_bb_size_xsmall bt_bb_shape_circle">
                            <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_permalink() ?>" target="_self" title="Share on Twitter" data-ico-fa="" class="bt_bb_icon_holder"></a>
                        </div>
                        <div class="bt_bb_icon btIcoLinkedin bt_bb_style_filled bt_bb_size_xsmall bt_bb_shape_circle">
                            <a href="https://www.linkedin.com/shareArticle?url=<?php echo get_the_permalink() ?>" target="_self" title="Share on Linkedin" data-ico-fa="" class="bt_bb_icon_holder"></a>
                        </div>
                        <div class="bt_bb_icon btIcoWhatsApp bt_bb_style_filled bt_bb_size_xsmall bt_bb_shape_circle">
                            <a href="https://api.whatsapp.com/send?text=<?php echo get_the_permalink() ?>" target="_self" title="Share on WhatsApp" data-ico-fa="" class="bt_bb_icon_holder"></a>
                        </div>
                    </div><!-- /btShareColumn -->
                </div>
            </div>
        </div>
    </div>
</article>

<?php tainacan_evently_item_navigation(); ?>

<?php get_footer(); ?>

