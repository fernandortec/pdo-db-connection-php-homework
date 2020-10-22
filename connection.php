<?php

class connection {
  private $server;
  private $database;
  private $user;
  private $password;

  function __construct(){
    $this->server = "localhost";
    $this->database = "randomdb";
    $this->user = "root";
    $this->password = "";
  }

  public function connect(){
    try {
      $con = new PDO("mysql:host={$this->server};dbname={$this->database};charset=utf8,{$this->user},{$this->password}");
      return $con;
    } catch(PDOException $msg) {
      echo "Could not connect to the database, {$msg->getMessage()}";
    }
  }
}
