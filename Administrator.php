<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function index()
	{
		$data = array(
			'title'=>'user',
			'title_level1'=>'Data User',
			'title_level2'=>'',
			'konten'=>'administrator/users/v_users',

		);
		$this->load->view('administrator/template',$data);
	}
	
}
?>