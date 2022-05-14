<?php
    function connect(){
		static $connect = null;
		if ($connect === null) {
		   try{
				$host = 'localhost';
				$username = 'root';
				$password ='root';
				$database = 'climat';
				
				$connect = mysqli_connect($host, $username, $password, $database);
		   }catch (PDOException $e) {
				print "Erreur ! : " . $e->getMessage();
				die();
			}
			
		}
		return $connect;
	}
?>