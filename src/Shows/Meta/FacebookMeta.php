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

    protected $title = 'Facebook';

    protected $description = 'The facebook url of the show';

    protected $linkMetaKey = 'firalabs_tv_show_facebook_link';
    
    protected $imageMetaKey = 'firalabs_tv_show_facebook_image';
}