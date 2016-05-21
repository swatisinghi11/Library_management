<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students_library_model extends CI_Model {
  
  
  function __construct() 
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  function insert_row($data)
  {
    // echo "inserted.......";
    // $signup = "INSERT INTO users VALUES (".$swati['uuid'].",".$swati['username'].",".$swati['lawyer'].",".$swati['email'].",".$swati['password'].",".$swati['firstname'].", ".$swati['lastname'].",".$swati['imageId'].",".$swati['details'].",)";
        // $this->db->query($sql);
        // echo $this->db->affected_rows();
        // $this->db->set('uuid','UUID()',FALSE);
        $this->std_id = $data['std_id'];
        $this->book_number = $data['book_number'];
        $this->book_name = $data['book_name'];
        $this->issue_date = $data['issue_date'];
        $this->ideal_return_date = $data['year'];
        $this->actual_return_date = "none";
        $this->fine = $data['fine'];
        $this->db->insert('issue_return_details',$this);
  }  

  function create_table()
  { 
    // echo "i am in";
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
    
    
    /* Specify the table schema */
    $fields = array(
                    
                    'std_id' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '255'
                              ),
                    'book_number'=>array(
                                    'type'=>'text'
                                    ),
                    'book_name'=>array(
                                    'type'=>'text'
                                    ),
                    'issue_date'=>array(
                                    'type'=>'text'
                                    ),
                    'ideal_return_date'=>array(
                                    'type'=>'text'
                                    ),
                    'actual_return_date'=>array(
                                    'type'=>'text'
                                    ),
                    'fine'=>array(
                                    'type'=>'int'
                                    ),
                    // 'date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
              );
    
    /* Add the field before creating the table */
    $this->dbforge->add_field($fields);
    
    
    /* Specify the primary key to the 'id' field */
    $this->dbforge->add_key('std_id', TRUE);
    
    
    /* Create the table (if it doesn't already exist) */
    $this->dbforge->create_table('issue_return_details', TRUE);
    // echo "table successfully created";
  } 


}