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
        $this->uuid=$data['clg_id_and_uuid']['uuid'];
        $this->clg_id = $data['clg_id_and_uuid']['clg_id'];
        $this->book_number = $data['book_details']['book_number'];
        $this->book_name = $data['book_details']['book_name'];
        $this->issue_date = date('d-m-Y');
        $this->ideal_return_date = date('d-m-Y', strtotime(' +10 day'));
        $this->actual_return_date = "-";
        $this->fine = 0;
        $this->db->insert('issue_return_details',$this);
  }  

  function update_fine($update_data){
      $this->db->where('book_number',$update_data["book_number"]);
      $this->db->where('uuid',$update_data["uuid"]);
      $data=array('actual_return_date'=>$update_data["actual_return_date"],'fine'=>$update_data["fine"]);
      $this->db->update('issue_return_details',$data);      

  }

  function create_table()
  { 
    // echo "i am in";
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
    /* Specify the table schema */
    $fields = array(
                    'uuid' => array(
                                  'type' => 'text'
                              ),
                    'clg_id' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '255'
                              ),
                    'book_number'=>array(
                                    'type' => 'VARCHAR',
                                  'constraint' => '255'
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
                                    )
                    // 'date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
              );
    
    /* Add the field before creating the table */
    $this->dbforge->add_field($fields);
    
    // $this->dbforge->add_key('book_number', TRUE);

    
    /* Specify the primary key to the 'id' field */
    $this->dbforge->add_key('book_number', TRUE);
    
    
    /* Create the table (if it doesn't already exist) */
    $this->dbforge->create_table('issue_return_details', TRUE);
    // echo "table successfully created";
  } 


}