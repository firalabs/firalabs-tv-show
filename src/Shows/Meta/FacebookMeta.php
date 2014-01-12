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

    protected $title = 'Facebook';

    protected $description = 'The facebook url of the show';

    protected $metaKeys = array(
        'firalabs_tv_show_facebook_link',
        'firalabs_tv_show_facebook_description'
    );
}