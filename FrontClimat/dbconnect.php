<?php
    function connect(){
		static $connect = null;
		if ($connect === null) {
		   try{
				$host = 'localhost';
				$username = 'root';
				$password ='root';
				$database = 'climat';
				
				//$connect = pg_connect($host, $username, $password, $database);
				$connect = pg_connect("host=localhost dbname=climat user=postgres password=mdpprom13");
		   }catch (PDOException $e) {
				print "Erreur ! : " . $e->getMessage();
				die();
			}
			
		}
		return $connect;
	}
?>