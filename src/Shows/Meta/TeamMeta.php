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

    protected $id = 'firalabs_tv_show_team';

    protected $title = 'Team';

    protected $description = 'The team url of the show';

    protected $metaKeys = array(
        'firalabs_tv_show_team_link',
        'firalabs_tv_show_team_description'
    );
}