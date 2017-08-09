<?php

$container = $app->getContainer();

$container['db'] = function ($c){
	$capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($c['settings']['db']);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};

$container['UserController'] = function ($c){
	return new \App\Controllers\UserController($c['db']);
};