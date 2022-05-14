<?php
session_start();
	if($_SESSION['admin']){
		
		$newdata['titre']=$_GET['titre'];
		$newdata['soustitre']= $_GET['soustitre'];
		$newdata['source'] = $_GET['source'];
		$newdata['resume'] = $_GET['resume'];
                
			
		if(!isset($_SESSION['article'])){
			   $_SESSION['article']=$newdata;
		}else {
			$_SESSION['article']=$newdata;
		}
		
	
		echo json_encode($_SESSION['article']);
	
    }else{
		header('Location: rechauffement_climatique.php');
	}

?>