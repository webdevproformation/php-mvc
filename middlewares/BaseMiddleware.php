<?php

declare(strict_types=1);

namespace webdevpro\phpmvc\middlewares ;

abstract class BaseMiddleware{
  abstract public function execute():void;
}