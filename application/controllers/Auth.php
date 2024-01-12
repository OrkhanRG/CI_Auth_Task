<?php

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function user()
	{
		if($this->session->userdata('login') != 'success')
		{
			$this->session->set_flashdata('dntlogin', 'Bu səhifəyə daxil olmağa icazəniz yoxdur! Sistemə Daxil olmaq üçün Qeydiyyatdan keçin');
			redirect(base_url('anasehife'));
		}
		else{
			$this->load->view('profile');
		}
	}

	public function login_page()
	{
		$this->load->view('login');
	}

	public function register_page()
	{
		$this->load->view('register');
	}

	public function login()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Şifrə', 'required|trim');
	

		$this->form_validation->set_message('required', '"%s" sahəsi boş buraxıla bilməz!');
		$this->form_validation->set_message('valid_email', 'Yanlış email formatı daxil edilib!');
		$this->form_validation->set_message('min_lengt', 'Şifrə minium 6 simvoldan ibarət olmalıdır!');

		if(!$this->form_validation->run()){
			$this->load->view('login');
		}
		else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->db->where('email', $email);
			$this->db->where('password', md5($password));
			$query = $this->db->get('users');
			$find_user = $query->num_rows($query);

			if($find_user>0)
			{
				$this->session->set_userdata('name', $query->row()->ad_soyad);
				$this->session->set_userdata('email', $query->row()->email);
				$this->session->set_userdata('login', 'success');

				$this->session->set_flashdata('success', 'Hesaba uğurla daxil olundu!');

				redirect(base_url('anasehife'));
			}
			else{
				$this->session->set_flashdata('error', 'Email və ya Şifrə yanlışdır!');
				redirect(base_url('auth/login_page'));
			}
		}

	
	
	}

	public function register()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'Ad', 'required');
		$this->form_validation->set_rules('surname', 'Soyad', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Şifrə', 'required|trim|min_length[6]');
		$this->form_validation->set_rules('password_conf', 'Şifrə Təkrar', 'required|trim|matches[password]');

		$this->form_validation->set_message('required', '"%s" sahəsi boş buraxıla bilməz!');
		$this->form_validation->set_message('valid_email', 'Yanlış email formatı daxil edilib!');
		$this->form_validation->set_message('is_unique', 'Bu email ilə artıq qeydiyyatdan keçilib!');
		$this->form_validation->set_message('min_length', 'Şifrə minium 6 simvoldan ibarət olmalıdır!');
		$this->form_validation->set_message('min_length', 'Şifrələr eyni olmalıdır!');

		if(!$this->form_validation->run()){
			$this->load->view('register');
		}
		else {
			$data = array(
				'ad_soyad' => $this->input->post('name').' '.$this->input->post('surname'),
				'email' => $this->input->post('email'),
				'dogum_tarix' => date('y.m.d', strtotime($this->input->post('date'))),
				'password' => md5($this->input->post('password'))
			);
	
			$this->load->model('users');
			$this->users->insert($data);
			$this->session->set_flashdata('success', 'Uğurla qeydiyyatdan keçildi!');
			redirect(base_url('Auth/register_page'));
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('anasehife');
	}
}
