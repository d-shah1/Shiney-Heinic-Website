<?php

  class Transaction {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }


    public function addTransactionFull($data) {
      // Prepare Query
      
  

      $query = "INSERT INTO transaction ( `customer_id`, `customer_name`, `shiping_address`, `country`, `state`, `zip`, `bill_address`, `country_bill`, `state_bill`, `zip_bill`,`shiney_heinie_classic`, `shiney_no_the_go`, `status`, `amount`, `time_stamp`,`email`,`phone`,`user_id`)
      VALUES(:customer_id, :customer_name, :ship_add, :ship_country, :ship_state, :ship_zip, :bill_add, 
      :bill_country, :bill_state, :bill_zip, :product_first,:product_second,  :status_new,:amount,:tme,:email,:phone,:u_id)";

      $this->db->query($query);

      // Bind Values
     
   $this->db->bind(':customer_id', $data['customer_id']);
      $this->db->bind(':customer_name', $data['customer_name']);
      $this->db->bind(':ship_add', $data['ship_add']);
      $this->db->bind(':ship_country', $data['ship_country']);
      $this->db->bind(':ship_state', $data['ship_state']);
      $this->db->bind(':ship_zip', $data['ship_zip']);
      $this->db->bind(':bill_add', $data['bill_add']);
      $this->db->bind(':bill_country', $data['bill_country']);
      $this->db->bind(':bill_state', $data['bill_state']);
      $this->db->bind(':bill_zip', $data['bill_zip']);
      $this->db->bind(':product_first', $data['product_first']);
      $this->db->bind(':product_second', $data['product_second']);
      $this->db->bind(':status_new', $data['status']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':tme',$data['time']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);
      $this->db->bind(':u_id', $data['user_id']); 
      // Execute
      if($this->db->execute()) {
        return true;
      } else {
        return false;
      }
    }

    public function getTransactions() {
      $this->db->query('SELECT * FROM transactions ORDER BY created_at DESC');

      $results = $this->db->resultset();

      return $results;
    }
  }