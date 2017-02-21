<?php
require 'environment.php';
define("BASE_URL","http://localhost/ead/");
global $config;
$config=array();

if(ENVIRONMENT=="development"){
	$config['dbname']='ead';
	$config['host']='127.0.0.1';
	$config['dbuser']='root';
	$config['dbpass']='';
}else{
	$config['dbname']='felician_ead';
	$config['host']='127.0.0.1';
	$config['dbuser']='felician_useread';
	$config['dbpass']='PAG3B4-Ee#VN';

}
