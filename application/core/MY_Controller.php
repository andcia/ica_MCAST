<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    # The constructor class
    function __construct()
    {
        parent::__construct();
    }
    public function build($pages = NULL, $data = NULL)
    {
        $start = array(
            'nav' => $this->nav_links()
        );

        $this->load->views('structure/start');

        if(is_array($pages)){
            foreach ($pages as $page => $data) {
                $this->load->view($pages, $data);
            }
        }
        elseif ($pages != NULL) {
            $this->load->view($pages, $data);
        }
        $this->load->view('structure/end');
    }

    public function build_website($pages = NULL, $data = NULL)
    {
        $this->load->view('structure/start');

        if(is_array($pages)){
            foreach ($pages as $page => $data) {
                $this->load->view("structure/{$page}", $data);
            }
        }
        else{
            $this->load->view("structre/{$page}",$data);
        }
        $this->load->view('structure/end');
    }
    function nav_links()
    {
        return array(
            'Lecturers' => 'lecturers',
            'Portfolio' => 'portfolio',
            'Courses' => 'courses',
            'Users' => 'users'
        );
    }
}
