<?php

  class BaseDAO{

  		private $dbHost = 'localhost';
  		private $dbName = 'facebookTest';
  		private $username = "erkin";
  		private $password = "samazat13";
  		protected $dbCon = null;

  		function openCon(){

  			$this->dbCon =
        //new PDO($this->dbHost.$this->dbName,$this->username,$this->password);
        new PDO("mysql:host=localhost;dbname=facebookTest", erkin, samazat13);

  		}

  		function closeCon(){

  			$this->dbCon = null;

  		}


  }



?>
