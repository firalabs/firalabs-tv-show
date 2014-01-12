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

    protected $title = 'Show';

    protected $description = 'The url of the show';

    protected $metaKeys = array(
        'firalabs_tv_show_image',
        'firalabs_tv_show_description'
    );
}