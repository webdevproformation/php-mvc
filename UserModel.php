<?php 
declare(strict_types=1);

namespace webdevpro\phpmvc ;

use webdevpro\phpmvc\db\DbModel ;

/**
 * 
 */
abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string ;
}