<?php 

class Application {
	protected $controller = '';
	protected $action = '';
	protected $prams = [];

	public function __construct() {
		$this->prepareURL();
		//echo '<br>' . $this->controller . '<br>' . $this->action . '<br>' . var_dump($this->prams);
		if (file_exists(CONTROLLER. $this->controller . '.php')) {
			$this->controller = new $this->controller;
			if (method_exists($this->controller, $this->action)){
				call_user_func_array([$this->controller, $this->action], $this->prams);
			}
		}
	}

	protected function prepareURL() {
		$request = trim($_SERVER['REQUEST_URI'], '/');
		if (!empty($request)) {
			$url = array_splice((explode('/', $request)), 2);
			$this->controller = isset($url[0]) ? $url[0].'Controller' : 'homeController';
			$this->action = isset($url[1]) ? $url[1] : 'index';
			var_dump($url);
			unset($url[0], $url[1]);
			$this->prams = !empty($url) ? array_values($url) : [];
			var_dump($this->prams);
		}
	}
}

 ?>