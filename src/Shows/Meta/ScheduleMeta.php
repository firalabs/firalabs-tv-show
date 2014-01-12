<?php
namespace Firalabs\Shows\Meta;

/**
 * Schedule meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *
 */
class ScheduleMeta extends AbstractMeta
{

    protected $title = 'Schedule';

    protected $description = 'The schedule url of the show';

    protected $linkMetaKey = 'firalabs_tv_show_schedule_link';
    
    protected $imageMetaKey = 'firalabs_tv_show_schedule_image';
}