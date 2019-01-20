<?php

function __autoload($class_name)
{
    // масив с папками где могут находится классы
    $arr = array(
        '/models/',
        '/components/'
    );

    foreach ($arr as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            include_once $path;
        }
    }
}