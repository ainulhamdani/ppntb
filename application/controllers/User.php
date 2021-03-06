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
				$id = $this->ion_auth->get_user_id();
				$data['email'] = $this->db->query("SELECT email FROM users WHERE id=$id")->row()->email;
				$data['data'] = $this->db->query("SELECT * FROM users_info WHERE id=$id")->row();
				$this->load->view('user/profilupdate',$data);
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
				$id = $this->ion_auth->get_user_id();
				$data['email'] = $this->db->query("SELECT email FROM users WHERE id=$id")->row()->email;
				$data['data'] = $this->db->query("SELECT * FROM users_info WHERE id=$id")->row();
				$this->load->view('user/profil',$data);
			}
			
			
		}
		
	}

	public function profilupdate(){
		$id = $this->ion_auth->get_user_id();
		$data = $this->input->post();
		$keys = array_keys($data);
		$last_key = end($keys);
		$query = "UPDATE users_info SET ";
		foreach ($data as $key => $value) {
			$query = $query.$key."='".$value."'";
			if ($key !== $last_key) {
				$query = $query.", ";
			}
		}
		$query = $query." WHERE id=$id";

		$this->db->query($query);

		if ($_FILES['foto']['name']!="") {
			$config['upload_path']          = './assets/img/foto/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 250;
            $config['overwrite']             = TRUE;
            $config['file_name']             = $id.".jpg";

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('foto'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->session->set_flashdata('message', $error['error']);
                    redirect('user/profil/update', 'refresh');
            }
            else
            {
                    $data = array('upload_data' => $this->upload->data());
                    $file_name = $data['upload_data']['file_name'];
                    $time = time();
                    $this->db->query("UPDATE users_info SET foto='$file_name',foto_updated='$time' WHERE id = $id");
                    redirect('user/profil/update', 'refresh');
            }
		}
		redirect('user/profil/update', 'refresh');
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
