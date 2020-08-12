<?php declare(strict_types=1);

spl_autoload_register(function ($class) {
    // Namespace prefix
    $prefix = 'T1k3\\SolidExamples\\';

    // Check if this is a class from our project
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) return; // Nope, it isn't

    // Get the relative class name | Remove the namespace name
    $className = substr($class, $len);

    // Base directory of classes
    $baseDir = '/app/';
    // Relative including
    $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';

    // If the file exists, require it
    if (file_exists($file)) {
        require_once $file;
    }
});
