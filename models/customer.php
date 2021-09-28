<?php

  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      $this->db->query('SELECT * FROM customer_address_list WHERE `email`=:email');
      $this->db->bind(':email', $data['email']);
      
      $user=$this->db->single(); 
      
     
      
      if($user){
        $this->db->query('UPDATE `customer_address_list` SET `address`=:address_new,`country`=:country,`state`=:states,`zip`=:zip WHERE `email`=:email');
        $this->db->bind(':email', $data['email']);
      $this->db->bind(':address_new', $data['line1']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':states', $data['state']);
      $this->db->bind(':zip', $data['postal_code']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
      }
      else{
      // Prepare Query
      $this->db->query('INSERT INTO customer_address_list (`first_name`, `last_name`,`email`, `address`, `country`, `state`, `zip`, `time_stamp`) VALUES(:first_name, :last_name,:email,:address_new, :country, :states, :zip, :time_stamp)');
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      
     
      $this->db->bind(':address_new', $data['line1']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':states', $data['state']);
      $this->db->bind(':zip', $data['postal_code']);
      $this->db->bind(':time_stamp', $data['time']);
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
      }
      // Bind Values
       
     
      

      // Execute
      
    }

   /* public function getCustomers() {
      $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }*/
  }