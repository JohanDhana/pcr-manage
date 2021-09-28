<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// define("RECAPTCHA_V3_SECRET_KEY", '6Ldl0nobAAAAALYBbv1GbHah52mJcXyGn43qufvO');

class Event_model extends CI_Model
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

	public function get_event_by_id($id)
	{
		$query = $this->db->select('*')->get_where('tests', array('idtests' => $id));
		return $query->row_array();
	}

	public function get_tests($limit, $start)
	{
		$query = $this->db->select('*,(select sum(total_persons)  from reservations where event_id=tests.idtests ) as total_ticket')
			->get('tests', $limit, $start);
		return	$query->result_array();
	}


	public function get_event_image($event_id)
	{
		$query = $this->db->select('image')->where('idtests', $event_id)->get('tests');
		return $query->row_array();
	}

	public function create_event($img)
	{
		$uniqid = 'EV' . uniqid();

		$data = array(
			'date' => $this->input->post('date'),
			'guest' => $this->input->post('guest'),
			'image' => $img,
			'ticket_price' => $this->input->post('ticket_price'),
			// 'referer' => $this->input->post('referer'),
			'idtests' =>  $uniqid,
		);
		$this->db->insert('tests', $data);
		$this->session->set_flashdata('created', 'Your event was created! Check your event list.');
	}


	public function delete_event($id)
	{
		$this->db->where('idtests', $id)->delete('tests');
		return true;
	}


	public function update_tests($id, $img)
	{

		$data = array(
			'date' => $this->input->post('date'),
			'guest' => $this->input->post('guest'),
			'ticket_price' => $this->input->post('ticket_price'),
		);

		if ($img) {
			$data['image'] = $img;
		}

		$this->db->update('tests', $data, array('idtests' => $id));
	}


	static public function send_email($emailTo, $username, $content, $subject = 'Here is the subject')
	{

		//Load Composer's autoloader
		require 'vendor/autoload.php';

		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);

		try {
			//Server settings
			// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();                                            //Send using SMTP
			$mail->Host       = 'smtp.zoho.eu';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'request@ihow.info';            //SMTP username
			$mail->Password   = 'Jamatje123@';                                       //SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
			$mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

			//Recipients
			$mail->setFrom('request@ihow.info', 'Royal');
			$mail->addAddress($emailTo, $username);     //Add a recipient


			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = $subject;
			$mail->Body    = $content;
			$mail->AltBody = $content;

			$mail->send();
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}
