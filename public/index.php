<?php

use App\Core\{Router,Request};
require '../vendor/autoload.php';
require '../core/bootstrap.php';


require '../app/views/partials/head.php';
$uri = Request::uri();



Router:: load('../app/routes.php')
	->direct($uri, Request::method());
require '../app/views/partials/footer.php';