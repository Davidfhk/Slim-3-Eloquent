<?php

require '../vendor/autoload.php';

$settings = require '../src/settings.php';

$app = new Slim\App($settings);

require '../src/routes.php';

$app->run();