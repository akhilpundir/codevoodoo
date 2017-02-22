<?php

return $config = [
"database" => [
	"connection"=>"mysql:host=localhost",
	"dbname"=>"",
	"user"=>"root",
	"password"=>"",
	"options"=>[
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
]
];