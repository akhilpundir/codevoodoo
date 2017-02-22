<?php

use App\Core\App;
use App\Core\Jadu;



//Uncomment the following code if database connection required, please edit config.php for mysql settings
/*
App::bind('config',require '../config.php');


App::bind('database' , new QueryBuilder(
	Connection::make(App::get('config')['database'])
	));
*/

function view($name,$data=[])
{
	extract($data);
	return require "../app/views/{$name}.view.php";
}
function redirect($path)
{
	header("Location: /{$path}");
}


