<?php
session_start();
  class Customer {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addCustomer($data) {
      // Prepare Query
      $this->db->query('INSERT INTO customer_address_list (`first_name`, `last_name`,`email`, `address`, `country`, `state`, `zip`, `time_stamp`) VALUES(:first_name, :last_name,:email,:address_new, :country, :states, :zip, :time_stamp)');

      // Bind Values
     
      $this->db->bind(':first_name', $data['first_name']);
      $this->db->bind(':last_name', $data['last_name']);
      $this->db->bind(':email', $data['email']);
     
      $this->db->bind(':address_new', $data['line1']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':states', $data['state']);
      $this->db->bind(':zip', $data['postal_code']);
      $this->db->bind(':time_stamp', $data['time']);

      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

   /* public function getCustomers() {
      $this->db->query('SELECT * FROM customers ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }*/
  }