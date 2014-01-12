<?php
namespace Firalabs\Shows\Meta;

/**
 * Facebook meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class FacebookMeta extends AbstractMeta
{

    protected $id = 'firalabs_tv_show_facebook';

    protected $metaKeys = array(
        'firalabs_tv_show_facebook_link',
        'firalabs_tv_show_facebook_description'
    );

    public function __construct()
    {
        parent::__construct();
        $this->title = __('Facebook', 'firalabs-tv-show');
        $this->description = __('The facebook url of the show', 'firalabs-tv-show');
        
        $this->labels = array(
            'firalabs_tv_show_facebook_link' => __('Link', 'firalabs-tv-show'),
            'firalabs_tv_show_facebook_description' => __('Description', 'firalabs-tv-show')
        );
    }
}