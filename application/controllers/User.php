<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->is_admin()){
			redirect('dashboard', 'refresh');
		}else{
			$this->load->view('user/main');
			
		}
		
	}


	public function profil()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->is_admin()){
			redirect('dashboard', 'refresh');
		}else{
			if ($this->uri->segment(3, "")=="update") {
				$this->load->view('user/profilupdate');
			}elseif ($this->uri->segment(3, "")=="password") {
				$this->load->library( 'form_validation');
				$user = $this->ion_auth->user()->row();
				$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
				$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[new_confirm]');
				$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

				$this->data['min_password_length'] = $this->config->item('min_password_length', 'ion_auth');
				$this->data['old_password'] = [
					'name' => 'old',
					'id' => 'old',
					'type' => 'password',
				];
				$this->data['new_password'] = [
					'name' => 'new',
					'id' => 'new',
					'type' => 'password',
					'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
				];
				$this->data['new_password_confirm'] = [
					'name' => 'new_confirm',
					'id' => 'new_confirm',
					'type' => 'password',
					'pattern' => '^.{' . $this->data['min_password_length'] . '}.*$',
				];
				$this->data['user_id'] = [
					'name' => 'user_id',
					'id' => 'user_id',
					'type' => 'hidden',
					'value' => $user->id,
				];
				$this->load->view('user/gantipassword',$this->data);
			}else{
				$this->load->view('user/profil');
			}
			
			
		}
		
	}


	public function daftar()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->is_admin()){
			redirect('dashboard', 'refresh');
		}else{
			$this->load->view('user/daftar');
			
		}
		
	}


	public function status()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->is_admin()){
			redirect('dashboard', 'refresh');
		}else{
			$this->load->view('user/status');
			
		}
		
	}


	public function history()
	{
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		if ($this->ion_auth->is_admin()){
			redirect('dashboard', 'refresh');
		}else{
			$this->load->view('user/history');
			
		}
		
	}
}
