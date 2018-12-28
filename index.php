<?php

require_once './vendor/autoload.php';

use Slim\Slim;

$app = new Slim();

$app->config('debug', TRUE);

$app->get('/', function () {
    
    $page = new SysMax\Page();
    
    $page->setTpl('index');
    
});

$app->run();