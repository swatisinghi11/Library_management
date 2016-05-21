<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users_model extends CI_Model {
  
  
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
        $this->db->set('uuid','UUID()',FALSE);
        // $this->uuid = "uuid";
        $this->username = $data['username'];
        $this->lawyer = $data['lawyer'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->imageId = 1;
        $this->details = "Details not available";

        
        $this->db->insert('users',$this);
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
                    'username' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '255'
                              ),
                    'lawyer'=> array(
                                    'type'=>'text'
                                    ),
                    'email'=>array(
                                    'type'=>'text'
                                    ),
                    'password'=>array(
                                    'type'=>'text'
                                    ),
                    'firstname'=>array(
                                    'type'=>'text'
                                    ),
                    'lastname'=>array(
                                    'type'=>'text'
                                    ),
                    'imageId'=>array(
                                    'type'=>'int'
                                    ),
                    'details'=>array(
                                    'type'=>'text'
                                    )
                    // 'date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
              );
    
    /* Add the field before creating the table */
    $this->dbforge->add_field($fields);
    
    
    /* Specify the primary key to the 'id' field */
    $this->dbforge->add_key('username', TRUE);
    
    
    /* Create the table (if it doesn't already exist) */
    $this->dbforge->create_table('users', TRUE);
    // echo "table successfully created";
  } 


}