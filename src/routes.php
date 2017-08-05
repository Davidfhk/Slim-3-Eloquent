<?php

$app->get('/',function($request,$response,$args){
	$response->write("Bienvenido");
	return $response;
});

$app->get('/users', 'UserController:getAll');

$app->get('/user/{id}', 'UserController:getUserForId');

$app->post('/user/new', 'UserController:addUser');