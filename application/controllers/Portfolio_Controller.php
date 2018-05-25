<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio_Controller extends MY_Controller {

    # The constructor class
    function __construct()
    {
        parent::__construct();

        $this->load->model('portfolio_model');
    }

	# The Portfolio Page
	public function index()
	{
        $data = array(
            'message'  => 'This is the',
            'emphasis' => 'Portfolio_Controller',
            'name'     => 'Page'
        );

        $this->build_website('portfolio');
	}
    function nav_links()
    {
        return array(
            'Add Portfolio' => 'add_portfolio',
            'Directory'     => 'directory'
        );
    }
}
