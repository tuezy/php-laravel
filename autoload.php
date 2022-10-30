<?php
function my_autoloader($class) {
    if(is_numeric(strpos($class, 'Tuezy'))){
        $target = str_replace("Tuezy", "src", $class);
        $target = str_replace("\\", DIRECTORY_SEPARATOR, $target);
        require $target. ".php";
    }

    if(is_numeric(strpos($class, 'Modules\\'))){
        $target = str_replace("Modules\\", MODULES, $class);
        $target = str_replace("\\", DIRECTORY_SEPARATOR, $target);
        require $target. ".php";
    }

}
spl_autoload_register('my_autoloader');