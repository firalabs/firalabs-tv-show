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

    protected $metaKeys = array(
        'firalabs_tv_show_team_link',
        'firalabs_tv_show_team_description'
    );

    public function __construct()
    {
        parent::__construct();
        $this->title = __('Team', 'firalabs-tv-show');
        $this->description = __('The team url of the show', 'firalabs-tv-show');
        
        $this->labels = array(
            'firalabs_tv_show_team_link' => __('Link', 'firalabs-tv-show'),
            'firalabs_tv_show_team_description' => __('Description', 'firalabs-tv-show')
        );
    }
}