<?php

/**
 * I suppressed error reporting here because I don't want to see errors for constants.
 * Our topic is autoloading, not constants.
 **/

error_reporting(E_ALL ^ E_NOTICE);

spl_autoload_register(function ($class) {
    // Just to see if class needs to be loaded.
    echo "Trying to load class '$class'\n";
    require_once __DIR__ . "/include/{$class}.php";
});

/**
 * asks the interpreter to load the class
 * (via calling registered autoloading function we just implemented above)
 * due to not included yet
 */
$config1 = new Config();

// but this line works directly because the class is already included
$config2 = new Config();

/**
 * Output:
 *
 * Trying to load class 'Config'
 * Connected successfully
 * Connected successfully
 */

/**
 * It works basically.
 *
 * But if you want to use (you should) namespaces, this example and yours won't work.
 * Then you'll want to read something magical to solve this problem of yours, and here it is:
 *
 * - https://www.php-fig.org/psr/psr-4/
 **/
