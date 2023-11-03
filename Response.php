<?php 
declare(strict_types=1);

namespace webdevpro\phpmvc ;

class Response{


  public function setStateCode(int $code){
    http_response_code($code);
  }

  public function redirect(string $path){
    header("Location: $path");
  }
}