<?php
namespace Firalabs\Shows\Meta;

/**
 * Show meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class ShowMeta extends AbstractMeta
{

    protected $id = 'firalabs_tv_show';

    protected $metaKeys = array(
        'firalabs_tv_show_image',
        'firalabs_tv_show_description'
    );

    public function __construct()
    {
        parent::__construct();
        $this->title = __('TV Show', 'firalabs-tv-show');
        
        $this->labels = array(
            'firalabs_tv_show_image' => __('Image', 'firalabs-tv-show'),
            'firalabs_tv_show_description' => __('Description', 'firalabs-tv-show')
        );
    }
}