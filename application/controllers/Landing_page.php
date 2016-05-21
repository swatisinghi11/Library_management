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
}