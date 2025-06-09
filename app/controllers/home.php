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

    public function portfolio() {
        $this->view('home/portfolio');
        die;
    }

  public function contact() {
      $this->view('home/contact');
    die;
  }
}
