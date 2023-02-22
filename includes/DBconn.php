<?php

class DBconnection{

    protected $db;

 public function getConnection()
    {
       return $this->connect();
    }

  public function connect(){
   
    $conn = NULL;

        try{
            $conn = new PDO("mysql:host=localhost;dbname=his", "mcwayz", "Mcwayz@2020");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e){
                echo 'ERROR: ' . $e->getMessage();
                }   
            $this->db = $conn;

            return $this->db;
    }
   
  }
//@Brian Msyamboza
