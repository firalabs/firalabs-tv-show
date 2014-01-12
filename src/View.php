<?php
namespace Firalabs;

/**
 * CLass use to generate plugin views
 *
 * @author Maxime Beaudoin <firalabs@gmail.com>
 * @package firalabs-tv-show
 *         
 */
class View
{

    /**
     * Generate the view
     *
     * @param string $view            
     * @param array $data            
     */
    public static function make($view, array $data = array())
    {
        // Convert array key to variable
        extract($data);
        
        // Create the view root directory
        $viewsDirectory = plugin_dir_path(__FILE__) . '../views/';
        
        // Return the include view
        include $viewsDirectory . $view;
    }
}