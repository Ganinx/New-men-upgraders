<?php
spl_autoload_register(function ($class) {
    if(str_ends_with($class, 'Controller')){
        require 'Controller/'.$class.'.php';
    }
    else if(str_ends_with($class, 'Manager')){
        require 'Model/Manager/'.$class.'.php';
    }
    else {
        require "Model/".$class.'.php';
    }
});
?>