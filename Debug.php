<?php 
declare(strict_types=1);

namespace webdevpro\phpmvc ;

class Debug{


  public static function dump($var){

    echo "<pre onclick='show()'>";
    var_dump($var);
    echo "</pre>";
    echo "<pre class='hide-block' id='debug_backtrace'> ";
    //var_dump(debug_backtrace());
    var_dump(debug_print_backtrace());
    echo "</pre>";
    echo "<style>
      .hide-block{
        display: none;
      }
    </style>";
    echo "<script>
    function show(){
      document.querySelector('#debug_backtrace').classList.toggle('hide-block')
    }
    </script>";
    die();
    
  }

   public static function ddd($variable){
    //dd($variable);
    echo "<pre>";
    debug_print_backtrace();
    //var_dump(debug_backtrace());
    echo "</pre>";
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    die();
  }

}
