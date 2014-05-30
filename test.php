<?php
require 'src/Curl/Json.php';
require 'vendor/autoload.php';

class testCurlJson extends PHPUnit_Framework_TestCase {
	private $curl;

	function __construct(){
		$this->curl=new Curl\Json;
	}

}
