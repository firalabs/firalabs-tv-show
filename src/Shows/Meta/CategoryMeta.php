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
    
    protected $id = 'firalabs_tv_show_category';

    protected $title = 'Category';

    protected $description = 'The category of post you want to display on the show page';

    protected $metaKeys = array(
        'firalabs_tv_show_category'
    );

    protected $context = 'side';

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