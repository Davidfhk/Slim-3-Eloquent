<?php

$app->get('/',function($request,$response,$args){
	$response->write("Bienvenido");
	return $response;
});

$app->get('/users', 'UserController:getAll');