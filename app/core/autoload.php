<?php

spl_autoload_register(function($class){
    $baseDir = __DIR__.'/../';

    $paths = [
        'controllers' => $baseDir.'controllers/',
        'models'      => $baseDir.'models/',
        'core'        => $baseDir.'core/'
    ];

    foreach($paths as $path){
        $file = $path . $class . '.php';

        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});