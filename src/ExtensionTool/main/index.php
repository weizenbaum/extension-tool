<?php 
declare(strict_types=1);

require(__DIR__ . '/MySimpleAutoloader.php');
require_once __DIR__ . '/../../../vendor/autoload.php';

define('PATH_EXTENSION_TOOL_MAIN', realpath(__DIR__ . '/../main') . '/');

define('PATH_EXTENSION_TOOL_ROOT', realpath(PATH_EXTENSION_TOOL_MAIN. '/../') . '/');

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PlainTextHandler);
$whoops->register();

$c = new CreateFromReflection();
$c->create();
require(PATH_EXTENSION_TOOL_ROOT . 'tests/test.php');