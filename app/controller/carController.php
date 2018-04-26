<?php 

class carController extends Controller {

	public function index() {
		$this->model('car');
		$this->view('car' . DIRECTORY_SEPARATOR . 'index', ['cars' => $this->model->getCars()]);
		$this->view->page_title = 'this show car page';
		$this->view->render();
	}

	public function edit() {
		$this->view('car\edit');
		$this->view->page_title = 'this car edit page';
		$this->view->render();
	}

	public function delete() {
		$this->view('car\delete');
		$this->view->page_title = 'this car delete page';
		$this->view->render();
	}
}


 ?>