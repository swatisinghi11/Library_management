<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class book_details_model extends CI_Model {
  
  
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
        $this->book_number = $data['book_number'];
        $this->book_name = $data['book_name'];
        $this->author_name = $data['book_author'];
        $this->publication = $data['publication'];

        $this->db->insert('book_details',$this);
  }  

  function create_table()
  { 
    // echo "i am in";
    /* Load db_forge - used to create databases and tables */
    $this->load->dbforge();
    
    
    /* Specify the table schema */
    $fields = array(
                    
                    'book_number' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '255'
                              ),
                    'book_name'=>array(
                                    'type'=>'text'
                                    ),
                    'author_name'=>array(
                                    'type'=>'text'
                                    ),
                    'publication'=>array(
                                    'type'=>'text'
                                    ),
                    
                    // 'date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'
              );
    
    /* Add the field before creating the table */
    $this->dbforge->add_field($fields);
    
    
    /* Specify the primary key to the 'id' field */
    $this->dbforge->add_key('book_number', TRUE);
    
    
    /* Create the table (if it doesn't already exist) */
    $this->dbforge->create_table('book_details', TRUE);
    // echo "table successfully created";
  } 


}