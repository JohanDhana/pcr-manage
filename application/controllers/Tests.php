<?php
class Tests extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		// Check login
		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}

		$this->load->helper('utils');
		$this->load->helper('url', 'form');
		$this->load->library("pagination");
	}


	public function view($id)
	{
		$data['package'] = $this->tests_model->get_event_by_id($id)[0];

		$this->load->view('templates/header');
		$this->load->view('tests/view', $data);
		$this->load->view('templates/footer');
	}



	public function create()
	{
		$this->check_premissions_event('modify');

		$data['title'] = 'Add tests';

		$this->form_validation->set_rules('country', 'country', 'required');
		// $this->form_validation->set_rules('test_results', 'test_results', 'required');
		$this->form_validation->set_rules('test_unique_nr', 'test_unique_nr', 'required');
		// $this->form_validation->set_rules('test_save_date', 'test_save_date', 'required');
		$this->form_validation->set_rules('test_date', 'test_date', 'required');
		$this->form_validation->set_rules('personal_nr', 'personal_nr', 'required');
		$this->form_validation->set_rules('birthday', 'birthday', 'required');
		$this->form_validation->set_rules('surname', 'surname ', 'required');
		$this->form_validation->set_rules('name', 'name ', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header');
			$this->load->view('tests/create', $data);
			$this->load->view('templates/footer');
		} else {
			// $html = $this->load->view('email_template/thank', [], TRUE);
			// $this->load->library('pdf');
			// $this->pdf->createPDF($html, 'mypdf', false);
			$this->tests_model->create_test();
			header("Refresh:0");
		}
	}


	public function update($id)
	{
		$this->check_premissions_event('modify');

		$data['title'] = 'Edit tests';

		$this->form_validation->set_rules('country', 'country', 'required');
		// $this->form_validation->set_rules('test_results', 'test_results', 'required');
		$this->form_validation->set_rules('test_unique_nr', 'test_unique_nr', 'required');
		// $this->form_validation->set_rules('test_save_date', 'test_save_date', 'required');
		$this->form_validation->set_rules('test_date', 'test_date', 'required');
		$this->form_validation->set_rules('personal_nr', 'personal_nr', 'required');
		$this->form_validation->set_rules('birthday', 'birthday', 'required');
		$this->form_validation->set_rules('surname', 'surname ', 'required');
		$this->form_validation->set_rules('name', 'name ', 'required');

		if ($this->form_validation->run() === FALSE) {
			$data['test'] = $this->tests_model->get_test_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('tests/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$this->tests_model->update_tests($id);
			// Set message
			$this->session->set_flashdata('created', 'Your event has been edited');
			header("Refresh:0");
		}
	}


	public function list()
	{
		$search_term = $this->input->get('q');
		$config = get_pagination_config();
		$config["base_url"] = base_url() . "tests/list";
		$config["total_rows"] = $this->tests_model->count_tests()['COUNT(*)'];
		$this->pagination->initialize($config);
		$offset = ($this->input->get('page')) ? (($this->input->get('page') - 1) * $config["per_page"]) : 0;
		$data["links"] = $this->pagination->create_links();
		$this->load->view('templates/header');
		$data['testList'] = $this->tests_model->get_tests($search_term, $config["per_page"], $offset);
		$this->load->view('tests/list', $data);
		$this->load->view('templates/footer');
	}


	public function delete($id)
	{
		$this->check_premissions_event('modify');

		$this->tests_model->delete_test($id);

		// Set message
		$this->session->set_flashdata('created', 'Your test has been deleted');

		redirect('tests/list');
	}

	public function thank_email()
	{
		$id = $this->uri->segment(3);
		$reservations	= $this->reservation_model->get_reservations_for_event($id);
		foreach ($reservations as $key => $reservation) {
			$email_content = $this->load->view('email_template/thank', [], TRUE);
			// Tests_model::send_email($reservation['email'], $reservation['name'], $email_content);
		}
		redirect('tests/list');
	}


	public function check_premissions_event($action)
	{
		$premissions =	$this->session->userdata('user_premissions');
		if ((strpos($premissions, 'tests') !== false && strpos($premissions, $action) !== false) || $premissions === 'all') {
			return true;
		} else {
			$this->session->set_flashdata('bad_request', 'You dont have premissions!');
			redirect('/');
		}
	}
}
