<?php
namespace Firalabs\Shows\Meta;


/**
 * Team meta
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *
 */
class TeamMeta extends AbstractMeta
{

    protected $title = 'Team';

    protected $description = 'The team url of the show';

    protected $linkMetaKey = 'firalabs_tv_show_team_link';
    
    protected $imageMetaKey = 'firalabs_tv_show_team_image';
}