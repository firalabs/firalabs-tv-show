<?php
namespace Firalabs\Shows\Meta;

use Firalabs\View;

/**
 * Abstract class for plugin meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
abstract class AbstractMeta
{

    /**
     * The title of the meta
     *
     * @var string
     */
    protected $title;

    /**
     * The description of the meta
     *
     * @var string
     */
    protected $description;

    /**
     * The link meta key
     *
     * @var string
     */
    protected $linkMetaKey;

    /**
     * The image meta key
     *
     * @var string
     */
    protected $imageMetaKey;

    /**
     * Subscribe action on load a post
     */
    public function subscribe()
    {
        /* Fire our meta box setup function on the post editor screen. */
        add_action('load-post.php', array(
            $this,
            'setup'
        ));
        add_action('load-post-new.php', array(
            $this,
            'setup'
        ));
    }

    /**
     * Setup the meta boxe
     */
    public function setup()
    {
        /* Add meta boxes on the 'add_meta_boxes' hook. */
        add_action('add_meta_boxes', array(
            $this,
            'addMetaBox'
        ));
        
        /* Save post meta on the 'save_post' hook. */
        add_action('save_post', array(
            $this,
            'save'
        ), 10, 2);
    }

    /**
     * Add the meta box
     */
    public function addMetaBox()
    {
        add_meta_box($this->linkMetaKey, esc_html__($this->title, 'firalabs-tv-show'), array(
            $this,
            'render'
        ), 'firalabs_tv_show', 'normal', 'default');
    }

    /**
     * Save the meta
     *
     * @param int $post_id            
     * @param WP_Post $post            
     */
    public function save($post_id, $post)
    {
        /*
         * Verify the nonce before proceeding. if (! isset($_POST[$this->linkMetaKey . '_nonce']) || ! wp_verify_nonce($_POST[$this->linkMetaKey . '_nonce'], basename(__FILE__))) return $post_id;
         */
            
            /* Get the post type object. */
        $post_type = get_post_type_object($post->post_type);
        
        /* Check if the current user has permission to edit the post. */
        if (! current_user_can($post_type->cap->edit_post, $post_id))
            return $post_id;
        
        $this->update($post_id, $this->linkMetaKey);
        $this->update($post_id, $this->imageMetaKey);
    }

    /**
     * Render the meta box
     *
     * @param WP_Post $object            
     * @param array $box
     *            the box data
     */
    public function render($post, $box)
    {
        View::make('metabox/template.php', array(
            'linkMetaKey' => $this->linkMetaKey,
            'imageMetaKey' => $this->imageMetaKey,
            'description' => $this->description,
            'post' => $post
        ));
    }

    /**
     * Update the meta
     *
     * @param int $post_id            
     * @param string $meta_key            
     */
    public function update($post_id, $meta_key)
    {
        
        /* Get the posted data and sanitize it for use as an HTML class. */
        $new_meta_value = (isset($_POST[$meta_key]) ? sanitize_html_class($_POST[$meta_key]) : '');
        
        /* Get the meta value of the custom field key. */
        $meta_value = get_post_meta($post_id, $meta_key, true);
        
        /* If a new meta value was added and there was no previous value, add it. */
        if ($new_meta_value && '' == $meta_value)
            add_post_meta($post_id, $meta_key, $new_meta_value, true);
            
            /* If the new meta value does not match the old value, update it. */
        elseif ($new_meta_value && $new_meta_value != $meta_value)
            update_post_meta($post_id, $meta_key, $new_meta_value);
            
            /* If there is no new meta value but an old value exists, delete it. */
        elseif ('' == $new_meta_value && $meta_value)
            delete_post_meta($post_id, $meta_key, $meta_value);
    }
}