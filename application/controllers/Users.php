<?php
class Users extends CI_Controller
{
	// Log in user
	public function login()
	{
		$data['title'] = 'Sign In';

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/login', $data);
			$this->load->view('templates/footer');
		} else {

			// Get username
			$username = $this->input->post('username');
			// Get and encrypt the password
			$password = hash('sha256', $this->input->post('password'));

			// Login user
			$user = $this->user_model->login($username, $password);
			$user_id = $user['id'];
			$user_premissions = $user['premissions'];


			if ($user_id) {
				// Create session
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true,
					'user_premissions' =>	$user_premissions
				);

				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('created', 'You are now logged in');

				redirect('tests/list');
			} else {
				// Set message
				$this->session->set_flashdata('bad_request', 'Login is invalid');

				redirect('users/login');
			}
		}
	}

	function reset_password()
	{
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}
		$data['title'] = 'Reset Password';
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('new_password', 'New Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('users/reset_password', $data);
			$this->load->view('templates/footer');
		} else {
			// Get username
			$username = $this->session->userdata('username');

			// Get and encrypt the password
			$password = hash('sha256', $this->input->post('password'));

			$new_password = hash('sha256', $this->input->post('new_password'));

			// Login user
			$user = $this->user_model->login($username, $password);
			$user_id = $user['id'];
			$this->user_model->reset_password($username, $new_password);
			if ($user_id) {
				$this->session->set_flashdata('success', 'Password reset');
				redirect('tests/list');
			} else {
				// Set message
				$this->session->set_flashdata('bad_request', 'Credentials are invalid');
				redirect('users/reset-password');
			}
		}
	}

	// Log user out
	public function logout()
	{
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('username');

		// Set message
		$this->session->set_flashdata('created', 'You are now logged out');

		redirect('users/login');
	}

	// Check if username exists
	public function check_username_exists($username)
	{
		$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
		return $this->user_model->check_username_exists($username);
	}

	// Check if email exists
	public function check_email_exists($email)
	{
		$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
		return $this->user_model->check_email_exists($email);
	}
}
