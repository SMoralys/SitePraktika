<?php

class Marsh {

	public static function start() {
		$controller_name = "main";
		$action_name = "index";

		$uri = $_SERVER["REQUEST_URI"];
		

		$uri = substr($uri, l);
		if ($uri) $action_name = $uri;


		$controller_name = $controller_name."Controller";
		$action_name = "action".$action_name;

		$controller = new $controller_name();
		if (method_exists($controller, $action_name)) $controller->$action_name();
		else $controller->action404();
    

	}
}

?>