<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Students_model extends CI_Model {
  
  
  function __construct() 
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  function insert_row($data)
  {
    // echo "inserted.......";
    // $signup = "INSERT INTO users VALUES (".$swati['uuid'].",".$swati['username'].",".$swati['lawyer'].",".$swati['email'].",".$swati['password'].",".$swati['firstname'].", ".$swati['lastname'].",".$swati['imageId'].",".$swati['details'].",)";
        $this->db->query($sql);
        // echo $this->db->affected_rows();
        // $this->db->set('uuid','UUID()',FALSE);
        $this->clg_id = $data['clg_id'];
        $this->firstname = $data['firstname'];
        $this->lastname = $data['lastname'];
        $this->branch = $data['branch'];
        $this->year = $data['year'];

        $this->db->insert('users',$this);
  }  

  function create_table()
  { 
    // echo "i am in";
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
    
    
    /* Specify the table schema */
    $fields = array(
                    
                    'clg_id' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '255'
                              ),
                    'firstname'=>array(
                                    'type'=>'text'
                                    ),
                    'lastname'=>array(
                                    'type'=>'text'
                                    ),
                    'branch'=>array(
                                    'type'=>'text'
                                    ),
                    'year'=>array(
                                    'type'=>'text'
                                    ),
                    // 'date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
              );
    
    /* Add the field before creating the table */
    $this->dbforge->add_field($fields);
    
    
    /* Specify the primary key to the 'id' field */
    $this->dbforge->add_key('clg_id', TRUE);
    
    
    /* Create the table (if it doesn't already exist) */
    $this->dbforge->create_table('users', TRUE);
    // echo "table successfully created";
  } 


}