<?php
class Index
{
    function __construct()
    {
        spl_autoload_register(array($this, 'include_class'));
    }
    public static function include_class($class_name)
    {
        include(__DIR__ . "/include/" . $class_name . ".php");
    }
}

$index = new Index;
$index->include_class('Config');
