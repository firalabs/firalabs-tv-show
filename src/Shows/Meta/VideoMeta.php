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

    protected $title = 'Videos';

    protected $description = 'The videos url of the show';

    protected $linkMetaKey = 'firalabs_tv_show_video_link';
    
    protected $imageMetaKey = 'firalabs_tv_show_video_image';
}