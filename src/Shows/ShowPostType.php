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
                'name' => __('TV Shows'),
                'singular_name' => __('TV Shows')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array(
                'slug' => 'shows'
            )
        ));
    }
}