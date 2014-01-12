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

    protected $title = 'Show';

    protected $description = 'The url of the show';

    protected $linkMetaKey = 'firalabs_tv_show_link';
    
    protected $imageMetaKey = 'firalabs_tv_show_image';
}