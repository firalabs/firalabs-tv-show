<?php
namespace Firalabs\Shows\Meta;

/**
 * Video meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *
 */
class VideoMeta extends AbstractMeta
{
    
    protected $id = 'firalabs_tv_show_video';

    protected $title = 'Videos';

    protected $description = 'The videos url of the show';

    protected $metaKeys = array(
        'firalabs_tv_show_video_link',
        'firalabs_tv_show_video_description'
    );
}