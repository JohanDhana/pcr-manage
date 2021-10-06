<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Tests_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}


	public function count_tests()
	{
		$query = $this->db->select('COUNT(*)')->get('tests');
		return	$query->row_array();
	}

	public function get_test_by_id($id)
	{
		$query = $this->db->select('*')->get_where('tests', array('testId' => $id));
		$result = $query->row_array();
		if (!$result) {
			show_404();
		}
		return $result;
	}

	public function get_tests($search_term, $limit, $start)
	{
		if ($search_term) {
			$this->db->like('name', $search_term);
			$this->db->or_like('surname', $search_term);
			$this->db->or_like('personal_nr', $search_term);
		}
		$query = $this->db->select('*')
			->get('tests', $limit, $start);
		return	$query->result_array();
	}

	public function create_test()
	{
		$uniqid = 'TID' . uniqid();
		$result_status = $this->input->post('test_results') === 'on' ? 1 : 0;
		$name = 'qr-tests' . $uniqid;
		$qr_data =   $this->generate_qrcode(base_url() . 'test/' . $uniqid, $name);

		$data = array(
			'country' => $this->input->post('country'),
			'test_results' => $result_status,
			'test_unique_nr' => $this->input->post('test_unique_nr'),
			'test_date' => $this->input->post('test_date'),
			'personal_nr' => $this->input->post('personal_nr'),
			'birthday' => $this->input->post('birthday'),
			'surname' => $this->input->post('surname'),
			'name' =>  $this->input->post('name'),
			'qr_image' => $qr_data['file'],
			'testId' =>  $uniqid,
		);
		$this->db->insert('tests', $data);
		$this->session->set_flashdata('created', 'Your test was created! Click <a href="' . base_url('tests/download_pdf/' . $uniqid) . '?mode=D' . '" target="_blank"> here</a> to downlopad PDF.');
	}


	public function delete_test($id)
	{
		$this->db->where('testId', $id)->delete('tests');
		return true;
	}


	public function update_tests($id)
	{
		$result_status = $this->input->post('test_results') === 'on' ? 1 : 0;

		$data = array(
			'country' => $this->input->post('country'),
			'test_results' => $result_status,
			'test_unique_nr' => $this->input->post('test_unique_nr'),
			'test_date' => $this->input->post('test_date'),
			'personal_nr' => $this->input->post('personal_nr'),
			'birthday' => $this->input->post('birthday'),
			'surname' => $this->input->post('surname'),
			'name' =>  $this->input->post('name'),
		);

		$this->db->update('tests', $data, array('testId' => $id));
	}

	function generate_qrcode($data, $file_name)
	{
		/* Load QR Code Library */
		$this->load->library('ciqrcode');

		/* Data */
		$hex_data   = bin2hex($data);
		$save_name  = $file_name . '.png';

		/* QR Code File Directory Initialize */
		$dir = 'assets/media/qrcode/';
		if (!file_exists($dir)) {
			mkdir($dir, 0775, true);
		}

		/* QR Configuration  */
		$config['cacheable']    = true;
		$config['imagedir']     = $dir;
		$config['quality']      = true;
		$config['size']         = '1024';
		$config['black']        = array(255, 255, 255);
		$config['white']        = array(255, 255, 255);
		$this->ciqrcode->initialize($config);

		/* QR Data  */
		$params['data']     = $data;
		$params['level']    = 'L';
		$params['size']     = 10;
		$params['savename'] = FCPATH . $config['imagedir'] . $save_name;

		$this->ciqrcode->generate($params);

		/* Return Data */
		$return = array(
			'content' => $data,
			'file'    => $dir . $save_name
		);
		return $return;
	}
}
