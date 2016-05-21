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

	public function select()
		{
			$this->load->view('select');
		}
	public function book_details()
		{
			$this->load->view('book_details');
		}

	public function selected_student()
		{
			$this->load->view('selected_student');

		}
	function __construct() 
	  {
	    /* Call the Model constructor */
	    parent::__construct();
	    $dsn ='mysqli://root:@localhost/legistifyphp';
		$dbconnect = $this->load->database($dsn);
		$this->load->model('Students_model');
		$this->Students_model->create_table();
		$this->load->model('Book_details_model');
		$this->Book_details_model->create_table();
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

	public function student_data_submit()
	{
		$dsn ='mysqli://root:@localhost/legistifyphp';
		$dbconnect = $this->load->database($dsn);

			$student_credentials = array("clg_id"=>$this->input->post('clg_id'),"firstname"=>$this->input->post('firstname'),"lastname"=>$this->input->post('lastname'),"branch"=>$this->input->post('branch'),"year"=>$this->input->post('year'));
			$this->load->model('Students_model');
			$this->Students_model->create_table();
			$this->Students_model->insert_row($student_credentials);
			$success=1;
			$success=array("success"=>$success);
			echo json_encode($success);
	}


	public function book_details_submit()
		{
			$dsn ='mysqli://root:@localhost/legistifyphp';
			$dbconnect = $this->load->database($dsn);

			$book_credentials = array("book_number"=>$this->input->post('book_number'),"book_name"=>$this->input->post('book_name'),"book_author"=>$this->input->post('book_author'),"publication"=>$this->input->post('publication'));
			$this->load->model('book_details_model');
			$this->book_details_model->create_table();
			$this->book_details_model->insert_row($book_credentials);
			$success=1;
			$success=array("success"=>$success);
			echo json_encode($success);
		}


	public function select_id()
		{
			$dsn ='mysqli://root:@localhost/legistifyphp';
	     	$dbconnect = $this->load->database($dsn);
		    $this->load->model('Students_model');
		    $signin = array('clg_id'=>$this->input->post('clg_id'));
		    $entered_clg_id = $signin["clg_id"];
		    $query = $this->db->query('SELECT clg_id, uuid FROM users where clg_id="'.$entered_clg_id.'"');
		    $row = $query->row();
		    $uuid="none";
		    $success=0;
		    if($row){
			    $clg_id= $row->clg_id;
			    $uuid= $row->uuid;
    			$success=1;    
    		}
    		else{
    			$success=0;
    		}
    		$uuid_success=array("uuid"=>$uuid,"success"=>$success);
			echo json_encode($uuid_success);
		}


	public function mainpage_selected_student_initialisation()
		{
			$dsn ='mysqli://root:@localhost/legistifyphp';
		    $dbconnect = $this->load->database($dsn);
		}
	}