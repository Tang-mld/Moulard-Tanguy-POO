<?php

spl_autoload_register(function ($class){
    $folders = [
        'Controller/',
        'Model/',
        'Model/Manager/',
        'Vue/'
    ];

    foreach ($folders as $folder) {
        if(file_exists($folder.$class.'.php')) {
            require $folder.$class.'.php';
            break;
        }
    }
});

?>