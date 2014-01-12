<?php
namespace Firalabs\Shows\Meta;

use Firalabs\View;

/**
 * The category meta used to display post on the show page
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class CategoryMeta extends AbstractMeta
{

    protected $title = 'Category';

    protected $description = 'The category of post you want to display on the show page';

    protected $metaKey = 'firalabs_tv_show_category';

    /**
     * Add the meta box
     */
    public function addMetaBox()
    {
        add_meta_box($this->linkMetaKey, esc_html__($this->title, 'firalabs-tv-show'), array(
            $this,
            'render'
        ), 'firalabs_tv_show', 'side', 'default');
    }

    /**
     * Save the meta
     *
     * @param int $post_id            
     * @param WP_Post $post            
     */
    public function save($post_id, $post)
    {
        /* Get the post type object. */
        $post_type = get_post_type_object($post->post_type);
        
        /* Check if the current user has permission to edit the post. */
        if (! current_user_can($post_type->cap->edit_post, $post_id))
            return $post_id;
        
        $this->update($post_id, $this->metaKey);
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
        View::make('metabox/show-category.php', array(
            'metaKey' => $this->metaKey,
            'description' => $this->description,
            'post' => $post,
            'categories' => get_categories()
        ));
    }
}