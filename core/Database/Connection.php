<?php
class Connection{
public static function make($config){
try {
	return new PDO(
		$config['connection'].';dbname='.$config['dbname'], 
		$config['user'], 
		$config['password'],
		$config['options']
		);
	} 
catch (PDOException $e) {
		//print "Error!: " . $e->getMessage() . "<br/>";
		die($e->getMessage());
	}
}
}