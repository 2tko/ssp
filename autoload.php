<?php

spl_autoload_register(function ($className) {
    $file = str_replace('\\', '/', $className);
    require_once($file . '.php');
});