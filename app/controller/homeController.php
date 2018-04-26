<?php 

class homeController extends Controller {

	public function index($id='', $name='') {
		//echo 'I am in in '. __CLASS__ . ' method ' . __METHOD__;
		//echo 'Id is: ' . $id . ', and name is: ' . $name;
		$this->view('home\index', [
			'name' => $name,
			'id' => $id
		]);
		$this->view->page_title = 'this is home page';
		$this->view->render();
	}

	public function aboutUs() {
		//echo 'I am in in '. __CLASS__ . ' method ' . __METHOD__;
		$this->view('home\aboutUs');
		$this->view->page_title = 'this is about us page';
		$this->view->render();
	}

	public function contact() {
		$this->view('home\contact');
		$this->view->render();
	}

	public function gallery() {
		$this->view('home\gallery');
		$this->view->render();
	}
}


 ?>