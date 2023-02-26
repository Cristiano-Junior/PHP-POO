<?php

spl_autoload_register( function(string $className)
{
    $defaultPath = str_replace("Alura\\Bank", "src", $className);
    $defaultPath = str_replace("\\", DIRECTORY_SEPARATOR, $defaultPath);
    $defaultPath .= ".php";
    
    if(file_exists($defaultPath))
    {
        require_once $defaultPath;
    }
});
