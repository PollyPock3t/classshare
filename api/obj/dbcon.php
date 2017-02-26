<?php

	class dbCon{

		private $db;
		private $dbName = '';
		private $userRW = '';
		private $pwRW	= '';
		private $host 	= 'localhost'

		public function __construct() {
			$this->db = new mysqli( $this->host, $this->userRW, $this->pwRW, $this->dbName );	
		}
	
		public function getDb() {
			return $this->db;
		}
		
		public function closeDb() {
			$this->db->close();
		}

	}
?>