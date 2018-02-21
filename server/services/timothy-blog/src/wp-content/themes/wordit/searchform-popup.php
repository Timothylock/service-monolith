<div class="search-popup-bg">
    <div class="search-popup">
        <a href="javascript:void(0);" class="search-popup-close"><i class="fa fa-times"></i></a>
        <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
            <label>
                <span class="screen-reader-text"><?php _e('Search', 'wordit'); ?></span>
                <input type="search" class="search-field" placeholder="<?php esc_attr_e('Search', 'wordit') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php  esc_attr_e('Search for:', 'wordit') ?>" />
            </label>
            <input type="submit" class="search-submit round-button" value="<?php esc_attr_e('GO!', 'wordit') ?>" />
        </form>
    </div>
</div>