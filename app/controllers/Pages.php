<?php
class Pages extends Controller {
    public function __construct() {

    }

    public function index() {

        if (isLoggedIn()) {
            redirect('posts');
        }
        $data = [
            'title' => 'MovieDB',
            'description' => 'A simple movie database for movie lovers!',
        ];

        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Us',
            'description' => 'A site to browse different movies and their actors!',
        ];

        $this->view('pages/about', $data);
    }

    public function database() {
        $data = [
            'title' => 'The Database',
            'description' => 'Down below is a table containing the whole DB!',
        ];

        $this->view('pages/database', $data);
    }

}
