<?php

class Home extends Controller {

    public function index() {
      $user = $this->model('User');
      $data = $user->test();
			
	    $this->view('home/index');
	    die;
    }

  public function about() {
      $this->view('home/about');
      die;
  }

}
