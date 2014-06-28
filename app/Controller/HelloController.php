<?php

class HelloController extends AppController {
	public $name = 'Hello';
	public $uses = null;
	public $autoRender = false;

	public function index() {
		echo "hello world!";
	}
}


?>