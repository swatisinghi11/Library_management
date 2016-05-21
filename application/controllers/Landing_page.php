<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {
	
	public function index()
		{
			$this->load->view('landing_page');
		}
	public function signin()
		{
			$this->load->view('signin');
		}
	public function librarian()
		{
			$this->load->view('librarian');
		}
	public function add()
		{
			$this->load->view('add');
		}

	public function authentication()
		{
			$signin = array('username'=>$this->input->post('username'),'password'=>$this->input->post('password'));
			$entered_username = $signin["username"];
			$entered_password = $signin["password"];
			if($signin["username"]=="jecrc@lib")
			{
				if($signin["password"]=="123")
				{
					$success=1;
				}
				else
				{
					$success=0;
				}
			}
			else
			{			
				$success=-1;
			}	
			$success=array("success"=>$success);
			echo json_encode($success);
		}
	}