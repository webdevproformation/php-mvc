<?php 
declare(strict_types=1);

namespace webdevpro\phpmvc;

use webdevpro\phpmvc\middlewares\BaseMiddleware;

class Controller{

  public string $layout = "front";
  /**
   * @var array \webdevpro\phpmvc\middlewares\BaseMiddleware[]
   */
  public array $middlewares = [];

  /**
   * cette propriété est initialisé dans Router dans la méthode resolve
   * @var string
   */
  public string $action = ""; 

  public function render(string $tplName , array $params = []  ){
    return Application::$APP->view->renderView($tplName , $params);
  }

  public function setLayout(string $tplLayoutName) :void{
    $this->layout = $tplLayoutName; 
  }

  public function getLayout() : string {
    /* utilisé dans la méthode layoutContent() de la class webdevpro\phpmvc\Router */
    return $this->layout;
  }

  public function registerMiddleware(BaseMiddleware $middleware){
    $this->middlewares[] = $middleware ; 
  }

  public function getMiddlewares() : array{
    return $this->middlewares; 
  }

}
