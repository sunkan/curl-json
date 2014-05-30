<?php
include 'src/Curl/Json.php';

class testCurlJson extends PHPUnit_Framework_TestCase {
	private $curl;

	function __construct(){
		$this->curl=new Curl\Json;
	}

}
