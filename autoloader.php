<?php

spl_autoload_register(function ($namespace) {
    $filePath = str_replace("\\", "/", $namespace) . ".php";
    if (file_exists($filePath)) {
        require_once($filePath);
    } else {
        throw new \Exception(sprintf('Can\'t find file by "%s" namespace', $namespace));
    }
});