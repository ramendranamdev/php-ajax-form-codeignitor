<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index.php');
	}

	public function submit()
	{
		# code...
		$str = "<div>
						User Information Uploaded.<br>
						Want to add more user
						<button class='btn btn-secondary' onclick='clearCreateForm()'>
							YES
						</button>
				</div>";

		$data = array("successString"=>$str);
		// echo "DATA SUBMIT";
		// $data['row_id'] = $this->main->lastEditedRow();
		$data['row_id'] = $this->main->submit();

		// $res = TRUE;

		if($data['row_id']){
			echo json_encode($data);
		}else{
			echo "Error";
		}
	}
	
	public function getData()
	{
		# code...
		$result = $this->main->getData();
		$data = array();

		foreach( $result as $row ){
			$id = $row->id;
			$name = $row->name;
			$email = $row->email;
			$password = $row->password;
			$localdata = array($id , $name , $email , $password);
			$data[] = $localdata;
		}

		echo json_encode($data);
	}

	public function deleteAll()
	{
		# code...
		$this->main->deleteAll();
		redirect('');

	}

}