<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->config(array(
  'templates.path' => './templates',
  'view' => '\Slim\View',
));

// Only invoked if mode is "production"
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'debug' => false,
        'log.level' => \Slim\Log::DEBUG,
        'log.enabled' => true,
    ));
});

// Only invoked if mode is "development"
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true
    ));
});

$app->get('/hello/:name', function ($name) use($app){
  var_dump($app->request());
  var_dump($app->request()->getPath());
      echo "Hello, $name";
});
$app->get('/', function () use($app){
  $app->render('index.php', array('foo' => 'bar'));
});

$app->post('/new', function() use($app){
  $username = $app->request()->params('username');
  $usernmae = trim($username);
  $app->render('index.php', array('username' => $username));
});

$app->run();

