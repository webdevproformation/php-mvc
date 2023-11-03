<?php 
declare(strict_types=1);

namespace webdevpro\phpmvc\middlewares ;

use webdevpro\phpmvc\middlewares\BaseMiddleware; 
use webdevpro\phpmvc\exceptions\ForbiddenException;
use webdevpro\phpmvc\Application;

/**
 * 
 */
class AuthMiddleware extends BaseMiddleware
{

  public array $actions ;

  /**
   * [__construct description]
   * @param array $actions si $actions === [] veut dire que le middleware s'applique à toutes les actions du controller concerné
   */
  public function __construct(array $actions = []){
    $this->actions = $actions ;
  }
  
  public function execute() :void{
    if(Application::isGuest()){
      if(empty($this->actions) || in_array(Application::$APP->controller->action , $this->actions)){
          throw new ForbiddenException();
      }
    }
  }
}