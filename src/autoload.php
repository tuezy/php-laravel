<?php
function my_autoloader($class) {
    if(is_numeric(strpos($class, 'Tuezy'))){
        $target = str_replace("Tuezy", 'src', $class);
        $target = str_replace("\\", DIRECTORY_SEPARATOR, $target);
        require ROOT . $target. ".php";
    }
}
spl_autoload_register('my_autoloader');