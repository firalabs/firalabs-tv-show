<?php
namespace Firalabs\Shows;

/**
 * Register the TV Show post type
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class ShowPostType
{

    /**
     * Register tv show
     */
    public function register()
    {
        register_post_type('firalabs_tv_show', array(
            'labels' => array(
                'name' => __('TV Shows', 'firalabs-tv-show'),
                'singular_name' => __('TV Show', 'firalabs-tv-show')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => __('shows', 'firalabs-tv-show')
            )
        ));
    }
}