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

    protected $metaKeys = array(
        'firalabs_tv_show_schedule_link',
        'firalabs_tv_show_schedule_description'
    );

    public function __construct()
    {
        parent::__construct();
        $this->title = __('Schedule', 'firalabs-tv-show');
        $this->description = __('The schedule url of the show', 'firalabs-tv-show');
        
        $this->labels = array(
            'firalabs_tv_show_schedule_link' => __('Link', 'firalabs-tv-show'),
            'firalabs_tv_show_schedule_description' => __('Description', 'firalabs-tv-show')
        );
    }
}