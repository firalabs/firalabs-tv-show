<?php
namespace Firalabs\Shows;

use Firalabs\Shows\Meta\FacebookMeta;
use Firalabs\Shows\Meta\VideoMeta;
use Firalabs\Shows\Meta\ShowMeta;
use Firalabs\Shows\Meta\TeamMeta;
use Firalabs\Shows\Meta\ScheduleMeta;
use Firalabs\Shows\Meta\CategoryMeta;

/**
 * Register for plugin custom met
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class ShowPostMeta
{

    /**
     * Register all meta
     */
    public function register()
    {
        $show = new ShowMeta();
        $show->subscribe();
        
        $team = new TeamMeta();
        $team->subscribe();
        
        $video = new VideoMeta();
        $video->subscribe();
        
        $schedule = new ScheduleMeta();
        $schedule->subscribe();
        
        $facebook = new FacebookMeta();
        $facebook->subscribe();
        
        $category = new CategoryMeta();
        $category->subscribe();
    }
}