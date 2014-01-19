<?php
namespace Firalabs\Shows\Meta;

use Firalabs\View;
use WP_Post;

/**
 * The category meta used to display the show header into page template
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class PageShowMeta extends AbstractMeta
{

    protected $id = 'firalabs_tv_show_page_show_ meta';

    protected $metaKeys = array(
        'firalabs_tv_show_page_show'
    );

    protected $context = 'side';

    public function __construct()
    {
        parent::__construct();
        $this->title = __('Page Show', 'firalabs-tv-show');
        $this->description = __('Select the show associate to this page', 'firalabs-tv-show');
    }

    /**
     * Render the meta box
     *
     * @param WP_Post $object            
     * @param array $box
     *            the box data
     */
    public function render(WP_Post $post, $box)
    {
        View::make('metabox/page-show.php', array(
            'metaKey' => $this->metaKeys[0],
            'label' => $this->description,
            'post' => $post,
            'shows' => get_posts(array(
                'post_type' => 'firalabs_tv_show'
            ))
        ));
    }

    /**
     * Add the meta box
     */
    public function addMetaBox()
    {
        add_meta_box($this->id, esc_html__($this->title, 'firalabs-tv-show'), array(
            $this,
            'render'
        ), 'page', $this->context, 'default');
    }
}