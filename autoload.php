<?php

function autoload_api_classes_11571272016($class)
{
    $classes = [
        'ThreeCentralAPI' => __DIR__ . '/class-api_client.php',
        'ThreeCentralWrapper' => __DIR__ . '/class-api_wrapper.php'
    ];
    //
    if (!empty($classes[$class])) {
        include $classes[$class];
    }
}

spl_autoload_register('autoload_api_classes_11571272016');

// Do nothing
{

}