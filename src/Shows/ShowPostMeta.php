<?php
namespace Firalabs\Shows;

use Firalabs\Shows\Meta\ShowMeta;
use Firalabs\Shows\Meta\CategoryMeta;
use Firalabs\Shows\Meta\Box1Meta;
use Firalabs\Shows\Meta\Box2Meta;
use Firalabs\Shows\Meta\Box3Meta;
use Firalabs\Shows\Meta\Box4Meta;

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
        
        $box = new Box1Meta();
        $box->subscribe();
        
        $box = new Box2Meta();
        $box->subscribe();
        
        $box = new Box3Meta();
        $box->subscribe();
        
        $box = new Box4Meta();
        $box->subscribe();
        
        $category = new CategoryMeta();
        $category->subscribe();
    }
}