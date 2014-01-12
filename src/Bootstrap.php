<?php
namespace Firalabs;

use Firalabs\Shows\ShowPostType;
use Firalabs\Shows\ShowPostMeta;

/**
 * Bootstrap class for the plugin
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class Bootstrap
{

    public function __construct()
    {
        $this->il8n();
        
        add_action('init', array(
            $this,
            'init'
        ));
    }

    public function init()
    {
        $postType = new ShowPostType();
        $postType->register();
        
        $loader = new ShowPostMeta();
        $loader->register();
    }

    public function il8n()
    {
        load_plugin_textdomain('firalabs-tv-show', false, basename() . '/firalabs-tv-show/languages');
    }
}