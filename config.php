<?php
require 'environment.php';
define("BASE_URL","http://localhost/mvc");
global $config;
$config=array();

if(ENVIRONMENT=="development"){
	$config['dbname']='blog';
	$config['host']='127.0.0.1';
	$config['dbuser']='root';
	$config['dbpass']='';
}else{
	$config['dbname']='felician_mvc';
	$config['host']='127.0.0.1';
	$config['dbuser']='felician_usermvc';
	$config['dbpass']='t=cz-@T6hKW?';

}
