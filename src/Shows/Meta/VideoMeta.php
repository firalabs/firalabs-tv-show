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

    protected $metaKeys = array(
        'firalabs_tv_show_video_link',
        'firalabs_tv_show_video_description'
    );

    public function __construct()
    {
        parent::__construct();
        $this->title = __('Videos', 'firalabs-tv-show');
        $this->description = __('The videos url of the show', 'firalabs-tv-show');
        
        $this->labels = array(
            'firalabs_tv_show_video_link' => __('Link', 'firalabs-tv-show'),
            'firalabs_tv_show_video_description' => __('Description', 'firalabs-tv-show')
        );
    }
}