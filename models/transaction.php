<?php
session_start();
  class Transaction {
    private $db;

    public function __construct() {
      $this->db = new Database;
    }

    public function addTransaction($data) {
      // Prepare Query
      $this->db->query('INSERT INTO transaction (`customer_id`, `product`, `status`, `amount`, `time_stamp`) VALUES(:customer_id, :product,  :status_new,:amount,:time_stamp)');

      // Bind Values
     
      $this->db->bind(':customer_id', $data['customer_id']);
      $this->db->bind(':product', $data['product']);
      $this->db->bind(':amount', $data['amount']);
      $this->db->bind(':time_stamp', $data['time']);
      $this->db->bind(':status_new', $data['status']);

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