<?php

require_once '../vendor/autoload.php';
require_once '../config/dotenv.php';
require_once '../config/blade.php';
require_once '../config/router.php';
require_once '../config/eloquent.php';

$response = $router->dispatch($request);

echo $response-> getContent();
#$categories = $router->dispatch($reqest);

#$categories = \Hillel\Models\Category::all();

#var_dump($_ENV['MYSQL_DATABASE']);
#var_dump($_ENV['MYSQL_USER']);
#exit;


#require_once '../configg/eloquent.php';
#require_once '../config/database.php';

#$title = 'абв';

#/**@var $blade \Illuminate\View\Factory*/
#echo $blade->make (view:'pages.home', [ 'title' => $title ])->render();