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

    protected $id = 'firalabs_tv_show_schedule';

    protected $title = 'Schedule';

    protected $description = 'The schedule url of the show';

    protected $metaKeys = array(
        'firalabs_tv_show_schedule_link',
        'firalabs_tv_show_schedule_description'
    );
}