<?php
/**
 * 
* HassCMS (http://www.hassium.org/)
*
* @link http://github.com/hasscms for the canonical source repository
* @copyright Copyright (c) 2016-2099 Hassium Software LLC.
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/
namespace hass\frontend\controllers;


use hass\frontend\BaseController;
use hass\search\actions\SearchAction;


/**
*
* @package hass\package_name
* @author zhepama <zhepama@gmail.com>
* @since 0.1.0
 */

class SearchController extends BaseController
{
    public function actions()
    {
        return [
          "index"=>[
              "class"=>SearchAction::className(),
              "template"=>"index"
          ]
        ];
    }
}
