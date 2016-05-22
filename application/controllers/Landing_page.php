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

	public function selected_student($uuid)
		{
			$dsn ='mysqli://root:@localhost/legistifyphp';
			$dbconnect = $this->load->database($dsn);
			$dynamic_data=array('current_student'=>array(),'current_student_issue_status'=>array());

		    $this->load->model('Students_model');
		    $query = $this->db->query('SELECT uuid,clg_id,firstname,lastname,branch,year FROM users where uuid="'.$uuid.'"');
		    $row = $query->row();
		    $uuid="none";
		    $success=0;
		    if($row){
		    	$uuid=$row->uuid;
			    $clg_id= $row->clg_id;
			    $firstname= $row->firstname;
			    $lastname= $row->lastname;
			    $branch= $row->branch;
			    $year= $row->year;
    			$success=1;    
    		}
    		else{
    			$success=0;
    		}

		    $current_student=array("uuid"=>$uuid,"clg_id"=>$clg_id,"firstname"=>$firstname,"lastname"=>$lastname,"branch"=>$branch,"year"=>$year);
		    $dynamic_data['current_student']=$current_student;

		    $this->load->model('Students_library_model');
		    $query = $this->db->query('SELECT uuid,std_id,book_number,book_name,issue_date,ideal_return_date,actual_return_date,fine FROM issue_return_details where uuid="'.$uuid.'"');
		    $row = $query->row();
		    $uuid="none";
		    $success=0;
		    if($row){
		    	$uuid=$row->uuid;
			    $std_id= $row->std_id;
			    $book_number= $row->book_number;
			    $book_name= $row->book_name;
			    $issue_date= $row->issue_date;
			    $ideal_return_date= $row->ideal_return_date;
			    $actual_return_date= $row->actual_return_date;
			    $fine= $row->fine;
    			$success=1;    
    		}
    		else{
    			$success=0;
    		}

    		$current_student_issue_status=array("uuid"=>$uuid,"std_id"=>$std_id,"book_number"=>$book_number,"book_name"=>$book_name,"issue_date"=>$issue_date,"ideal_return_date"=>$ideal_return_date,"actual_return_date"=>$actual_return_date,"fine"=>$fine);
		    $dynamic_data['current_student_issue_status']=$current_student_issue_status;

			$this->load->view('selected_student',$dynamic_data);

		}

	public function issue_return_status()
		{
			$this->load->view('issue_return_status');
		}
	public function issue()
		{
			$this->load->view('issue');
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
	

	public function issue_details()
		{
			$dsn ='mysqli://root:@localhost/legistifyphp';
		    $dbconnect = $this->load->database($dsn);
			$all_data=array('book_details'=>array(),'clg_id_and_uuid'=>array());


		    $this->load->model('book_details_model');
		    $issue_info = array('uuid'=>$this->input->post('uuid'),'book_number'=>$this->input->post('book_number'));
		    $entered_book_number= $issue_info['book_number'];
		    $entered_uuid= $issue_info['uuid'];

		    $query = $this->db->query('SELECT book_number, book_name FROM book_details where book_number="'.$entered_book_number.'"');
		    $row = $query->row();
		    $book_number="-";
		    $success=0;
		    if($row){
			    $book_number= $row->book_number;
			    $book_name= $row->book_name;
    			$success=1;    
    		}
    		else{
    			$success=0;
    		}
    		$book_number_success=array("book_number"=>$book_number,"book_name"=>$book_name,"success"=>$success);
    		$all_data['book_details']=$book_number_success;
			// echo json_encode($book_number_success);

		    $this->load->model('Students_model');
		    $query = $this->db->query('SELECT clg_id, uuid  FROM users where uuid="'.$entered_uuid.'"');
		    $row = $query->row();
		    $uuid="none";
		    $success=0;
		    if($row){
			    $uuid= $row->uuid;
			    $clg_id= $row->clg_id;
    			$success=1;    
    		}
    		else{
    			$success=0;
    		}
    		$clg_id_and_uuid=array("uuid"=>$uuid,"clg_id"=>$clg_id);
    		$all_data['clg_id_and_uuid']=$clg_id_and_uuid;

    		$this->load->model('Students_library_model');
			$this->Students_library_model->create_table();
			$this->Students_library_model->insert_row($all_data);
			echo json_encode($all_data);

		}
}
