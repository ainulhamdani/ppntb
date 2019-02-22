<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('ion_auth');
		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			$this->load->view('public/home');
		}elseif ($this->ion_auth->is_admin()){
			$this->load->view('admin/main');
		}else{
			redirect('user', 'refresh');
		}
		
	}
}
